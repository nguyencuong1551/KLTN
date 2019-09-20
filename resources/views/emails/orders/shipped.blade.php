<html>
<head>
</head>
<body>
<p>
   <p> Xin chào {{$bill->name}} !</p>
    <p>Cảm ơn Anh/chị đã đặt hàng tại Shopit !</p>
        <p>Đơn hàng của anh/chị đã được xác nhận thành công ngày <strong>{{$bill->created_at}}</strong>.</p>

</p>
<div class="row">
    <div class="col-md 6">
        <h2><strong>Thông tin khách hàng:</strong></h2>
        <p>Tên: {{$bill->name}}</p>
        <p>Số điện thoại: {{$bill->phone}}</p>
        <p>Địa chỉ: {{$bill->address}}</p>
    </div>
    <div class="col-md 6">
        <h2><strong>Thông tin sản phẩm:</strong></h2>
        <p class="text-danger"><strong>Tên sản phẩm: {{$bill->nameSP}}</strong></p>
        <p class="text-danger"><strong>Số lượng: {{$bill->quantity}} sản phẩm</strong></p>
        <p class="text-danger"><strong>Tổng tiền: {{$bill->promotion_price}}</strong></p>
        <p><span>Ghi chú: </span>{{$bill -> note}}</p>
    </div>
</div>
<p>
    Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại:
    <p><strong>hotline: 0383438868 !!</strong></p>
</p>
<div class="row">
    <div class="col-md-7"></div>
    <div class="col-md-4">

            <p>Admin cửa hàng Shopit !!!</p>
    </div>

</div>
</body>
</html>
