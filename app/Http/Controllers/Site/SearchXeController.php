<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\ThueXe;
use App\Models\Admin\Xe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchXeController extends Controller
{
    function index(){
        $data = Xe::all();
        return view("Site.pages.search",compact('data'));
    }

    function thuexe(Request $request){
        header("Access-Control-Allow-Origin: *");
        if(!Auth::check()){
            $res=[
                'status'=>false,
                'message'=>'Vui lòng đăng nhập để thuê xe',
                'keyerror'=>'1'
            ];
        }else{
            $data= [
                'fullname'=> $request->fullname,
                'phonenumber'=>$request->phonenumber,
                'diadiem'=>$request->diadiem,
                'ngaythue'=>$request->ngaythue,
                'ngaytra'=>$request->ngaytra,
                'iduser'=>Auth::user()->id,
                'idxe' =>$request->idxe,
            ];
            $data = ThueXe::create($data);
            $res=[
                'status'=>true,
                'message'=>'Đăng ký thuê xe thành công',
                'keyerror'=>'0'
            ];
        }
        
        // dd($data);
        return response()->json($res);
    }
}
