@extends('layouts.app')
<title>{{$products->name}}</title>
@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Carousel Template · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">


        <style>
            .btn {
                border: 2px solid black;
                background-color: white;
                color: black;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
            }

            /* Green */
            .success {
                border-color: #4CAF50;
                color: green;
            }

            .success:hover {
                background-color: #4CAF50;
                color: white;
            }

            /* Blue */
            .info {
                border-color: #2196F3;
                color: dodgerblue
            }

            .info:hover {
                background: #2196F3;
                color: white;
            }

            /* Orange */
            .warning {
                border-color: #ff9800;
                color: orange;
            }

            .warning:hover {
                background: #ff9800;
                color: white;
            }

            /* Red */
            .danger {
                border-color: #f44336;
                color: red
            }

            .danger:hover {
                background: #f44336;
                color: white;
            }

            /* Gray */
            .default {
                border-color: #e7e7e7;
                color: black;
            }

            .default:hover {
                background: #e7e7e7;
            }

            p.indent {
                padding-left: 1.8em
            }

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

            p.lineThrough {
                text-decoration: line-through;
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    </head>
    <body class="bg-white">
    <main role="main">
        <div class="container marketing">
            <!-- START THE FEATURETTES -->
            <div class="row">
                <div class="col-md-1 order-md-2"></div>
                <div class="col-md-7 order-md-2">
                    <h3 class="featurette-heading">{{$products->name}}</h3>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-1 text-muted">Giá: <strike>{{$products->unit_price}}$</strike></h5>
                            <h4 class="mb-1 text-danger">Giá khuyến mại: {{$products->promotion_price}}$</h4>
                            <br>
                            <h6 class="mb-1 text-muted"><img
                                        src="https://kienanh.vn/wp-content/uploads/2018/11/dich-vu-chat-luong.png"
                                        width="25"
                                        height="25"> Hàng chính hãng 100%</h6>
                            <h6 class="mb-1 text-muted"><img
                                        src="https://salt.tikicdn.com/assets/events/nha-ban-le/wd-kingston/img/feature-icon-4.jpg"
                                        width="25"
                                        height="25"> 7 ngày miễn phí trả hàng</h6>
                            <br>
                            <p><a class="btn btn-lg btn-warning" href="{{Route('homepay',$products->id)}}"
                                  role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" viewBox="0 0 24 24">
                                        <path d="M6 23.73l-3-2.122v-14.2l3 1.359v14.963zm2-14.855v15.125l13-1.954v-15.046l-13 1.875zm5.963-7.875c-2.097 0-3.958 2.005-3.962 4.266l-.001 1.683c0 .305.273.54.575.494.244-.037.425-.247.425-.494v-1.681c.003-1.71 1.416-3.268 2.963-3.268.537 0 1.016.195 1.384.564.422.423.654 1.035.653 1.727v1.747c0 .305.273.54.575.494.243-.037.423-.246.423-.492l.002-1.749c.002-1.904-1.32-3.291-3.037-3.291zm-6.39 5.995c.245-.037.427-.247.427-.495v-2.232c.002-1.71 1.416-3.268 2.963-3.268l.162.015c.366-.283.765-.513 1.188-.683-.405-.207-.858-.332-1.35-.332-2.096 0-3.958 2.005-3.962 4.266v2.235c0 .306.272.538.572.494z"/>
                                    </svg>
                                    Chọn Mua
                                </a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group bg-dark">
                                <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="http://cdn.nhanh.vn/cdn/store/26/art/article_1479956944_813.jpg"
                                                 width="100%" height="35">
                                        </div>
                                        <div class="col-md-9">
                                            <h6 class="text-muted text-sm-left">
                                                <span><strong>Giao hàng miễn phí</strong> cho đơn hàng trên 10$</span>
                                            </h6>
                                            <h6 class="text-muted text-sm-left"><span>Nhận hàng từ 6 đến 24h sau khi đặt hàng</span>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="https://cdn3.iconfinder.com/data/icons/pyconic-icons-1-2/512/phone-call-active-512.png"
                                                 width="30" height="30">
                                        </div>
                                        <div class="col-md-9">
                                            <h6 class="text-sm-left"><strong>Liên hệ</strong></h6>
                                            <h6 class="text-muted text-sm-left"><span>Hotline đặt hàng <br>1800 6963 (Miễn phí, 8-21h cả T7, CN)</span>
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-md-1">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <center><img src="{{$products->image}}" width="270" height="200"></center>
                            </div>
                            <div class="carousel-item">
                                <center><img src="{{$products->image1}}" width="270" height="200"></center>
                            </div>
                            <div class="carousel-item">
                                <center><img src="{{$products->image2}}" width="270" height="200"></center>
                            </div>
                            <div class="carousel-item">
                                <center><img src="{{$products->image3}}" width="270" height="200"></center>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <ol class="carousel-indicators">
                        <div class="row">
                            <div class="col-md-3">
                                <a data-target="#myCarousel" data-slide-to="0" class="active"><img
                                            src="{{$products->image}}"
                                            width="45" height="35"></a>
                            </div>
                            <div class="col-md-3">
                                <a data-target="#myCarousel" data-slide-to="1" class="active"><img
                                            src="{{$products->image1}}"
                                            width="45" height="35"></a>
                            </div>
                            <div class="col-md-3">
                                <a data-target="#myCarousel" data-slide-to="2" class="active"><img
                                            src="{{$products->image2}}"
                                            width="45" height="35"></a>
                            </div>
                            <div class="col-md-3">
                                <a data-target="#myCarousel" data-slide-to="3" class="active"><img
                                            src="{{$products->image3}}"
                                            width="45" height="35"></a>
                            </div>
                        </div>
                    </ol>

                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-12">
                    <h2 class="featurette-heading">Mô tả sản phẩm</h2><br>
                    <div class="row featurette">
                        <div class="col-md-12">
                            <h4 class="featurette-heading">Thiết kế tinh tế, sang trọng
                            </h4>
                            <p><strong>{{$products->name}}</strong> có thiết kế tối giản nhưng không kém phần sang
                                trọng. Toàn thân máy được gia công từ nhôm nguyên khối một cách tỉ mỉ và chính xác, tạo
                                nên vẻ liền lạc và chắc chắn lại vừa thanh thoát, sang trọng. Nút Power khởi động máy
                                được tích hợp luôn vào góc trên bên phải của bàn phím, vừa gọn vừa thẩm mỹ. Cả phần màn
                                hình cũng được gia công kiểu Unibody hợp kim nhôm nguyên khối, các cạnh được bo tròn và
                                dát mỏng tạo nên tổng thể máy một thiết kế tuyệt mỹ, tuyệt đẹp trong các dòng Ultrabook.
                            </p>
                            <br>
                            <div id="Carousel1" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <center><img src="{{$products->image}}" width="600" height="400"></center>
                                    </div>
                                    <div class="carousel-item ">
                                        <center><img src="{{$products->image1}}" width="600" height="400"></center>
                                    </div>
                                    <div class="carousel-item ">
                                        <center><img src="{{$products->image2}}" width="600" height="400"></center>
                                    </div>
                                    <div class="carousel-item ">
                                        <center><img src="{{$products->image3}}" width="600" height="400"></center>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-12 order-md-2">
                    <div class="col-md-12">
                        <h2 class="featurette-heading">Thông số kĩ thuật:</h2>
                        <p class="lead"></p>
                        <div class="table-responsive table-bordered">
                            <table class="table table-striped table-sm">
                                <tbody>
                                <tr class="table-secondary">
                                    <th>
                                        Thương hiệu:
                                    </th>
                                    <td><a href="">No Brand</a></td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Kích thước:</strong></td>
                                    <td>38.1 x 25.9 x 2.1 cm</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Model:</strong></td>
                                    <td>NX.GVWSV.005
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>SKU:</strong></td>
                                    <td>4770258003677
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Trọng lượng:</strong></td>
                                    <td>1.9 kg
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Loại lõi chíp:</strong></td>
                                    <td>Intel Celeron
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Độ phân giải màn hình:</strong></td>
                                    <td>HD (1366 x 768)
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Card Reader:</strong></td>
                                    <td>SD
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Cổng internet (LAN):</strong></td>
                                    <td>LAN</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td><strong>Cổng kết nối:</strong></td>
                                    <td>1 x USB 3.0 , 2 x USB 2.0 , 1 x SD card slot , LAN 1 Gb/s
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="container-fluid">
                <div class="collapse bg-white" id="navbarHeader">
                    <div id="Carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach($product as $x)
                                        <div class="col-md-3">
                                            <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                <div class="card-body d-flex flex-column align-items-start">
                                                    <center><a href="{{Route('thongtinSP',$x->id)}}"><img
                                                                    src="{{$x->image}}"
                                                                    height="150" width="200"></a></center>
                                                    <br>
                                                    <strong class="d-inline-block mb-2 text-dark">{{$x->name}}</strong>
                                                    <div class="mb-1 text-muted">Giá:
                                                        <strike>{{$x->unit_price}}$</strike></div>
                                                    <div class="mb-1 text-danger">Giá khuyến
                                                        mại: {{$x->promotion_price}}$</div>
                                                    <br>
                                                    <p>
                                                        <a class="btn btn-outline-dark mb-1"
                                                           href="{{Route('thongtinSP',$x->id)}}">Thông tin &raquo</a>
                                                        <a class="btn btn-outline-dark mb-1"
                                                           href="{{Route('homepay',$x->id)}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                 height="23"
                                                                 viewBox="0 0 24 24">
                                                                <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                                                            </svg>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @foreach($product1 as $y)
                                        <div class="col-md-3">
                                            <div class="card flex-row mb-2 shadow-sm h-md-150">
                                                <div class="card-body d-flex flex-column align-items-start">
                                                    <center><a href="{{Route('thongtinSP',$y->id)}}"><img
                                                                    src="{{$y->image}}"
                                                                    height="150" width="200"></a></center>
                                                    <br>
                                                    <strong class="d-inline-block mb-2 text-dark">{{$y->name}}</strong>
                                                    <div class="mb-1 text-muted">Giá:
                                                        <strike>{{$y->unit_price}}$</strike></div>
                                                    <div class="mb-1 text-danger">Giá khuyến
                                                        mại: {{$y->promotion_price}}$</div>
                                                    <br>
                                                    <p>
                                                        <a class="btn btn-outline-dark mb-1"
                                                           href="{{Route('thongtinSP',$y->id)}}">Thông tin
                                                            &raquo</a>
                                                        <a class="btn btn-outline-dark mb-1"
                                                           href="{{Route('homepay',$y->id)}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38"
                                                                 height="23"
                                                                 viewBox="0 0 24 24">
                                                                <path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                                                            </svg>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-sm">
                    <div class="container d-flex justify-content-between">
                        <h2 class="text-danger featurette-heading">Sản phẩm hot<img
                                    src="https://banner2.kisspng.com/20180423/ghw/kisspng-smoking-wood-fireplace-stove-red-fire-5addd783a63bd0.5868856715244880676809.jpg"
                                    width="25" height="25"></h2>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <strong class="btn btn-lg btn-outline-danger">Xem</strong>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>


        <!-- FOOTER -->
        <footer class="container">
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
                        <li><p class="text-muted">038.343.8868</p></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Địa Chỉ</h5>
                    <ul class="list-unstyled text-small">
                        <li><p class="text-muted">Hà Nội</p></li>
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
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
            crossorigin="anonymous"></script>
    </body>
    </html>
@endsection