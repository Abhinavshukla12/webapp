<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--custom css-->
    <link href="<?= base_url('assets/css/default.css') ?>" rel="stylesheet"  type="text/css">
    <link href="<?= base_url('assets/css/product.css') ?>" rel="stylesheet"  type="text/css">
</head>

<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="<?= base_url('index') ?>"><i class="fas fa-shopping-bag"></i> MyShop</a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="<?= base_url('index') ?>"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="<?= base_url('product') ?>"><i class="fas fa-tags"></i>  Products</a></li>
                    <li><a href="<?= base_url('about') ?>"><i class="fas fa-info-circle"></i>  About</a></li>
                    <li><a href="<?= base_url('contact') ?>"><i class="fas fa-phone"></i>  Contact</a></li>
                    <li><a href="<?= base_url('cart') ?>"><i class="fas fa-shopping-cart"></i>  Cart</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <a href="<?= base_url('notification') ?>" id="notifications-link"><i class="fas fa-bell"></i> Notification</a>
                <a href="<?= base_url('account') ?>" id="account-link"><i class="fas fa-user"></i> Account</a>
                <div class="dropdown" id="account-dropdown">
                    <ul>
                        <li><a href="<?= base_url('profile') ?>">Profile</a></li>
                        <li><a href="<?= base_url('orders') ?>">Orders</a></li>
                        <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- the main content goes here -->
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <footer>
        <div class="container">
            <div class="footer-sections">
                <div class="footer-about">
                    <h4>About Us</h4>
                    <p>Learn more about our store and what we offer.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?= base_url('index') ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="<?= base_url('product') ?>"><i class="fas fa-chevron-right"></i> Products</a></li>
                        <li><a href="<?= base_url('about') ?>"><i class="fas fa-chevron-right"></i> About</a></li>
                        <li><a href="<?= base_url('contact') ?>"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-phone"></i> +123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@myshop.com</p>
                </div>
            </div>
            <div class="footer-social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
            <p>&copy; 2024 MyShop. All rights reserved.</p>
        </div>
    </footer>

    <script src = "<?= base_url('assets/js/default.js') ?> "></script>
</body>

</html>