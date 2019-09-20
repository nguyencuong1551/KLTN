@extends('master')
@section('title','Quản lý người dùng')
@section('content')
    <body background="https://image1.ictnews.vn/_Files/2017/05/17/b6-huong-dan-thay-hinh-nen-powerpoint-dep-hd-de-thuong-ve-thien-nhien-hinh-nen-powerpoint-mau-trang-de-thuong-hinh-nen-powerpoint-don-gian-dep-mau-xanh.jpg">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10">
                <h3>Danh Sách Thành Viên</h3>
                @if(session('thongbao'))
                    <p class="alert alert-success">{{ session('thongbao')  }}</p>
                @endif
            </div>
            <div class="col-md-2">
                <a href="{{Route('home')}}" class="btn btn-warning">Về trang quản trị</a>
            </div>
        </div>
        <br>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Địa Chỉ Email</th>
                <th scope="col">Mật Khẩu</th>
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a class="btn btn-info" href="{{Route('editQLND',$user->id)}}">Sửa</a>
                        <form action="{{Route('deleteQLND')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id }}">
                            <input type="submit" class="btn btn-danger" value="Xóa">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col col-md-10">
            </div>
            <div class="2">
                {{$users->links()}}
            </div>
        </div>
    </div>
    </body>
@endsection