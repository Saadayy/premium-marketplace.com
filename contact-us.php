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
        <input type="hidden" id="xxTrustedFormCertUrl" name="xxTrustedFormCertUrl" value="" />
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

        <div class="form-group">
          <p style="text-align:left;">
            <label style="text-transform:unset"> <input type="checkbox" id="leadid_tcpa_disclosure" name="optin_status"
                required>
              By clicking "Submit," "Request Information," "Get Quote," or similar buttons, you are providing your
              signature expressly consenting to receive communications—including telemarketing calls, texts, and
              pre-recorded messages—using an automatic telephone dialing system or artificial/pre-recorded voice
              technology from <a href="https://thequantiva.com"> Quantiva LLC </a> and its partners, at the phone number
              and email address you provided, even if
              it is a wireless number or listed on any federal, state, or corporate Do-Not-Call (DNC) list. Consent is
              not a condition of purchase. Message and data rates may apply. You may revoke your consent at any time.

            </label>
          </p>
        </div>

        <div class="submit-btn-wrapper">
          <button type="submit" name="submit" id="submit" class="submit-btn">Submit message</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    const scriptMap = {
      "aca": {
        type: "jornaya",
        src: "//create.lidstatic.com/campaign/41f26066-8e81-7a0c-f023-4c85e63fb549.js?snippet_version=2",
        img: "//create.leadid.com/noscript.gif?lac=70011678-0804-89DD-4D68-67336C9B031D&lck=41f26066-8e81-7a0c-f023-4c85e63fb549&snippet_version=2"
      },
      "mva": {
        type: "trustedform"
      }
    };

    const insuranceTypeDropdown = document.getElementById('InsuranceType');
    const leadIdInput = document.getElementById('leadid_token');
    let currentScript = null;
    let currentNoScriptElement = null;
    let stopUpdatingLeadId = true;

    function removeJornayaArtifacts() {
      // Remove Jornaya script(s)
      document.querySelectorAll('script[src*="lidstatic.com"]').forEach(el => el.remove());
      // Remove Jornaya tracking gif
      document.querySelectorAll('img[src*="leadid.com"]').forEach(el => el.remove());
      // Remove iframe
      document.querySelectorAll('iframe[src*="leadidtoken.com"]').forEach(el => el.remove());
      // Clear lead ID
      if (leadIdInput) leadIdInput.value = "";
    }

    insuranceTypeDropdown.addEventListener('change', function () {
      const selectedType = this.value;

      // Clean up any previous scripts
      if (currentScript) currentScript.remove();
      if (currentNoScriptElement) currentNoScriptElement.remove();

      removeJornayaArtifacts(); // 🛑 Always clear Jornaya leftovers

      const tfInput = document.getElementById('xxTrustedFormCertUrl');
      if (tfInput) tfInput.value = "";

      stopUpdatingLeadId = true;

      const config = scriptMap[selectedType];
      if (!config) return;

      if (config.type === "jornaya") {
        stopUpdatingLeadId = false;

        const script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = config.src;
        document.body.appendChild(script);
        currentScript = script;

        const img = document.createElement('img');
        img.src = config.img;
        img.style.display = "none";
        document.body.appendChild(img);
        currentNoScriptElement = img;

      } else if (config.type === "trustedform") {
        const tfScript = document.createElement('script');
        tfScript.type = 'text/javascript';
        tfScript.async = true;
        tfScript.src = (location.protocol === "https:" ? "https" : "http") +
          "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&l=" +
          new Date().getTime() + Math.random();
        document.body.appendChild(tfScript);
        currentScript = tfScript;

        const tfNoscript = document.createElement('noscript');
        tfNoscript.innerHTML = `<img src="https://api.trustedform.com/ns.gif" />`;
        document.body.appendChild(tfNoscript);
        currentNoScriptElement = tfNoscript;
      }
    });

    // Keep clearing leadid_token if not ACA
    setInterval(() => {
      if (stopUpdatingLeadId && leadIdInput && leadIdInput.value !== "") {
        leadIdInput.value = "";
      }
    }, 500);
  </script>

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