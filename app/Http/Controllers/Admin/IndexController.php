<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Xe;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data= Xe::all();
       return view('Admin.XeMay.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Admin.XeMay.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->imgs === null){
            return $this->handleErrorInput('Vui lòng chọn hình ảnh');
        }
        $imgs = $this->uploadMultipleImg($this::PATH_UPLOADS,$request->file('imgs'));
        $data = [
            'tenxe'=>$request->tenxe,
            'danhmuc'=>$request->danhmuc,
            'dongia'=> $request->dongia,
            "img"=>$imgs,
            'mota'=>$request->mota,
        ];

       $data= Xe::create( $data);
        if($data){
            return redirect('/quantri');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data  = xe::find($id);
        return view('Admin.XeMay.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = xe::find($id);
        return view('Admin.XeMay.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = [
            'tenxe'=>$request->tenxe,
            'danhmuc'=>$request->danhmuc,
            'dongia'=> $request->dongia,
            'mota'=>$request->mota,
        ];

        if($request->imgs !== null){
            $imgs = $this->uploadMultipleImg($this::PATH_UPLOADS,$request->file('imgs'));
            $data['img'] = $imgs;
        }
        Xe::where('id',$id)->update($data);
        return redirect('quantri/xe')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Xe::destroy($id);
            $message=[
                'message'=>"Xóa xe thành công.",
                'icon'=>'success',
                'error_Code'=>0
            ];
            return $message;
    }
}
