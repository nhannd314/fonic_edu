<div id="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Marketing</a></li>
            <li class="active">Học marketing trong 15 ngày</li>
        </ol>
    </div>
</div>
<div id="course-learn">
    <div class="container">
        <div class="header clearfix">
            <h1 class="entry-title pull-left">Xây dựng tinh thần trách nhiệm trong tổ chức của bạn</h1>
            <a class="pull-right" id="course-rating-btn" href="#" data-toggle="modal" data-target="#course-rating-modal">Đánh giá khóa học này <span class="stars"><?php for ($i = 0; $i < 5; $i++) echo '<i class="fa fa-star"></i> ' ?></span></a>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <a class="first-lesson clearfix" href="#">
                    <div class="pull-left left"><i class="fa fa-play-circle"></i></div>
                    <div class="pull-left right">
                        <div class="sub-title">Bài giảng 1:</div>
                        <h3 class="title">Giới thiệu khóa học, mục tiêu của khóa học</h3>
                        <div class="duration hidden-xs"><i class="fa fa-clock-o"></i> 08:10</div>
                    </div>
                </a>
                <div class="complete-percent">
                    <p>Bạn đã hoàn thành <span id="count-course-complete">13</span> trên <span id="count-course-lessons">116</span> bài giảng</p>
                    <div class="total"><div id="course-complete-line"></div></div>
                </div>

                <?php include 'templates/contents/list-lessons.php' ?>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="widget">
                    Thảo luận trong khóa học (giống Edumall)
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="course-rating-modal" tabindex="-1" role="dialog" aria-labelledby="course-rating-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="course-rating-modal-label">Bạn đánh giá chất lượng khóa học này như thế nào?</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="#">
                    <p>Nhận xét và đánh giá của bạn là tiêu chí quan trọng để chúng tôi cải thiện chất lượng khóa học không ngừng!</p>
                    <p><textarea class="form-control" rows="8" placeholder="Nhận xét của bạn"></textarea></p>
                    <div class="clearfix">
                        <div class="pull-left" id="course-rating-star-click"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <button type="submit" class="btn btn-success pull-right">Gửi đi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>