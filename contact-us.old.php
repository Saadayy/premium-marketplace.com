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
      <h1>Contact us</h1>
      <p class="subheading">
        Fill out the form below to contact us and get started.
      </p>

      <form id="contactForm" name="contactForm" method="POST" action="action.php">
        <input type="hidden" id="DomainID" name="DomainID" value="1" />
        <input id="leadid_token" name="universal_leadid" type="hidden" value="" />
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="firstName">FULL NAME</label>
              <input type="text" id="FirstName" name="FirstName" placeholder="Enter your Full name" required />
              <p id="firstNameError" class="error-message">First name is required</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label for="InsuranceType">INSURANCE TYPE</label>
              <select id="InsuranceType" name="InsuranceType" required>
                <option value="" disabled selected>Select Type</option> 


                <option value="life-insurance">Life Insurance</option>
                <option value="auto-insurance">Auto Insurance</option>
                <option value="medicare">Medicare</option>
                <option value="final-Expense">Final Expense</option>
                <option value="aca">ACA Obama Care</option>
                <option value="health-insurance">Health Insurance</option>
                <option value="home-insurance">Home Insurance</option>
                <option value="mva">MVA</option>

              </select>
              <p id="insuranceTypeError" class="error-message">Insurance type is required</p>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="email">YOUR EMAIL</label>
          <input type="email" id="Email" name="Email" placeholder="Enter your email" />
          <p id="emailError" class="error-message">Email is required</p>
          <p id="emailInvalidError" class="error-message" style="display: none">Please enter a valid email address</p>
        </div>

        <div class="form-group">
          <label for="phone">PHONE NUMBER</label>
          <input type="tel" id="Phone" name="Phone" placeholder="Enter your phone number" required />
          <p id="phoneError" class="error-message">Phone number is required</p>
          <p id="phoneInvalidError" class="error-message" style="display: none">Please enter a valid phone number</p>
        </div>

        <div class="form-group">
          <label for="message">MESSAGE</label>
          <textarea id="Message" name="Message" placeholder="Enter your message"></textarea>
          <p id="messageError" class="error-message">Message is required</p>
        </div>

        <div class="submit-btn-wrapper">
          <button type="submit" name="submit" id="submit" class="submit-btn">Submit message</button>
        </div>
      </form>
    </div>
  </div>
  <script id="LeadiDscript" type="text/javascript">
    (function () {
      var s = document.createElement('script');
      s.id = 'LeadiDscript_campaign';
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//create.lidstatic.com/campaign/41f26066-8e81-7a0c-f023-4c85e63fb549.js?snippet_version=2&f=reset';
      var LeadiDscript = document.getElementById('LeadiDscript');
      LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
  </script>
  <noscript><img
      src='//create.leadid.com/noscript.gif?lac=70011678-0804-89DD-4D68-67336C9B031D&lck=41f26066-8e81-7a0c-f023-4c85e63fb549&snippet_version=2' /></noscript>
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