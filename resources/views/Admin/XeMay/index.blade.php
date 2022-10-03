@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title">Xe máy</h4>

                        <p class="text-muted font-14 mb-3">
                        Tất cả xe trong cửa hàng
                        </p>
                        <div>
                            <a class="btn btn-primary waves-effect waves-light mb-3" href="quantri/xe/create">Thêm xe</a>
                       </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                 @endif --}}
                            </div>
                        </div>
                        <table id="key-table" class="table table-hover table-bordered ">
                                <thead class="thead-light">
                                    <tr>
                                        <th >STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên xe</th>
                                        <th>Giá</th>
                                        <th >Danh mục</th>
                                        <th >Hành Động </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($data as $item)
                                    <tr id="row{{$item->id}}">
                                        <td class="">{{$loop->index +=1}}</td>
                                        <td><img  class="img-common" src="{{ asset($URL_IMG. json_decode($item->img)[0]) }}"></td>
                                        <td class="" >{{substr($item->tenxe,0,100)}} ..</td>
                                        <th>{{$item->dongia}}</th>
                                        <td > {{substr(trim($item->mota),0,150)}}</td>
                                        <td class="d-flex justify-content-around">
                                            @csrf
                                            <a href="{{route('xe.edit',$item->id)}}"><div class="btn btn-primary mr-2"> <i class="dripicons-pencil"></i></div></a>
                                            <button type="button" onclick="deleteCommon({{$item->id}})" class="btn btn-danger text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Xóa"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row d-flex justify-content-end">
                <div class="col-lg-5">
                    <nav>
                        <ul class="pagination pagination-split">
                            <?php
                            // echo $Pagination;
                            ?>
                        </ul>
                    </nav>

                </div>
            </div>



        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>

           

@endsection
