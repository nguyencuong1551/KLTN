@extends('master')
@section('title','Quản lý đơn hàng')
@section('content')
    <body background="https://image1.ictnews.vn/_Files/2017/05/17/b6-huong-dan-thay-hinh-nen-powerpoint-dep-hd-de-thuong-ve-thien-nhien-hinh-nen-powerpoint-mau-trang-de-thuong-hinh-nen-powerpoint-don-gian-dep-mau-xanh.jpg">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-10">
                <h3>Danh Sách đơn hàng</h3>
                @if(session('mess'))
                    <p class="alert alert-success">{{session('mess')}}</p>
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
                <th scope="col">Id</th>
                <th scope="col">Tên</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Phương thức thanh toán</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Thời gian đặt hàng</th>
                <th scope="col">Thao tác</th>



            </tr>
            </thead>
            <tbody>
            @foreach($bills as $bill)
                <tr>
                    <th>{{ $bill->id }}</th>
                    <td>{{ $bill->name }}</td>
                    <td>{{ $bill->phone }}</td>
                    <td>{{ $bill->email }}</td>
                    <td>{{ $bill->address }}</td>
                    <td>{{ $bill->payment }}</td>
                    <th class="text-danger">{{ $bill->nameSP }}</th>
                    <th class="text-danger">{{ $bill->quantity }}</th>
                    <th class="text-danger">{{ $bill->promotion_price}}</th>
                    <td>{{ $bill->note }}</td>
                    <th>{{ $bill->created_at }}</th>
                    <td>
                        <form action="{{Route('delete',$bill->id)}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Hủy đơn hàng">
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
                {{$bills->links()}}
            </div>
        </div>
    </div>
    </body>
@endsection