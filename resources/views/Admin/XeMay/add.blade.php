@extends('Admin.LayoutAdmin')

@section('content')


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-4">Thêm Sản Phẩm</h4>
                        <form  action="{{route('store')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                               <input type="file" name="imgs[]"  multiple > <br>
                               @if ($errors->has('img'))
                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('img')[0]}}</li></ul>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Tên xe</label>
                                                <input type="text" name="tenxe" value="{{old('tenxe')}}"  required
                                                    placeholder="Nhập tên xe" class="form-control  @error('tenxe') border-error @enderror" id="usertenxe">
                                                    @if ($errors->has('tenxe'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('name')[0]}}</li></ul>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <input type="number"  name="dongia" value="0" 
                                                    placeholder="Nhập giá" class="form-control  @error('dongia') border-error @enderror" id="userName">
                                                    @if ($errors->has('dongia'))
                                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('giamgia')[0]}}</li></ul>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                  
                                   </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Danh Mục</label>
                                                <?php
                                                    $danhMuc= array('Honda','Piaggio','Suzuki','Sym','Yamaha');
                                                ?>
                                                 <select class="form-control select2 @error('danhmuc') border-error @enderror" value="{{old('danhmuc')}}" name="danhmuc">
                                                    @foreach ($danhMuc as $item)
                                                        <option value="{{$item}}">{{$item}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 
                                </div>
                            </div>
    
                           
                            <textarea class="@error('mota') border-error @enderror" id="summernote"  name="mota" >
                                {{old('mota')}}
                            </textarea>
                            @if ($errors->has('mota'))
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('noidung')[0]}}</li></ul>
                            @endif
                        
                          
                            <div class="form-group text-right mb-0 mt-5">
                                <a href="/quantri/sanpham" class="btn-cancel">Huỷ</a>
                                <input type="submit" name="them" class="btn btn-primary waves-effect waves-light ml-2" value="Thêm">
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection