<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    public function index(){

        return view('Admin.login');
    }

    public function checkin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('quantri/');
        } else {
          
            return redirect('/quantri/login')->with('thongbao', 'Tài khoản và mật khẩu không đúng');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/quantri/login');
    }
}
