<div id="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Marketing online</li>
        </ol>
    </div>
</div>
<div id="course-category">
    <div class="container">
        <div class="header clearfix">
            <h1 class="page-title pull-left">Marketing online</h1>
            <div class="pull-right">
                <span>Sắp xếp theo</span>
                <select class="form-control" id="course-category-sort">
                    <option value="">Mặc định</option>
                    <option value="">Giá từ thấp đến cao</option>
                    <option value="">Giá từ cao đến thấp</option>
                    <option value="">Học nhiều</option>
                </select>
            </div>
        </div>
        <div class="row">
            <?php for ($i=0; $i<12; $i++): ?>
                <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12">
                    <?php include('templates/contents/course.php') ?>
                </div>
            <?php endfor; ?>
        </div>
        <div class="bottom text-right">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>