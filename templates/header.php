<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fonic Edu</title>
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
</head>
<body>

<nav id="topbar">
    <div class="container">
        <div class="pull-left hidden-xs">
            <span>Nền tảng đào tạo trực tuyến tốt nhất tại Việt Nam</span>
        </div>
        <div class="pull-right">
            <a href="#"><i class="fa fa-envelope"></i> contact@vifonic.vn</a>
            <a href="#"><i class="fa fa-phone"></i> 0965-991-099</a>
        </div>
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="left pull-left">
            <nav id="course-categories-nav">
                <div id="course-categories-nav-toggle">
                    <i class="fa fa-bars"></i> <span class="hidden-mb">Danh mục</span>
                </div>
                <ul class="menu list-unstyled" id="course-categories-menu">
                    <li><a href="#"><i class="fa fa-code"></i> Công nghệ thông tin</a></li>
                    <li><a href="#"><i class="fa fa-camera"></i> Thiết kế - Nhiếp ảnh</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart"></i> Sale - Marketing</a></li>
                    <li><a href="#"><i class="fa fa-users"></i> Phát triển cá nhân</a></li>
                    <li><a href="#"><i class="fa fa-language"></i> Ngoại ngữ</a></li>
                    <li><a href="#"><i class="fa fa-child"></i> Nuôi dạy con</a></li>
                    <li><a href="#"><i class="fa fa-heart"></i> Nghệ thuật - Làm đẹp</a></li>
                    <li><a href="#"><i class="fa fa-laptop"></i> Tin học văn phòng</a></li>
                    <li><a href="#"><i class="fa fa-gg"></i> Kinh doanh - Khởi nghiệp</a></li>
                </ul>
            </nav>
            <form class="search-form hidden-sm hidden-xs" method="get" action="#">
                <input type="text" class="form-control" placeholder="Tìm kiếm khóa học">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="center pull-left text-center">
            <a class="logo" href="#"><img src="http://vifonic.vn/wp-content/themes/foxtail/img/logo-vifonic.png" alt="Fonic Edu"></a>
        </div>
        <div class="right pull-right text-right">
            <a id="active-course" class="hidden-sm hidden-xs" href="#">Kích hoạt khóa học</a>
            <div id="cart" data-toggle="tooltip" data-placement="top" title="Xem giỏ hàng" data-original-title="Xem giỏ hàng">
                <div id="cart-toggle">
                    <i class="fa fa-shopping-basket"></i><span id="cart-count">1</span>
                </div>
                <div id="cart-dropdown">
                    <div class="arrow"></div>
                    <p class="cart-dropdown-count">Bạn đã mua <span>2</span> khóa học</p>
                    <ul class="cart-list-courses list-unstyled">
                        <li class="item">
                            <img class="thumbnail pull-left" src="img/course-1.png" alt="Course">
                            <p class="title">Tự học thiết kế website chuẩn SEO không cần biết code</p>
                            <p class="price">200.000đ</p>
                        </li>
                        <li class="item">
                            <img class="thumbnail pull-left" src="img/course-1.png" alt="Course">
                            <p class="title">Tự học thiết kế website chuẩn SEO không cần biết code</p>
                            <p class="price">200.000đ</p>
                        </li>
                    </ul>
                    <div class="bottom clearfix">
                        <span class="pull-left total">Tổng: <strong>399.000đ</strong></span>
                        <a href="#" class="pull-right checkout">Thanh toán</a>
                    </div>
                </div>
            </div>
            <!--/ end cart -->
            <a id="login" href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a>
        </div>
    </div>
</header>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="login-modal-label">Đăng nhập bằng tài khoản email</h4>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form method="post" action="#">
                        <input class="login-input form-control" type="email" placeholder="Email của bạn">
                        <input class="login-input form-control" type="password">
                        <button type="submit" class="login-btn btn btn-success">ĐĂNG NHẬP</button>
                    </form>
                </div>
                <div class="forget-password"><a href="#">Quên mật khẩu ?</a></div>
                <div class="register">Chưa có tài khoản? <a href="#">Đăng ký ngay</a></div>
                <div class="social-login">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i> Đăng nhập bằng Facebook</a>
                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i> Đăng nhập bằng Google</a>
                </div>
            </div>
        </div>
    </div>
</div>