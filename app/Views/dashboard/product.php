<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<h1>Acme Backpack</h1>
  
  <img src="backpack_image.jpg" alt="Acme Backpack">

  <h2>Description:</h2>
  <p>The Acme Backpack is your ultimate companion for all your adventures. Whether you're exploring the urban jungle or trekking through the wilderness, this backpack combines style, functionality, and durability to meet all your needs.</p>

  <h2>Features:</h2>
  <ul>
    <li>Spacious main compartment with multiple pockets for organization.</li>
    <li>Padded laptop sleeve to keep your tech safe on the go.</li>
    <li>Water-resistant material to protect your belongings from the elements.</li>
    <li>Adjustable straps for a comfortable fit.</li>
    <li>Stylish design suitable for any occasion.</li>
  </ul>

  <h2>Price:</h2>
  <p>$49.99</p>

  <h2>Available Colors:</h2>
  <ul>
    <li>Black</li>
    <li>Gray</li>
    <li>Navy Blue</li>
    <li>Olive Green</li>
  </ul>

  <h2>Dimensions:</h2>
  <p>Height: 18 inches<br>
     Width: 12 inches<br>
     Depth: 6 inches</p>

  <h2>Material:</h2>
  <p>High-quality nylon</p>

  <h2>Shipping:</h2>
  <p>Free shipping on all orders within the continental United States.</p>

  <h2>Customer Reviews:</h2>
  <ul>
    <li>"I love my Acme Backpack! It's stylish, durable, and holds everything I need for my daily commute." - Sarah</li>
    <li>"This backpack is amazing! It's comfortable to wear and holds up well even in rough conditions." - Michael</li>
  </ul>

  <button><i class="fas fa-cart-plus"></i> Add to Cart</button>

  <h2>Share:</h2>
  <ul>
    <li><i class="fab fa-facebook"></i> Share on Facebook</li>
    <li><i class="fab fa-twitter"></i> Tweet on Twitter</li>
    <li><i class="fab fa-pinterest"></i> Pin on Pinterest</li>
  </ul>

  <h2>Related Products:</h2>
  <ul>
    <li>Acme Messenger Bag</li>
    <li>Acme Travel Duffel</li>
    <li>Acme Laptop Sleeve</li>
  </ul>

  <h2>Customer Support:</h2>
  <p>Need help? Contact us at <a href="mailto:support@example.com">support@example.com</a> or call 1-800-123-4567.</p>
<?= $this->endSection() ?>