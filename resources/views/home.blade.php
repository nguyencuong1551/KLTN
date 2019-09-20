@extends('layouts.app')
<title>Trang quản lý</title>
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

    <link rel="canonical" href="https://getbootstrap.com/docs/4.2/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body background="https://img.freepik.com/free-vector/elegant-white-background-with-shiny-lines_1017-17580.jpg?size=626&ext=jpg">
<main role="main">

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <a href="{{Route('homeQLDMSP')}}"><img  src="http://caophatland.com/wp-content/themes/myblog/images/iconmenu4.png" with="100" height="100"></a>
                <h4>Quản Lý Danh Mục/Sản Phẩm</h4>
                <p> Cho phép quản lý danh mục và sản phẩm. Có thể thêm, sửa, xóa danh mục và sản phẩm </p>
                <p><a class="btn btn-secondary" href="{{Route('homeQLDMSP')}}" role="button">Thực hiện &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="{{Route('homeQLND')}}"><img  src="https://iisy.fi/wp-content/uploads/2018/08/user-profile-male-logo.jpg" with="100"
                                height="100"></a>
                <h4>Quản Lý Người Dùng</h4>
                <p>Cho phép quản lý thành viên hệ thống. Có thể sửa hoặc xóa người dùng</p>
                <p><a class="btn btn-secondary" href="{{Route('homeQLND')}}" role="button">Thực hiện &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="{{Route('homeQLDH')}}"><img  src="https://banner2.kisspng.com/20180713/qvc/kisspng-brand-logo-shopping-cart-forthcoming-5b4935e0163526.928355671531524576091.jpg"
                     with="100" height="100"></a>
                <h4>Quản Lý Đơn Hàng</h4>
                <p>Cho phép quản lý thông tin đơn hàng. Có thể hủy đơn hàng</p>
                <p><a class="btn btn-secondary" href="{{Route('homeQLDH')}}" role="button">Thực hiện &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- FOOTER -->
    <footer class="container py-5">
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
                    <li><a class="text-muted">Nguyễn Mạnh Cường</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Số Điện Thoại</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted">038.343.8868</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Địa Chỉ</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted">Hà Nội</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Kết Nối Với Shop</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted"
                           href="https://www.facebook.com/profile.php?id=100007509827423">
                            <img src="https://banner2.kisspng.com/20171216/213/facebook-logo-png-5a35528eaa4f08.7998622015134439826976.jpg" width="60" height="35">
                        </a>
                        <a class="text-muted"
                           href="https://www.instagram.com/cuongit151097/?hl=vi">
                            <img src="https://img.freepik.com/free-vector/instagram-icon_1057-2227.jpg?size=338&ext=jpg" width="35" height="35">
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
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
        crossorigin="anonymous"></script>
</body>
</html>

@endsection
