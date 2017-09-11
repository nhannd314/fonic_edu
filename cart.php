<?php include 'templates/header.php'; ?>

<div id="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Giỏ hàng</li>
        </ol>
    </div>
</div>
<div id="main-cart" class="main-cart-checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 left-container">
                <div class="wrap">
                    <h3 class="main-title">Khóa học trong giỏ hàng</h3>
                    <ul class="list-courses list-unstyled">
                        <li class="clearfix item">
                            <div class="course-item pull-left">
                                <a href="#" class="thumbnail pull-left"><img src="img/course-1.png" alt="Course"></a>
                                <a href="#" class="title"><strong>Bí quyết nuôi dạy con hạnh phúc và thành công</strong></a>
                                <div class="teacher">Nguyễn Trọng Khang</div>
                                <div class="price">299.000đ</div>
                            </div>
                            <button class="delete-course pull-right" type="button"><i class="fa fa-close"></i></button>
                        </li>
                        <li class="clearfix item">
                            <div class="course-item pull-left">
                                <a href="#" class="thumbnail pull-left"><img src="img/course-1.png" alt="Course"></a>
                                <a href="#" class="title"><strong>Bí quyết nuôi dạy con hạnh phúc và thành công</strong></a>
                                <div class="teacher">Nguyễn Trọng Khang</div>
                                <div class="price">299.000đ</div>
                            </div>
                            <button class="delete-course pull-right" type="button"><i class="fa fa-close"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 right-container">
                <div class="wrap">
                    <h3 class="main-title">Tổng tiền</h3>
                    <p class="clearfix original-total total">
                        <span class="pull-left">Tổng phụ</span>
                        <span class="pull-right"><strong>1.000.000đ</strong></span>
                    </p>
                    <p class="clearfix total coupon-total">
                        <span class="pull-left">Coupon: AMXD1</span>
                        <span class="pull-right"><strong>200.000đ</strong> <a class="delete-coupon" href="#">Xóa</a></span>
                    </p>
                    <p class="clearfix total coupon-total">
                        <span class="pull-left">Coupon: AMXD2</span>
                        <span class="pull-right"><strong>200.000đ</strong> <a class="delete-coupon" href="#">Xóa</a></span>
                    </p>
                    <p class="clearfix real-total total">
                        <span class="pull-left">Tổng</span>
                        <span class="pull-right"><strong>800.000đ</strong></span>
                    </p>
                    <div class="coupon-form" id="coupon-form">
                        <p class="sub-title"><i class="fa fa-tag"></i> Nhập mã khuyến mại (coupon) để được giảm giá</p>
                        <form class="clearfix" action="#">
                            <input type="text" class="form-control pull-left" placeholder="Mã khuyến mại">
                            <button class="btn btn-warning pull-right" type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div id="coupon-alert" class="coupon-alert alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Mã khuyến mại được áp dụng thành công!
                    </div>
                </div>
                <a class="btn btn-primary checkout-btn" href="#">THANH TOÁN <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>