<?= $this->extend('WebappViews/layout/default') ?>

<?= $this->section('content') ?>
<section class="container my-2">
    <div class="row">
        <?php for ($i = 1; $i <= 18; $i++): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card mb-4 shadow-sm product-card">
                    <img src="<?= base_url("assets/img/tp$i.jpg") ?>" class="card-img-top" alt="Top Product <?= $i ?>">
                    <div class="card-body">
                        <p class="card-text">Top Product <?= $i ?></p>
                        <p class="card-text">$<?= 19.99 + $i * 5 ?></p>
                        <a href="<?= base_url("ecom/product/detail/$i") ?>" class="btn btn-secondary btn-block">View Details</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
<?= $this->endSection() ?>
