<?= $this->extend('WebappViews/layout/default') ?>

<?= $this->section('content') ?>

<div class="container my-3">
    <div class="row">
        <!-- Back Button -->
        <div class="col-8 mb-2">
            <a href="<?= base_url('ecom/index') ?>" class="btn btn-secondary">Back</a>
        </div>
        
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="<?= base_url("assets/img/tp{$product_id}.jpg") ?>" class="img-fluid product-image" alt="Product Image">
            <div class="mt-4">
                <h5>Product Gallery</h5>
                <div class="row">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-3">
                        <img src="<?= base_url("assets/img/tp{$product_id}.jpg") ?>" class="img-fluid product-gallery" alt="Gallery Image <?= $i ?>">
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <h2>Product Title <?= $product_id ?></h2>
            <p class="text-muted">Category: T-Shirts</p>
            <h4>$<?= 19.99 + $product_id * 5 ?></h4>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            
            <!-- Quantity Selector -->
            <div class="quantity mt-3">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" class="form-control d-inline-block w-auto ml-2">
            </div>

            <!-- Buttons -->
            <div class="mt-4">
                <button class="btn btn-secondary btn-lg">Add to Cart</button>
                <button class="btn btn-secondary btn-lg">Buy Now</button>
            </div>

            <!-- Customer Reviews -->
            <div class="mt-5">
                <h5>Customer Reviews</h5>
                <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="media mb-3">
                    <img src="<?= base_url("assets/img/user{$i}.jpg") ?>" class="mr-3 rounded-circle" alt="User <?= $i ?>" style="width: 50px;">
                    <div class="media-body">
                        <h6>User <?= $i ?> <small class="text-muted">- <?= date('F d, Y') ?></small></h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="mt-5">
        <h4 class="text-center">Top Selling Products</h4>
        <div class="row">
            <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-4 shadow-sm related-product-card">
                    <img src="<?= base_url("assets/img/tp{$i}.jpg") ?>" class="card-img-top" alt="Related Product <?= $i ?>">
                    <div class="card-body text-center">
                        <p class="card-text">Related Product <?= $i ?></p>
                        <p class="card-text">$<?= 19.99 + $i * 5 ?></p>
                        <a href="<?= base_url("ecom/product/detail/$i") ?>" class="btn btn-outline-secondary btn-block">View Details</a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
