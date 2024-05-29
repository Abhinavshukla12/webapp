<?= $this->extend('WebappViews/layout/default') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Welcome to Our Website!</h1>
        <p class="lead">This is the homepage of our web application built with CodeIgniter 4.5.</p>
        <hr class="my-4">
        <p>Explore the features and functionalities we offer.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Feature One</h2>
            <p>Details about the first feature. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Feature Two</h2>
            <p>Details about the second feature. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Feature Three</h2>
            <p>Details about the third feature. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
