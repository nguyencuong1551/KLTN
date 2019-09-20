@extends('master')
@section('title','Thêm danh mục')
@section('content')
    <body background="https://wikicachlam.com/wp-content/uploads/2019/01/hinh-nen-trang-17.jpg">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10">
                <h3>Thêm danh mục</h3>
            </div>
            <div class="col-md-2">
                <a href="{{Route('homeQLDMSP')}}" class="btn btn-warning">Danh sách danh mục</a>
            </div>
            @if(isset($thongbao))
                <p class="alert alert-success">{{$thongbao}}</p>
            @endif
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        </div>
        <form action="{{Route('addDM')}}" method="post">
        @csrf
        <lable>Name</lable>
        <input type="text" name="name" class="form-control">
        <br>
        <input type="submit" class="btn btn-info" name="btnsubmit" value="Lưu">
        </form>
    </div>
    </body>
@endsection