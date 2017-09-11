<?php include 'templates/header.php'; ?>

<div id="main-checkout" class="main-cart-checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 left-container">
                <div class="wrap">
                    <h3 class="main-title">Thông tin thanh toán</h3>
                    <form class="checkout-form" id="checkout-form">
                        <p>
                            <label>Họ và tên (*):</label>
                            <input type="text" name="name" class="form-control" placeholder="Họ và tên">
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email (*):</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <label>Số điện thoại (*):</label>
                                <input type="number" name="phone" class="form-control" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tỉnh/thành phố (*):</label>
                                <select class="form-control" name="city">
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Hà Nội">TP. HCM</option>
                                    <option value="Hà Nội">Đà Nẵng</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Quận/huyện:</label>
                                <input type="text" name="district" class="form-control" placeholder="Quận/huyện">
                            </div>
                        </div>
                        <p>
                            <label>Địa chỉ giao hàng (*):</label>
                            <textarea class="form-control" name="address" placeholder="Địa chỉ giao hàng"></textarea>
                        </p>
                        <p>
                            <label>Ghi chú thêm:</label>
                            <textarea class="form-control" name="note" placeholder="Ghi chú thêm về đơn hàng"></textarea>
                        </p>
                    </form>
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
                <a class="btn btn-primary checkout-btn" href="#">HOÀN TẤT THANH TOÁN <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>