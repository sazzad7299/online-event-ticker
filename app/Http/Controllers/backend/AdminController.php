<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    //

    public function index(){
        return view('backend.dashboard');
    }
    public function loginForm()
    {
        return view('admin.login');
    }
     // Submit Login
     function submit_login(Request $request){
    	$request->validate([
    		'email'=>'required',
    		'password'=>'required'
    	]);

    	$userCheck=Admin::where(['email'=>$request->email,'password'=>$request->password])->count();
    	if($userCheck>0){
            $adminData=Admin::where(['email'=>$request->email,'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
    		return redirect('dashboard');
    	}else{
    		return redirect('admin/login')->with('error','Invalid username/password!!');
    	}

    }
    // Dashboard
    function dashboard(){
        $posts=Post::orderBy('id','desc')->get();
    	return view('backend.dashboard',['posts'=>$posts]);
    }
    function logout()
    {
        session()->forget(['adminData']);
        return redirect('admin/login');
    }

}
