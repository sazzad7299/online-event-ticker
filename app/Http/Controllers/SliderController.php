<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Image;
// use Symfony\Component\Console\Input\Input;

class SliderController extends Controller
{
    public function addSlider(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		// echo "<pre>"; print_r($data); die;	

    		$banner = new Slider;
			$banner->title = $data['title'];
			$banner->text = $data['text'];
            $banner->position = $data['position'];
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
                    $fileName = $data['title'].rand(111,99999).'.'.$extension;
                    $banner_path = 'assets/img/slider/';
                    $image_tmp->move($banner_path,$fileName);
                     
                    // store product name in product_name
                    $banner->image=$fileName;
                }
            }

            $banner->status = $status;
			$banner->save();
			return redirect()->back()->with('flash_message_success', 'Slider has been added successfully');
    	}
    	
    	return view('backend.slider.add_slider');
    }
    public function editSlider(Request $request, $id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/

            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }

            if(empty($data['title'])){
                $data['title'] = '';
            }

            if(empty($data['text'])){
                $data['text'] = '';
            }

            // Upload Image
            if($request->hasFile('image')){
                $removeLastimage =Slider::find($id);
                unlink("assets/img/slider/".$removeLastimage->image);
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = $data['title'].rand(111,99999).'.'.$extension;
                    $banner_path = 'assets/img/slider/';
                    $image_tmp->move($banner_path,$fileName); 
                }
            }else if(!empty($data['current_image'])){
                $fileName = $data['current_image'];
            }else{
                $fileName = '';
            }


            Slider::where('id',$id)->update(['status'=>$status,'title'=>$data['title'],'text'=>$data['text'],'image'=>$fileName]);
            return redirect()->back()->with('flash_message_success','Slider has been edited Successfully');

        }
        $bannerDetails = Slider::where('id',$id)->first();
        return view('backend.slider.edit_slider')->with(compact('bannerDetails'));
    }
    public function viewSlider(){
        $banners = Slider::get();
        return view('backend.slider.view_slider')->with(compact('banners'));
    }
    public function deleteSlider($id = null){
        $removeLastimage =Slider::find($id);
        unlink("assets/img/slider/".$removeLastimage->image);
        Slider::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Slider has been deleted successfully');
    }

}
