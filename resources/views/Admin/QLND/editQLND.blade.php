@extends('master')
@section('title','Sửa thành viên')
@section('content')
    <body background="https://image1.ictnews.vn/_Files/2017/05/17/b6-huong-dan-thay-hinh-nen-powerpoint-dep-hd-de-thuong-ve-thien-nhien-hinh-nen-powerpoint-mau-trang-de-thuong-hinh-nen-powerpoint-don-gian-dep-mau-xanh.jpg">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10">
                <h3>Sửa thành viên</h3>
            </div>
            <div class="col-md-2">
                <a href="{{Route('homeQLND')}}" class="btn btn-warning">Danh sách thành viên</a>
            </div>
        </div>
        <br>
        @if(isset($thongbao))
            <p class="alert alert-success">{{ $thongbao }}</p>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ Route('editQLND',$users->id) }}" method="post">
        @csrf
            <lable>Tên</lable>
            <input type="text" name="name" class="form-control" value="{{$users->name}}">
            <lable>Địa chỉ Email</lable>
            <input type="text" name="email" class="form-control" value="{{$users->email}}">
            <br>
            <input type="submit" name="btnsubmit" class="btn btn-info" value="Lưu">
        </form>
    </div>
    </body>
@endsection