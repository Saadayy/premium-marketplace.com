<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Right Coverage, Right Agent</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
  <header>
    <div class="container header-container">
      <a href="./index.php" class="logo"> Premium Marketplace </a>

      <button class="mobile-menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav>
        <ul class="nav-menu">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./index.php" id="services">Services</a></li>
 
          <li><a href="./contact-us.php">Contact Us</a></li>
        </ul>
      </nav>

      <a href="./contact-us.php" class="try-now-btn">Try now</a>
    </div>
  </header>

  <!-- Offcanvas Menu -->
  <div class="offcanvas-overlay"></div>
  <div class="offcanvas-menu">
    <a href="./index.php" class="logo"> Premium Marketplace </a>
    <ul class="nav-menu">
      <li><a href="./index.php">Home</a></li>
      <li><a href="#services">Services</a></li>
 
      <li><a href="./contact-us.php">Contact Us</a></li>
      <li>
        <a href="./contact-us.php" class="try-now-btn-mobile">Try now</a>
      </li>
    </ul>
  </div>

  <!-- Contact Page Content -->
  <div class="container">
    <div class="contact-wrapper mt-5 pt-5">
      <h1>Session Expire</h1>


    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container footer-container">
      <div class="footer-column">
        <h2>Premium marketplace</h2>
      </div>

      <div class="footer-column">
        <h3 class=""><a href="./index.php">Home</a></h3>
      </div>

      <div class="footer-column">
        <h3><a href="#services">Services</a></h3>
      </div>

      <div class="footer-column">
        <h3><a href="./privacy.php">Privacy Policy</a></h3>
      </div>

      <div class="footer-column">
        <h3><a href="./contact-us.php">Contact us</a></h3>
      </div>
    </div>
    <div class="copyright">
      <p>©<?= date('Y') ?> All Rights Reserved</p>
    </div>
  </footer>

  <script src="./js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</body>

</html>