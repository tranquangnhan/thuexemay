<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DangNhap;
use App\Models\Admin\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DangNhapController extends Controller
{
    public function index(){

        return view('Admin.login');
    }

    public function checkin(Request $request)
    {
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            if(Auth::user()->role == 0){
                return redirect('/');
            }
            return redirect('/quantri');
        } else {
          
            return redirect('dang-nhap')->with('thongbao', 'Tài khoản và mật khẩu không đúng');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('dang-nhap');
    }

    public function dangky()
    {
        return view('Admin.register');
    }

    public function postDangky(DangNhap $request)
    {  
      
        $data = $request->all();
        $data['role']=0;
        $data = [
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=> 0,
        ];
        
        $check = NguoiDung::create($data);
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect("/")->withSuccess('Great! You have Successfully loggedin');
    }
}
