@extends('master')
@section('title','Sửa sản phẩm')
@section('content')
    <body background="https://wikicachlam.com/wp-content/uploads/2019/01/hinh-nen-trang-17.jpg">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10">
                <h3>Sửa sản phẩm</h3>
            </div>
            <div class="col-md-2">
                <a class="btn btn-warning" href="{{Route('homeQLDMSP')}}">Danh sách sản phẩm</a>
            </div>
        </div>
        <br>
        @if(isset($mess))
            <p class="alert alert-success">{{$mess}}</p>
        @endif
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
        @endforeach
        <form action="{{Route('editSP',$products->id)}}" method="post">
            @csrf
            <lable>Tên</lable>
            <input type="text" class="form-control" name="name" value="{{$products->name}}">

            <lable>Hình ảnh</lable>
            <input type="text" class="form-control" name="image" value="{{$products->image}}">
            <lable>Hình ảnh</lable>
            <input type="text" class="form-control" name="image1" value="{{$products->image1}}">
            <lable>Hình ảnh</lable>
            <input type="text" class="form-control" name="image2" value="{{$products->image2}}">
            <lable>Hình ảnh</lable>
            <input type="text" class="form-control" name="image3" value="{{$products->image3}}">

            <lable>Thông tin</lable>
            <input type="text" class="form-control" name="description" value="{{$products->description}}">
            <lable>Giá</lable>

            <input type="text" class="form-control" name="unit_price" value="{{$products->unit_price}}">
            <lable>Giá khuyến mại</lable>
            <input type="text" class="form-control" name="promotion_price" value="{{$products->promotion_price}}">
            <br>
            <lable>Danh Mục</lable>
            <select name="id_category" value="{{$products->id_category}}">
                @foreach($categories as $x)
                    <option value="{{$x->id}}">{{$x->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <input type="submit" class="btn btn-info" name="btnsubmit" value="Lưu">
        </form>
    </div>
    </body>
@endsection