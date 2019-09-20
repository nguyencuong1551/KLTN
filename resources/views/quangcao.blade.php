@extends('layouts.app')
<title>Ổ cứng SSD</title>
@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Dashboard Template · Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

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
        <link href="dashboard.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/jpg" href="/public/css/Screenshot%20from%202019-04-29%2000-03-58.png"/>
    </head>
    <body background="https://img.freepik.com/free-vector/elegant-white-background-with-shiny-lines_1017-17580.jpg?size=626&ext=jpg">
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <br>
            <div class="container">
                <div class="row">
                    <!-- START THE FEATURETTES -->
                    <h1><p class="text-white">Giới Thiệu Shop:</p></h1>
                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <img src="https://pbs.twimg.com/profile_images/534295095877455872/3S5h7c63.png" width="100"
                             height="100">
                    </div>
                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-auto">
                            <h2 class="text-white">Dịch vụ </h2>
                            <p class="text-white">Với mục tiêu tạo ra những trải nghiệm mua sắm trực tuyến tuyệt vời,
                                Chúng tôi luôn nỗ lực không ngừng nhằm nâng cao chất lượng dịch vụ. Khi mua hàng qua
                                mạng tại
                                <img src="https://pbs.twimg.com/profile_images/534295095877455872/3S5h7c63.png"
                                     width="50" height="50"> khách hàng sẽ được hưởng các tiện ích như sau: Dịch vụ chăm
                                sóc khách hàng tận tình trước-trong-sau khi mua hàng, xuyên suốt 7 ngày/tuần, từ 8:00
                                đến 21:00 Mức giá cạnh tranh: hơn 90% sản phẩm được giảm giá từ 10% trở lên Giao hàng
                                miễn phí .</p>
                            <p class="text-white"><img
                                        src="https://pbs.twimg.com/profile_images/534295095877455872/3S5h7c63.png"
                                        width="50" height="50"> cung cấp chính sách giao hàng đơn giản và tiện lợi để
                                khách hàng có thế dễ dàng tiếp cận các sản phẩm của <img
                                        src="https://pbs.twimg.com/profile_images/534295095877455872/3S5h7c63.png"
                                        width="50" height="50"> thông qua các đối tác giao hàng chuyên nghiệp như Kerry
                                TTC, Viettel Post, EMS bao gồm cả hình thức nhận hàng và thanh toán (COD) trên toàn
                                quốc.</p>
                        </div>
                    </div>
                    <hr class="featurette-divider">

                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-12">
                            <h2 class="text-white">Địa chỉ:</h2>
                        </div>
                        <div class="col-md-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d658.853213023541!2d105.57771884489252!3d20.910847197046497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134456eaeaf48a5%3A0xe269ee5f814518b2!2zxJDhuqFpIGjhu41jIEzDom0gTmdoaeG7h3A!5e0!3m2!1svi!2s!4v1556467892176!5m2!1svi!2s"
                                    width="1150" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <hr class="featurette-divider">

                    <!-- /END THE FEATURETTES -->
                </div>
            </div>
        </div>
        <div>
            <form action="{{Route('search')}}" method="post">
                @csrf
                <nav class="navbar navbar-dark bg-dark flex-md-nowrap">
                    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{Route('welcome')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="30" viewBox="0 0 24 24">
                            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
                        </svg>
                    </a>
                    <input name="key" class="form-control form-control-dark w-100" type="text"
                           placeholder="Tìm kiếm sản phẩm"
                           aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M23.111 20.058l-4.977-4.977c.965-1.52 1.523-3.322 1.523-5.251 0-5.42-4.409-9.83-9.829-9.83-5.42 0-9.828 4.41-9.828 9.83s4.408 9.83 9.829 9.83c1.834 0 3.552-.505 5.022-1.383l5.021 5.021c2.144 2.141 5.384-1.096 3.239-3.24zm-20.064-10.228c0-3.739 3.043-6.782 6.782-6.782s6.782 3.042 6.782 6.782-3.043 6.782-6.782 6.782-6.782-3.043-6.782-6.782zm2.01-1.764c1.984-4.599 8.664-4.066 9.922.749-2.534-2.974-6.993-3.294-9.922-.749z"/>
                        </svg>
                        Tìm kiếm
                    </button>
                    <div class="navbar navbar-dark bg-dark shadow-sm">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="button" data-toggle="collapse"
                                data-target="#navbarHeader"
                                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                                <span><img src="https://cdn0.iconfinder.com/data/icons/shopping-solid-1/48/8-512.png"
                                           width="35" height="25"></span>
                        </button>
                    </div>
                </nav>
            </form>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 24 24"><path
                                        d="M22 3.2c0-.663-.537-1.2-1.2-1.2h-17.6c-.663 0-1.2.537-1.2 1.2v11.8h20v-11.8zm-2 9.8h-16v-9h16v9zm2 3h-20c-.197.372-2 4.582-2 4.998 0 .522.418 1.002 1.002 1.002h21.996c.584 0 1.002-.48 1.002-1.002 0-.416-1.803-4.626-2-4.998zm-12.229 5l.467-1h3.523l.467 1h-4.457z"/></svg> Laptop - Thiết bị IT</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <hr class="mb-4">
                    @foreach($categories as $category)
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:;" class="btn-outline-dark nav-link"
                                   id_category="{{$category->id}}">{{$category->name}}</a>
                                </a>
                            </li>
                        </ul>
                    @endforeach
                    <hr class="mb-4">
                    <center><img src="https://bizweb.dktcdn.net/100/329/122/themes/681013/assets/banner_1_fashion.png?1557221943833"
                                 width="205" height="535"></center>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://www.zenssd.com/wp-content/uploads/2016/01/background_1.png" width="100%" height="280px">
                        </div>
                        <div class="carousel-item">
                            <img src="http://www.zenssd.com/wp-content/uploads/2016/01/background_2-5.png" width="100%" height="280px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://static.makeuseof.com/wp-content/uploads/2015/07/samsung-ssd-994x400.jpg" width="100%" height="280px">
                        </div>
                        <div class="carousel-item">
                            <img src="http://wordpress.nationaltrail.k12.oh.us/ittech/wp-content/uploads/sites/3/2016/03/Samsung-SSD-Space.jpg" width="100%" height="280px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://beehosting.pro/wp-content/uploads/2016/01/ssd-background-3.jpg" width="100%" height="280px">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                @if(session('mess'))
                    <br>
                    <center><h2 class="text-danger alert alert-info">{{session('mess')}}</h2></center>
                @endif
                <hr class="featurette-divider">
                <div id="showCategoryProduct">
                    <div class="row col-auto">
                        @foreach($advertisement as $z)
                            <div class="col-3">
                                <div class="card flex-row mb-2 shadow-sm h-md-150">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <a href="{{Route('thongtinSP',$z->id)}}"><img
                                                    src="{{$z->image}}"
                                                    height="130" width="180"></a>
                                        <br>
                                        <strong class="d-inline-block mb-2 text-dark">{{$z->name}}</strong>
                                        <div class="text-muted">Giá:<strike>{{$z->unit_price}}</strike></div>
                                        <div class="mb-1 text-danger">Giá khuyến mại: {{$z->promotion_price}}</div>
                                        <br>
                                        <p>
                                            <a class="btn btn-outline-dark mb-1"
                                               href="{{Route('thongtinSP',$z->id)}}">Thông tin &raquo</a>
                                            <a class="btn btn-outline-dark mb-1"
                                               href="{{Route('homepay',$z->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="23"
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
                    <hr class="featurette-divider">
                    <div class="d-flex justify-content-between align-items-center">
                        <div></div>
                        {{ $advertisement->links()}}
                    </div>
                </div>

            </main>
        </div>
    </div>
    <hr class="featurette-divider">
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
                    <li><a class="text-muted" href="{{Route('home')}}">Nguyễn Mạnh Cường</a></li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
    </body>
    <script>
        $(document).ready(function () {
            $('.nav-link').click(function () {
                var id_category = $(this).attr('id_category');

                //code ajax
                $.ajax({
                    type: "GET",
                    url: "/ajax",
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
    </html>
@endsection