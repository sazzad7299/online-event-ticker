<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use App\Models\OrdersEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        if(!Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
            throw ValidationException::withMessages([
                'email'=> 'Invalid email or Hello'
            ]);
        }
        return redirect()->intended(route('admin.home'));
    }
    public function profile(Request $request, $id=null){
        $id = Auth::user()->id;
        $user = DB::table('admins')->where(['id'=>$id])->first();
        return view('backend.profile')->with(compact('user'));
        
    }
    public function updateDetails(Request $request)
    {
        $id = Auth::user()->id;
        if($request->isMethod('post')){
            $data =$request->all();

            // echo "<pre>"; print_r($data);die;
            $admin = DB::table('admins')->where(['id'=>$id])->update(['name'=>$data['name'],'email'=>$data['email']]);
            return redirect()->back()->with('flash_massage_success','Profile update Successfully');
        }
    }
    public function chkPassword(Request $request){
        $data = $request->all();
        
        $user = DB::table('admins')->where(['id'=>1])->first();
        // dd($userCount);
        if(Hash::check($request->current_pwd,$user->password)){
            echo "true"; die;
        } else{
            echo "false"; die;
        }
    }
    public function updatePassword(Request $request)
    {
        if($request->isMethod('post')){
            $data =$request->all();
            
        $id = Auth::user()->id;
        $user = DB::table('admins')->where(['id'=>$id])->first();
        if(Hash::check($request->current_pwd,$user->password)){
            $password = Hash::make($data['new_pwd']);
            DB::table('admins')->where(['id'=>$id])->update(['password'=>$password]);
            return redirect('/admin/profile')->with('flash_massage_success','Password Update Successfully!');
        } else{
            return redirect('/home/profile')->with('flash_massage_error','Current Password is incorrect!');
        }
        }
    }
    public function index(){
        return view('backend.dashboard');
    }
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }

    public function orders()
    {
        $pendingorders = Orders::where(['status'=>'pending'])->get();
        $comorders = Orders::where(['status'=>'complete'])->get();
        // dd($orders);
        return view('backend.orders.orders')->with(compact('pendingorders','comorders'));
    }
    public function status($id,$status)
    {
        
        $mainorder = Orders::findOrFail($id);
        if ($mainorder->status == "complete"){
            return redirect()->route('admin.orders')->with('message','This Booking is Already Completed');
        }else{
            $stat['status'] = $status;

        if ($status == "complete"){
            $orders = OrdersEvent::where('order_id',$id)->get();

            foreach ($orders as $payee) {
                $order = OrdersEvent::findOrFail($payee->id);
                $sts['pay_status'] = "complete";
                $order->update($sts);
            }
        }

        $mainorder->update($stat);
        return redirect()->route('admin.orders')->with('message','Order Status Updated Successfully');
        }
    }
    public function orderDetails($id)
    {
        $order =Orders::where(['id'=>$id])->first();
        $orders = OrdersEvent::where(['order_id'=>$id])->get();
        $user =User::where(['id'=>$order->user_id])->first();
        return view('backend.orders.details')->with(compact('orders','user','order'));
    }
}
