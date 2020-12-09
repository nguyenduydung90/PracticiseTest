@extends('master')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h2>Thêm đại lý</h2></div>
        <div class="card-body">
            <form action="{{route('update',$egency->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Tên đại lý:</label>
                    <input type="text" class="form-control" name="egency_name" value="{{$egency->egency_name}}">
                </div>

                <div class="form-group">
                    <label for="email">Điện thoại:</label>
                    <input type="text" class="form-control" name="phone" value="{{$egency->phone}} ">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{$egency->email}}">
                </div>

                <div class="form-group">
                    <label for="email">Địa chỉ:</label>
                    <input type="text" class="form-control" name="address" value="{{$egency->address}}">
                </div>

                <div class="form-group">
                    <label for="email">Tên người quản lý:</label>
                    <input type="text" class="form-control" name="manage" value="{{$egency->manage}}">
                </div>
                <div class="form-group">
                    <label for="email">Trạng thái:</label>

                    <select class="form-control"  name="status">
                        <option>------Chọn trạng thái-----------</option>

                        <option value="Đang hoạt động">Đang hoạt động</option>
                        <option value="Đang dừng hoạt động">Đang dừng hoạt động</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

