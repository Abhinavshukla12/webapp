<?= $this->extend('WebappViews/layout/default') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to Our T-Shirt Store</h1>
            <p>Find the coolest t-shirts here!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="tshirt1.jpg" class="card-img-top" alt="T-Shirt 1">
                <div class="card-body">
                    <h5 class="card-title">T-Shirt 1</h5>
                    <p class="card-text">$20</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="tshirt2.jpg" class="card-img-top" alt="T-Shirt 2">
                <div class="card-body">
                    <h5 class="card-title">T-Shirt 2</h5>
                    <p class="card-text">$25</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="tshirt3.jpg" class="card-img-top" alt="T-Shirt 3">
                <div class="card-body">
                    <h5 class="card-title">T-Shirt 3</h5>
                    <p class="card-text">$30</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
