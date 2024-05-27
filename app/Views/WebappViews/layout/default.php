<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTS</title>
    <!-- font awesome link -->
    <link href="<?= base_url('node_modules/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--custom css-->
    <link href="<?= base_url('assets/css/abhinav/layout/default.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/abhinav/dashboard/profile.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- navbar  -->
    <div class="wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="<?= base_url('abhinav/home') ?>">
        <img src="path/to/your/logo.png" alt="Logo" height="30">
        FTS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('abhinav/all_files') ?>"><i class="fa fa-folder-open"></i> All Files</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('abhinav/inbox') ?>"><i class="fa fa-inbox"></i> Inbox</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('abhinav/sent') ?>"><i class="fa fa-paper-plane"></i> Sent</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
              <i class="fa fa-cog"></i> Settings
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= base_url('abhinav/office_detail') ?>">Office detail</a></li>
              <li><a class="dropdown-item" href="<?= base_url('abhinav/department') ?>">Department</a></li>
              <li><a class="dropdown-item" href="<?= base_url('abhinav/designation') ?>">Designation</a></li>
              <li><a class="dropdown-item" href="<?= base_url('abhinav/employee') ?>">Employee</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" aria-expanded="false">
              <i class="fa fa-user"></i> User
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink2">
              <li><a class="dropdown-item" href="<?= base_url('abhinav/profile') ?>">Profile</a></li>
              <li><a class="dropdown-item" href="<?= base_url('abhinav/change_password') ?>">Change Password</a></li>
              <li><a class="dropdown-item" href="<?= base_url('abhinav/logout') ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- the main content goes here -->
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

<!-- footer -->
<footer class="footer">
    <div class="footer-inner">
      <ul class="footer-links">
        <li><a href="<?= base_url('abhinav/home') ?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <p>&copy; 2024 Your Company</p>
    </div>
  </footer>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>