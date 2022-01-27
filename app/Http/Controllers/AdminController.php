<?php

namespace App\Http\Controllers;

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
}
