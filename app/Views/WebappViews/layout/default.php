<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product .product-details {
            padding: 15px;
        }
        .product .product-rating i {
            color: #f8c146;
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .footer-links a {
            color: #000;
            margin-right: 15px;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .navbar-brand {
            font-size: 1.5rem; /* Make the brand name larger */
            font-weight: bold;
        }
        .dropdown-menu {
            left: auto;
            right: 0;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('ecom/index')?>">E-Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ecom/shop')?>"><i class="fas fa-store"></i> Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ecom/cart')?>"><i class="fas fa-shopping-cart"></i> Cart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('ecom/wishlist')?>"><i class="fas fa-heart"></i> Wishlist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                        <i class="fas fa-user"></i> Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('ecom/profile')?>">Profile</a>
                        <a class="dropdown-item" href="<?= base_url('ecom/orders')?>">Orders</a>
                        <a class="dropdown-item" href="<?= base_url('ecom/settings')?>">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('ecom/logout')?>">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- the main content goes here -->
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">E-Shop</h5>
                    <p>Your one-stop shop for everything!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-dark">Shop</a></li>
                        <li><a href="#!" class="text-dark">About</a></li>
                        <li><a href="#!" class="text-dark">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <div class="footer-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                &copy; 2024 E-Shop. All rights reserved.
            </div>
        </div>
    </footer>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
          // Function to filter products based on category
          function filterProducts(category) {
              const products = document.querySelectorAll('.product');
              products.forEach(product => {
                  const productCategory = product.getAttribute('data-category');
                  if (category === 'all' || productCategory === category) {
                      product.style.display = 'block';
                  } else {
                      product.style.display = 'none';
                  }
              });
          }

          // Event listener for filter buttons
          const filterButtons = document.querySelectorAll('.filter-btn');
          filterButtons.forEach(button => {
              button.addEventListener('click', function() {
                  const category = this.getAttribute('data-category');
                  filterProducts(category);
              });
          });
      });
  </script>
</body>

</html>