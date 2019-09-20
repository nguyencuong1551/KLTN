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
