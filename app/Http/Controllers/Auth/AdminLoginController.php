<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }


    public function showLoginForm()
    {
//        return view('auth.admin-login');

        return view('tione.ualogin');
    }

    public function login(Request $request)
    {
        //Validate the form data

        $this->validate($request, [
            'c_email' =>'required|email',
            'password'=>'required|min:6'
        ]);

        //Attempt to log the user in

        if (Auth::guard('admin')->attempt(['email' =>$request->c_email,'password'=>$request->password],$request->remember)){

            //if successful, then redirect to their intended location

            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessful, then redirect bact to the login with the form data
        return redirect()->back()->withInput($request->only('c_email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
