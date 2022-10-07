@extends('Admin.LayoutAdmin')

@section('content')
<?php 
 use App\Models\Admin\NguoiDung;

?>
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
                                        <th>Tên đầy đủ</th>
                                        <th>Tên xe</th>
                                        <th>Địa Điểm</th>
                                        <th >Ngày Thuê</th>
                                        <th >Ngày Trả</th>
                                        <th >Email</th>
                                        <th >Loại xe</th>
                                        <th >Trạng Thái</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($data as $item)
                                    <tr id="row{{$item->id}}">
                                        <td class="">{{$loop->index +=1}}</td>
                                    
                                        <td class="" >{{$item->fullname}} </td>
                                        <th>{{$item->phonenumber}}</th>
                                        <th>{{$item->diadiem}}</th>
                                        <th>{{$item->ngaythue}}</th>
                                        <th>{{$item->ngaytra}}</th>
                                        <th>{{NguoiDung::find($item->iduser)->email}}</th>
                                        <th>   <a href="quantri/xe/{{$item->idxe}}"><div class="btn btn-primary mr-2"> Xem Xe</div></a></th>
                                        <td class="d-flex justify-content-around">
                                            @if ($item->trangthai == 0)
                                                <a href="quantri/thue-xe/duyet/{{$item->id}}"><div class="btn btn-success mr-2"> Duyệt</div></a>
                                                <a href="quantri/thue-xe/huy/{{$item->id}}"><div class="btn btn-danger mr-2"> Hủy</div></a>
                                            @elseif ($item->trangthai == 1)
                                                <div class="btn btn-danger mr-2"> Đã Hủy</div>
                                            @elseif($item->trangthai == 2)
                                                <div class="btn btn-success mr-2"> Đã Duyệt</div>
                                            @endif
                                           
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
