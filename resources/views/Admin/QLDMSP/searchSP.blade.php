@extends('master')
@section('title','Danh mục / Sản phẩm')
@section('content')
    <body background="https://media.istockphoto.com/photos/background-brick-wall-painted-white-picture-id183387282?k=6&m=183387282&s=612x612&w=0&h=IiueftNQUHvXflm9GcCYp_x78doJBMw1mxepGrNgA40=">
    <div class="container">
        <br>
        <div>
            <form action="{{Route('searchSP')}}" method="post">
                @csrf
                <nav class="navbar navbar-dark bg-dark flex-md-nowrap">
                    <a class="navbar-brand col-sm-3 col-md-3 mr-0" href="{{Route('homeQLDMSP')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="30" viewBox="0 0 24 24">
                            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
                        </svg>
                    </a>
                    <input name="key" class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm sản phẩm"
                           aria-label="Search">
                    <input type="submit" value="Tìm Kiếm" class="navbar btn btn-outline-warning">
                </nav>
            </form>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h4>Danh Mục Sản Phẩm</h4>
                <br>
                @if(session('thongbao'))
                    <p class="alert alert-success">{{ session('thongbao')  }}</p>
                @endif
                <a href="{{Route('addDM')}}" class="btn btn-info">Thêm danh mục</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td><a href="javascript:;" class="manage_group"
                                   id_category="{{$category->id}}">{{$category->name}}</a></td>
                            <td>
                                <a href="{{Route('editDM',$category->id)}}" class="btn btn-info">Sửa</a>
                                <form action="{{Route('deleteDM',$category->id)}}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Xóa">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-9">
                <div class="col-md-9">
                    <h3 class="text-danger">Tìm thấy {{count($products)}} sản phẩm cho từ khóa '{{$request -> key}}'</h3>
                    <br>
                    @if(session('mess'))
                        <p class="alert alert-success">{{ session('mess')}}</p>
                    @endif
                    <a href="{{Route('addSP')}}" class="btn btn-info">Thêm sản phẩm</a>
                    <div id="showCategoryProduct">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Hình ảnh 1</th>
                                <th scope="col">Hình ảnh 2</th>
                                <th scope="col">Hình ảnh 3</th>
                                <th scope="col">Thông tin</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Giá khuyến mại</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        <img src="{{$product->image}}" height="40" width="60">
                                    </td>
                                    <td>
                                        <img src="{{$product->image1}}" height="40" width="60">
                                    </td>
                                    <td>
                                        <img src="{{$product->image2}}" height="40" width="60">
                                    </td>
                                    <td>
                                        <img src="{{$product->image3}}" height="40" width="60">
                                    </td>
                                    <td>{{$product->description}}</td>
                                    <th class="text-danger">{{$product->unit_price}}$</th>
                                    <th class="text-success"> {{$product->promotion_price}}$</th>
                                    <td>
                                        <a href="{{Route('editSP',$product->id)}}" class="btn btn-info">Sửa</a>
                                        <form action="{{Route('deleteSP',$product->id)}}" method="post">
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Xóa">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.manage_group').click(function () {
                var id_category = $(this).attr('id_category');

                //code ajax
                $.ajax({
                    type: "GET",
                    url: "/ajaxSP",
                    data: {id_category: id_category},
                    dataType: 'html',
                    success: function (data) {
                    }
                }).done(function (data) {
                    $('#showCategoryProduct').html(data);
                });
            });
        })
    </script>
    </body>
@endsection