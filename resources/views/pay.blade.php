@extends('layouts.app')
<title>Thanh toán</title>
@section('content')

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Checkout example · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    <div class="container">
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
        @endforeach
        <form action="{{Route('savepay')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Sản phẩm</span>
                        <span class="badge badge-secondary badge-pill"><svg width="25" height="25"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill-rule="evenodd" clip-rule="evenodd"><path
                                        d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z"/></svg></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <p><strong class="my-0">{{$products->name}}</strong></p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="{{$products->image}}" width="150" height="100">
                                            </div>
                                            <div class="carousel-item ">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="{{$products->image1}}" width="150" height="100">

                                            </div>
                                            <div class="carousel-item ">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="{{$products->image2}}" width="150" height="100">

                                            </div>
                                            <div class="carousel-item ">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="{{$products->image3}}" width="150" height="100">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Giá:</h6>
                            </div>
                            <strike><span class="text-dark">{{$products->unit_price}}$</span></strike>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Giá khuyến mại:</h6>
                            </div>
                            <span class="text-success">{{$products->promotion_price}}$</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong>Đơn giá (USD):</strong>
                            <strong>{{$products->promotion_price}}$</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h3 class=" mb-3">Thông tin hóa đơn
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <path d="M12.164 7.165c-1.15.191-1.702 1.233-1.231 2.328.498 1.155 1.921 1.895 3.094 1.603 1.039-.257 1.519-1.252 1.069-2.295-.471-1.095-1.784-1.827-2.932-1.636zm1.484 2.998l.104.229-.219.045-.097-.219c-.226.041-.482.035-.719-.027l-.065-.387c.195.03.438.058.623.02l.125-.041c.221-.109.152-.387-.176-.453-.245-.054-.893-.014-1.135-.552-.136-.304-.035-.621.356-.766l-.108-.239.217-.045.104.229c.159-.026.345-.036.563-.017l.087.383c-.17-.021-.353-.041-.512-.008l-.06.016c-.309.082-.21.375.064.446.453.105.994.139 1.208.612.173.385-.028.648-.36.774zm10.312 1.057l-3.766-8.22c-6.178 4.004-13.007-.318-17.951 4.454l3.765 8.22c5.298-4.492 12.519-.238 17.952-4.454zm-2.803-1.852c-.375.521-.653 1.117-.819 1.741-3.593 1.094-7.891-.201-12.018 1.241-.667-.354-1.503-.576-2.189-.556l-1.135-2.487c.432-.525.772-1.325.918-2.094 3.399-1.226 7.652.155 12.198-1.401.521.346 1.13.597 1.73.721l1.315 2.835zm2.843 5.642c-6.857 3.941-12.399-1.424-19.5 5.99l-4.5-9.97 1.402-1.463 3.807 8.406-.002.007c7.445-5.595 11.195-1.176 18.109-4.563.294.648.565 1.332.684 1.593z"/>
                        </svg>
                    </h3>
                    <div class="mb-3">
                        <label for="firstName">Họ tên</label>
                        <input name="name" type="text" class="form-control" id="firstName" placeholder="... " value=""
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control" id="firstName" placeholder="... " value=""
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName">Email</label>
                        <input name="email" type="text" class="form-control" id="firstName" placeholder="... " value=""
                               required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName">Địa chỉ</label>
                        <input name="address" type="text" class="form-control" id="firstName" placeholder="... " value=""
                               required>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label for="firstName">Tên sản phẩm</label>
                            <input name="nameSP" type="text" class="text-danger form-control"
                                   value="{{$products->name}}" required
                                   readonly>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="lastName">Số lượng</label>
                            <input type="number" name="quantity" class="text-danger form-control" min="1" max="5" value="1">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Đơn giá</label>
                            <input name="promotion_price" type="text" class="text-danger form-control"
                                   value="{{$products->promotion_price}}$" required readonly>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10 13h-4v-1h4v1zm2.318-4.288l3.301 3.299-4.369.989 1.068-4.288zm11.682-5.062l-7.268 7.353-3.401-3.402 7.267-7.352 3.402 3.401zm-6 8.916v.977c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h14.056l1.977-2h-18.033v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.843l-2 2.023z"/>
                                </svg>
                                Ghi chú...</label>
                            <textarea name="note" class="form-control" rows="3" placeholder="... "></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h4 class="mb-3">Hình thức thanh toán</h4>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input value="Thanh toán khi nhận hàng" id="debit" name="payment" type="radio"
                                           class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Thanh toán khi nhận hàng</label>
                                    <br>
                                    <h6 class="text-success"><img
                                                src="https://biohack.ae/wp-content/uploads/2017/01/shipping-icon.png"
                                                width="25" height="20">
                                        Miễn phí vận chuyển</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Đặt Hàng</button>
                </div>
            </div>
        </form>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none"
                         stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2"
                         role="img"
                         viewBox="0 0 24 24" focusable="false"
                         href="https://www.facebook.com/profile.php?id=100007509827423"><title>Product</title>
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
                    </svg>
                    <small class="d-block mb-3 text-muted">&copy; 2018-2019</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Admin</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="{{Route('home')}}">Nguyễn Mạnh Cường</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Số Điện Thoại</h5>
                    <ul class="list-unstyled text-small">
                        <li><p class="text-muted" href="#">038.343.8868</p></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Địa Chỉ</h5>
                    <ul class="list-unstyled text-small">
                        <li><p class="text-muted" href="#">Hà Nội</p></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Kết Nối Với Shop</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted"
                               href="https://www.facebook.com/profile.php?id=100007509827423">
                                <img src="https://banner2.kisspng.com/20171216/213/facebook-logo-png-5a35528eaa4f08.7998622015134439826976.jpg"
                                     width="60" height="35">
                            </a>
                            <a class="text-muted"
                               href="https://www.instagram.com/cuongit151097/?hl=vi">
                                <img src="https://img.freepik.com/free-vector/instagram-icon_1057-2227.jpg?size=338&ext=jpg"
                                     width="35" height="35">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
            crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
    </body>
    </html>
@endsection
