<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Orders;
use App\Models\OrdersEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
