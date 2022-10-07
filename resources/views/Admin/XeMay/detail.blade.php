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

                        <h4 class="header-title mt-0 mb-4">Xen Sản Phẩm</h4>

                        <form  action="{{route('xe.update',$data->id)}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            {!! method_field('patch') !!}

                            <div class="form-group">
                                <label for="">Hình ảnh</label><br>
                                <div class="d-flex">
                                    @foreach ( json_decode($data->img)  as $item)
                                        <img class="mr-2" width="130" height="90" style="object-fit: cover; border-radius:3px"  src="{{ asset($URL_IMG.$item) }}" alt="">
                                    @endforeach
                                </div>
                              
                            
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Tên xe</label>
                                                <p>{{$data->tenxe}}</p>
                                             </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <p>{{$data->dongia}}</p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Danh Mục</label>
                                                <p>{{$data->danhmuc}}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                              
                                </div>
                            </div>
                          
                            <label>Mô Tả</label><br>
                            {{$data->mota}}
                        
                            
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>

@endsection