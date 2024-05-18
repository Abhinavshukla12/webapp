<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--custom css-->
    <style>
      body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.logo a {
  color: #fff;
  font-size: 24px;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.nav-links {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

.nav-links li {
  margin-left: 20px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.user-actions {
  position: relative;
  display: flex;
  align-items: center;
}

.user-actions a {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  margin-left: 10px;
}

.dropdown {
  display: none;
  position: absolute;
  right: 0;
  background-color: #fff;
  color: #333;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  margin-top: 150px;
  z-index: 1000;
  max-width: 180px; /* Limit dropdown width */
  width: 100%; /* Ensure the dropdown width matches its container */
}

.dropdown ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.dropdown ul li {
  padding: 10px 20px;
}

.dropdown ul li a {
  color: #333;
  text-decoration: none;
  display: block;
}

.dropdown ul li a:hover {
  background-color: #4d4f4d;
  color: white;
  max-height: 50px;
  max-width: 100%;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
}

.footer-sections {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-sections div {
  flex: 1;
  padding: 10px;
  min-width: 250px;
}

.footer-sections h4 {
  margin-bottom: 10px;
}

.footer-sections ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-sections ul li {
  margin-bottom: 5px;
}

.footer-sections ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-contact p {
  margin: 5px 0;
}

.footer-social {
  text-align: center;
  margin: 20px 0;
}

.footer-social a {
  color: #fff;
  margin: 0 10px;
  font-size: 20px;
  text-decoration: none;
}

footer p {
  text-align: center;
  margin: 0;
}
  </style>
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

    <script>
      document.addEventListener('DOMContentLoaded', () => {
    const accountLink = document.getElementById('account-link');
    const accountDropdown = document.getElementById('account-dropdown');

    accountLink.addEventListener('click', (e) => {
        e.preventDefault();
        accountDropdown.style.display = accountDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', (e) => {
        if (!accountLink.contains(e.target) && !accountDropdown.contains(e.target)) {
            accountDropdown.style.display = 'none';
        }
    });
});
    </script>
</body>

</html>