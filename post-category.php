<?php include 'templates/header.php'; ?>

<div id="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Chia sẻ kinh nghiệm</li>
        </ol>
    </div>
</div>
<div id="main-category" class="main-category">
    <div class="container">
        <h1 class="page-title">Chia sẻ kinh nghiệm</h1>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 left-container">
                <div class="wrap" id="content">
                    <div class="blog">
                        <?php include 'templates/contents/article.php' ?>
                        <?php include 'templates/contents/article.php' ?>
                        <?php include 'templates/contents/article.php' ?>
                    </div>
                    <div class="bottom text-right">
                        <?php include('templates/contents/pagination.php') ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 right-container">
                <?php include 'templates/contents/sidebar.php' ?>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>