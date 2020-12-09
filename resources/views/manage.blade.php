@extends('master')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh sách đại lý</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{route('create')}}" class="btn btn-success">Thêm mới</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã số đại lý</th>
                                <th>Tên đại lý</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Tên người quản lý</th>
                                <th>Trạng thái</th>

                                <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
@foreach( $egency as $key=>$value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->egency_name}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->address}}</td>
                                    <td>{{$value->manage}}</td>
                                    <td>{{$value->status}}</td>

                                    <td>
                                        <a href="{{route('edit',$value->id)}}" class="btn btn-success mb-1">Sửa</a>
                                        <a href="{{route('delete',$value->id)}}" onclick="return confirm('Bạn có muốn xóa không')" class="btn btn-danger ">Xóa</a>
                                    </td>

                                </tr>
@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

