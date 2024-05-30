<?= $this->extend('WebappViews/layout/default') ?>

<?= $this->section('content') ?>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/carausel01.jpg') ?>" class="d-block w-100 carousel-img" alt="T-Shirt 1">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/carausel02.jpg') ?>" class="d-block w-100 carousel-img" alt="T-Shirt 2">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/carausel03.jpg') ?>" class="d-block w-100 carousel-img" alt="T-Shirt 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Discount Banner -->
<div class="alert alert-warning text-center my-4" role="alert">
    Get 20% off on your first purchase! Use code: FIRST20
</div>

<!-- Top Products -->
<section class="container my-5">
    <h2 class="text-center">Top Products</h2>
    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4 shadow-sm product-card">
                <img src="<?= base_url("assets/img/tp$i.jpg") ?>" class="card-img-top" alt="Top Product <?= $i ?>">
                <div class="card-body">
                    <p class="card-text">Top Product <?= $i ?></p>
                    <p class="card-text">$<?= 19.99 + $i * 5 ?></p>
                    <a href="<?= base_url("ecom/product/detail/$i") ?>" class="btn btn-primary btn-block">View Details</a>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>

<!-- Top Sales -->
<section class="container my-5">
    <h2 class="text-center">Top Sales</h2>
    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4 shadow-sm product-card">
                <img src="<?= base_url("assets/img/p$i.jpg") ?>" class="card-img-top" alt="Sale <?= $i ?>">
                <div class="card-body">
                    <p class="card-text">Sale Item <?= $i ?></p>
                    <p class="card-text">
                        $<?= 14.99 + $i * 5 ?>
                        <span class="text-muted"><del>$<?= 19.99 + $i * 5 ?></del></span>
                    </p>
                    <a href="<?= base_url("ecom/product/detail/$i") ?>" class="btn btn-primary btn-block">View Details</a>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>

<?= $this->endSection() ?>
