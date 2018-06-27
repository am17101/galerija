<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct(){
      $this->middleware('guest:admin');
    }

    public function showLoginForm(){
      return view('auth.admin-login');
    }

    public function login(Request $request){
      //validate the form database

      $this->validate($request,[
        'email'=> 'required|email',
        'password' =>'required|min:6'
      ]);
      //atempt to log the user in
      if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=> $request->password], $request->remember)){
          //ja sanaxa,tad redirectot uz to lokalizaciju
      return redirect()->intended(route('admin.dashboard'));
      }
        //bet ja nesanaca, tad redirectot atpakal uz loginu ar data formu
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
