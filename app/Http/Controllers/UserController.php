<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\OrdersEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::where(['id'=>$id])->first();
        return view('users.profile')->with(compact('user'));
    }
    public function updateDetails(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::where(['id'=>$id])->first();
        if($request->isMethod('post')){
            $data =$request->all();
            $user = User::where(['id'=>$id])->update(['name'=>$data['name'],'phone'=>$data['phone']]);
            return redirect()->back()->with('flash_massage_success','Profile update Successfully');
        }
        
    }
    public function chkPassword(Request $request){
        $data = $request->all();
        $id = Auth::user()->id;
        $user = User::where(['id'=>$id])->first();
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
        $user = User::where(['id'=>$id])->first();
        // dd($userCount);
        if(Hash::check($request->current_pwd,$user->password)){
            $password = Hash::make($data['new_pwd']);
            User::where('id',$id)->update(['password'=>$password]);
            return redirect('/home/profile')->with('flash_massage_success','Password Update Successfully!');
        } else{
            return redirect('/home/profile')->with('flash_massage_error','Current Password is incorrect!');
        }
        }
    }
    public function booking()
    {
        $user_id = Auth::user()->id;
        $orders =OrdersEvent::where('user_id',$user_id)->get();
        
        
        return view('users.booking')->with(compact('orders'));
    }
    public function details($id)
    {
        $orderDetails =OrdersEvent::where('id',$id)->first();
        // dd($orderDetails);
        $eventDetails = Event::where('id',$orderDetails->event_id)->first();
        // echo $eventDetails;die;
        $user = User::where(['id'=>Auth::user()->id])->first();
        return view('users.bookingdetails')->with(compact('orderDetails','user','eventDetails'));
    }
}