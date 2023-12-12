<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminLoginForm(){
        return view('backend.admin.admin_login');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error-msg','Invalid Email or Password');
            return redirect()->back();
        }
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect('login/admin');
    }
}
