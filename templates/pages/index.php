<div id="main">
    <div id="main-slider">
        <img src="img/slider.jpg" alt="slider">
        <div class="text-box text-center">
            <h3>FONIC EDU</h3>
            <p>Hệ thống đào tạo trực tuyến tốt nhất Việt Nam hiện nay</p>
        </div>
    </div>
    <div class="box courses-tab">
        <div class="container">
            <!-- Nav tabs -->
            <div class="text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#new-courses" aria-controls="new-courses" role="tab" data-toggle="tab">Khóa học mới</a></li>
                    <li role="presentation"><a href="#featured-courses" aria-controls="featured-courses" role="tab" data-toggle="tab">Khóa học nổi bật</a></li>
                    <li role="presentation"><a href="#sale-courses" aria-controls="sale-courses" role="tab" data-toggle="tab">Đang giảm giá</a></li>
                </ul>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="new-courses">
                    <div class="row">
                        <?php for ($i=0; $i<8; $i++): ?>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                <?php include('templates/contents/course.php') ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="bottom text-center">
                        <a href="#" class="btn btn-primary all-course">Xem tất cả <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="featured-courses">
                    <div class="row">
                        <?php for ($i=0; $i<4; $i++): ?>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                <?php include('templates/contents/course.php') ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="bottom text-center">
                        <a href="#" class="btn btn-primary all-course">Xem tất cả</a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="sale-courses">
                    <div class="row">
                        <?php for ($i=0; $i<4; $i++): ?>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                <?php include('templates/contents/course.php') ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="bottom text-center">
                        <a href="#" class="btn btn-primary all-course">Xem tất cả <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box courses-by-category">
        <div class="container">
            <h3 class="main-title">Các khóa học kế toán nổi bật</h3>
            <div class="row">
                <?php for ($i=0; $i<4; $i++): ?>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                        <?php include('templates/contents/course.php') ?>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="bottom text-center">
                <a href="#" class="btn btn-primary all-course">Xem tất cả <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="box courses-by-category">
        <div class="container">
            <h3 class="main-title">Các khóa học CNTT nổi bật</h3>
            <div class="row">
                <?php for ($i=0; $i<4; $i++): ?>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                        <?php include('templates/contents/course.php') ?>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="bottom text-center">
                <a href="#" class="btn btn-primary all-course">Xem tất cả <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="box why-choose-us">
        <div class="container">
            <h3 class="main-title">Tại sao chọn chúng tôi</h3>
            <div class="row">
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-wifi"></i>
                        <h4>Học trực tuyến</h4>
                        <p>Học mọi lúc mọi nơi, chủ động công việc</p>
                    </div>
                </div>
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-dollar"></i>
                        <h4>Tiết kiệm chi phí</h4>
                        <p>Quá rẻ so với học Offline tại trung tâm</p>
                    </div>
                </div>
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-reply"></i>
                        <h4>Hoàn tiền 100%</h4>
                        <p>Nếu cảm thấy không hài lòng về khóa học</p>
                    </div>
                </div>
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-check"></i>
                        <h4>Thanh toán 1 lần</h4>
                        <p>Thanh toán một lần, học trọn đời</p>
                    </div>
                </div>
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-diamond"></i>
                        <h4>Chất lượng số 1</h4>
                        <p>Mọi khóa học đều được kiểm định</p>
                    </div>
                </div>
                <div class="item col-md-2 col-sm-4 col-xs-6 col-mb-12">
                    <div class="wrap">
                        <i class="fa fa-support"></i>
                        <h4>Hỗ trợ 24/7</h4>
                        <p>Hỗ trợ 24/7 trong quá trình học</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>