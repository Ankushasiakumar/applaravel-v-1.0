<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest')->except('logout');
    	$this->middleware('guest:admin')->except('logout');
    }

    public function adminLogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'remember_token' => $request->remember])) {
    		return redirect()->intended('/backend/dashboard');
    	}else{
    		// dd('erro');
    		return back()->withErrors(['Email and password are incorrect']);
    	}
    }

    public function logout(Request $request)
	{
	   // $this->guard()->logout();
	   $request->session()->flush();
	   $request->session()->regenerate();
	   return redirect()->route('show_adminLogin');
	}
}
