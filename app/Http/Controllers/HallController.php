<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HallController extends Controller
{
    public function viewHall()
    {
        $halls = Hall::get();
        return view('backend.hall.show')->with(compact('halls'));
    }
    public function addHall(Request $request)
    {
        if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data); die;	

    		$hall = new Hall;
			$hall->name = $data['name'];
			$hall->desc = $data['desc'];
            $hall->fPrice = $data['fPrice'];
            $hall->dPrice = $data['dPrice'];
            $hall->nPrice = $data['nPrice'];
            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }

			// Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){ 
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = $data['name'].rand(111,99999).'.'.$extension;
                    $hall_path = 'assets/img/hall/';
                    $image_tmp->move($hall_path,$fileName);
                     
                    // store product name in product_name
                    $hall->image=$fileName;
                }
            }

            $hall->status = $status;
			$hall->save();
			return redirect()->back()->with('flash_message_success', 'Slider has been added successfully');
    	}
        return view('backend.hall.create');
    }
    public function editHall(Request $request, $id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }
            $removeLastimage =Hall::find($id);
            if($request->hasFile('image')){
                
                unlink("assets/img/hall/".$removeLastimage->image);
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = $data['name'].rand(111,99999).'.'.$extension;
                    $banner_path = 'assets/img/hall/';
                    $image_tmp->move($banner_path,$fileName); 
                }
            }else{
                $fileName = $removeLastimage->image;
            }
            Hall::where('id',$id)->update(['status'=>$status,'name'=>$data['name'],'desc'=>$data['desc'],'dPrice'=>$data['dPrice'],'nPrice'=>$data['nPrice'],'fPrice'=>$data['fPrice'],'image'=>$fileName]);
            return redirect()->back()->with('flash_message_success','Update Successfully');
        }

        $hallDetails = Hall::where('id',$id)->first();
        return view('backend.hall.edit')->with(compact('hallDetails'));
    }
    public function deleteHall($id = null){
        $removeLastimage =Hall::find($id);
        unlink("assets/img/hall/".$removeLastimage->image);
        Hall::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Hall has been deleted successfully');
    }

    public function frontView()
    {
        $halls = Hall::where('status','1')->get();
        return view('halls')->with(compact('halls'));
    }
    public function singleHall ($id)
    {
        $hall = Hall::findOrfail($id);
        return view('singlehall')->with(compact('hall'));
    }
    public function reqHall(Request $request)
    {
        $user = DB::table('admins')->where(['id'=>1])->first();
        $adminEmail = $user->email;
        $data = $request->all();
        // dd($data);
        $messageData =[
            'name'=>$data['name'],
            'hall'=>$data['hall_name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'date' => $data['date'],
            'ocation' => $data['ocation'],
            'time' => $data['time'],
            'person' => $data['person'],
            'budget' => $data['budget'],
        ];
        Mail::send('emails.reserve',$messageData,function($message) use($adminEmail){
            $message->to($adminEmail)->subject('Request new reservation');
        });
        return redirect()->back();
    }
    
}
