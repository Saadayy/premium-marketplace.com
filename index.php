<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Right Coverage, Right Agent</title>
  <link rel="icon" href="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

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
          <li><a href="#services">Services</a></li>

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

      <li><a href="/contact-us.php">Contact Us</a></li>
      <li>
        <a href="./contact-us.php" class="try-now-btn-mobile">Try now</a>
      </li>
    </ul>
  </div>

  <section class="hero">
    <div class="container hero-container">
      <div class="hero-content">
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight">
            <p class="highlighted-text">NEW</p>
          </div>
          <div class="p-2 bd-highlight">
            <span>Click here for more information</span>
          </div>
        </div>
        <h2 class="animate-fade-up" data-animate="fade-up">
          Discover The Right Insurance Plan For You With Licensed Insurance
          Agent
        </h2>

        <ul class="icon-list">
          <li>
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
            </svg>
            <span>New to Original Medicare? Have you recently moved? We can
              help</span>
          </li>
          <li>
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
            </svg>
            <span>Get connected with a licensed insurance agent</span>
          </li>
          <li>
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
            </svg>
            <span>Check your enrollment eligibility</span>
          </li>
        </ul>

        <div class="zipcode-form">
          <input type="text" placeholder="Enter Your Zipcode" />

          <button onclick="window.location.href='contact-us.php'">
            Send
          </button>
        </div>
      </div>

      <div class="hero-image fadeInUp">
        <img src="./uploads/2025/04/Group-41241.png" alt="Insurance illustration" />
      </div>
    </div>
  </section>

  <section class="services py-5" id="services">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="./uploads/2025/04/Frame-67-1.png" class="img-fluid rounded animate-fade-up"
            alt="Final Expense Insurance" data-animate="fade-up" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-content">
            <h2 class="animate-fade-up" data-animate="fade-up">
              Final Expense Insurance
            </h2>
            <hr class="custom-hr" />
            <p>
              <b>Maximize Your Benefits</b>: We help individuals get the most
              out of their final expense insurance plans.
            </p>
            <p>
              <b>Simple & Easy Process</b>: We've simplified the process to
              make finding the right plan quick and stress-free.
            </p>
            <p>
              <b>Plan Comparison Made Easy</b>: Let us help you compare final
              expense insurance options to find the best fit for you.
            </p>
          </div>
        </div>
      </div>

      <!-- Medicare Advantage Plans -->
      <div class="row align-items-center mb-5 flex-row-reverse">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="./uploads/2025/04/Screenshot-2022-08-16-at-2.01.50-AM.png-1.png"
            class="img-fluid rounded animate-fade-up" alt="Medicare Advantage Plans" data-animate="fade-up" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-content">
            <h2 class="animate-fade-up" data-animate="fade-up">
              Medicare Advantage Plans
            </h2>
            <hr class="custom-hr" />
            <p>
              <b>Expert Guidance</b>: We have years of experience helping
              people find the right Medicare Advantage plans tailored to their
              needs.
            </p>
            <p>
              <b>Affordable Coverage</b>: We help you discover insurance plans
              with coverage that fits your budget.
            </p>
            <p>
              <b>Licensed Support</b>: Our licensed insurance agents check
              your eligibility and guide you through the enrollment process.
            </p>
          </div>
        </div>
      </div>

      <!-- ACA -->
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="./uploads/2025/04/Insurance-How-to-Purchase-For-Home-1.png"
            class="img-fluid rounded animate-fade-up" alt="ACA Insurance" data-animate="fade-up" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-content">
            <h2 class="animate-fade-up" data-animate="fade-up">ACA</h2>
            <hr class="custom-hr" />

            <p>
              <b>Right Coverage for You</b>: We help you find the perfect ACA
              plan with the coverage you need to protect your health.
            </p>
            <p>
              <b>Affordable Options</b>: Get matched with insurance plans at
              the lowest possible prices without compromising on quality.
            </p>
            <p>
              <b>Personalized Support</b>: Enjoy personalized service and
              ongoing support to ensure your plan fits all your needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Auto Insurance -->
      <div class="row align-items-center mb-5 flex-row-reverse">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="./uploads/2025/04/Loss-Adjuster-Inspecting-Car-Involved-In-Accident-1.png"
            class="img-fluid rounded animate-fade-up" alt="Auto Insurance" data-animate="fade-up" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-content">
            <h2 class="animate-fade-up" data-animate="fade-up">
              Auto Insurance
            </h2>
            <hr class="custom-hr" />

            <p>
              <b>Comprehensive Protection</b>: We help you find the perfect
              auto insurance plan to protect you and your family against
              accidents, theft, and more.
            </p>
            <p>
              <b>Affordable Rates</b>: Get matched with plans that offer the
              right coverage at the lowest possible price.
            </p>
            <p>
              <b>Personalized Service</b>: Enjoy dedicated support and
              guidance to ensure you get a plan tailored to your needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Speak with Agent -->
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="./uploads/2025/04/Frame-67-2.png" class="img-fluid rounded animate-fade-up" alt="Speak with Agent"
            data-animate="fade-up" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="service-content">
            <h2 class="animate-fade-up" data-animate="fade-up">
              Speak with a licensed insurance agent
            </h2>
            <hr class="custom-hr" />

            <p>
              <b>Talk to a Licensed Insurance Agent for Free</b>: Get expert
              advice at no cost to you.
            </p>
            <p>
              <b>Find the Right Plan for Your Needs</b>: Explore insurance
              options that match your health, budget, and lifestyle.
            </p>
            <p>
              <b>Make Informed Decisions with Confidence</b>: Use this
              complimentary service to choose the best coverage for you and
              your family.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="discover-bg">
        <h2 class="animate-fade-up" data-animate="fade-up">
          Discover the right insurance
        </h2>
        <h2 class="animate-fade-up" data-animate="fade-up">
          plan for you with us
        </h2>
        <p>
          Our objective is to deliver fast, reliable and affordable quotes for
          our clients.
        </p>
        <a href="./contact-us.php" class="cta-btn fadeInUp">contact us</a>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="container">
      <h2>Get in touch!</h2>
      <p>Contact us for a quote, help or to join the team.</p>

      <div class="contact-info">
        <div class="contact-card">
          <div class="contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
              <g clip-path="url(#clip0_17_80)">
                <path
                  d="M24.4853 23.1517L16 31.6371L7.51467 23.1517C5.83646 21.4735 4.69358 19.3353 4.23057 17.0075C3.76756 14.6798 4.00521 12.267 4.91347 10.0743C5.82172 7.88156 7.35979 6.00743 9.33318 4.68886C11.3066 3.37029 13.6266 2.6665 16 2.6665C18.3734 2.6665 20.6934 3.37029 22.6668 4.68886C24.6402 6.00743 26.1783 7.88156 27.0865 10.0743C27.9948 12.267 28.2325 14.6798 27.7694 17.0075C27.3064 19.3353 26.1636 21.4735 24.4853 23.1517ZM16 17.3331C16.7072 17.3331 17.3855 17.0521 17.8856 16.552C18.3857 16.0519 18.6667 15.3736 18.6667 14.6664C18.6667 13.9592 18.3857 13.2809 17.8856 12.7808C17.3855 12.2807 16.7072 11.9997 16 11.9997C15.2928 11.9997 14.6145 12.2807 14.1144 12.7808C13.6143 13.2809 13.3333 13.9592 13.3333 14.6664C13.3333 15.3736 13.6143 16.0519 14.1144 16.552C14.6145 17.0521 15.2928 17.3331 16 17.3331Z"
                  fill="#5F30E2"></path>
              </g>
              <defs>
                <clipPath id="clip0_17_80">
                  <rect width="32" height="32" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="contact-text">
            <p>1221 Brickell Ave Suite<br />900, Miami, FL 33131</p>
          </div>
        </div>

        <div class="contact-card">
          <div class="contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
              <g clip-path="url(#clip0_17_87)">
                <path
                  d="M28 21.8933V26.608C28.0002 26.9456 27.8723 27.2706 27.6421 27.5176C27.412 27.7646 27.0967 27.915 26.76 27.9387C26.1773 27.9787 25.7013 28 25.3333 28C13.5507 28 4 18.4493 4 6.66667C4 6.29867 4.02 5.82267 4.06133 5.24C4.08496 4.90326 4.23544 4.58801 4.4824 4.35788C4.72937 4.12774 5.05443 3.99985 5.392 4H10.1067C10.2721 3.99983 10.4316 4.06115 10.5543 4.17203C10.677 4.28291 10.7541 4.43544 10.7707 4.6C10.8013 4.90667 10.8293 5.15067 10.856 5.336C11.121 7.18523 11.664 8.98378 12.4667 10.6707C12.5933 10.9373 12.5107 11.256 12.2707 11.4267L9.39333 13.4827C11.1526 17.5819 14.4194 20.8487 18.5187 22.608L20.572 19.736C20.6559 19.6187 20.7784 19.5345 20.918 19.4982C21.0576 19.4619 21.2055 19.4757 21.336 19.5373C23.0227 20.3385 24.8208 20.8802 26.6693 21.144C26.8547 21.1707 27.0987 21.2 27.4027 21.2293C27.567 21.2462 27.7192 21.3234 27.8298 21.4461C27.9404 21.5688 28.0015 21.7282 28.0013 21.8933H28Z"
                  fill="#5F30E2"></path>
              </g>
              <defs>
                <clipPath id="clip0_17_87">
                  <rect width="32" height="32" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="contact-text">
            <p>(888) 384-1232</p>
          </div>
        </div>
        <div class="disclaimer">
          Disclaimer: individual experience may vary <a href="https://premium-marketplace.com/" style="color:#A189EE"> (premium-marketplace.com)</a> .The operator of this website is not an
          insurance broker or an insurance company, is not a representative or an agent to any broker or insurance
          company, does not endorse any particular broker or insurance provider and does not make any insurance
          decisions. We will submit the information you provide to a broker and/or an insurance company. This website
          does not constitute an offer or solicitation for automobile or other insurance. The quotes, rates or savings
          advertised byon this website are not necessarily available from all providers or advertisers. Your actual
          quotes, rates or savings will vary based on many different factors like: Coverage Limits, Deductibles, Driving
          History, Education, Occupation, Type of vehicle, Location & more. For questions regarding your insurance
          policy, please contact your broker or insurance company directly. Residents of some states may not be eligible
          for insurance or may be subject to large premiums. You are under no obligation to use our website or service
          to initiate contact, nor apply for insurance or any product with any broker or insurance company. We receive
          compensation, in the form of referral fees, from the insurance carriers, aggregators, or other offers that we
          direct you to. Therefore, the amount of compensation provided, along with other factors, may impact which
          policy / offer you are presented. The offer you receive may be coming from the company that bid the most for
          your information. This website does not always provide you with an offer with the best rates or terms. Our
          website does not include all companies or all available offers. We encourage you to research all available
          insurance policy options relative to your situation
          For Health Care Plans
          We do not offer every plan available in your area. Any information we provide is limited to those plans we do
          offer in your area. Please contact <a href="https://medicare.gov" style="color:#A189EE">Medicare.gov</a> or 1–800–MEDICARE (24 hours a day/7 days a week) to get
          information on all of your options.” "Plans are insured or covered by a Medicare Advantage” organization with
          a Medicare contract and/or a Medicare-approved Part D sponsor. Enrollment in the plan depends on the plan’s
          contract renewal with Medicare.

          We do not offer every plan available in your area. Currently we represent [insert number of organizations]
          organizations which offer [insert number of plans] products in your area. Please contact <a href="htpp://medicare.gov" style="color:#A189EE">Medicare.gov</a>,
          1-800-MEDICARE, or your local State Health Insurance Program to get information on all of your options.
        </div>
      </div>
    </div>
  </section>

  <section class="newsletter">
    <div class="container">
      <div class="newsletter-content">
        <div class="row">
          <div class="col-lg-6">
            <p class="newsletter-label">SIGN UP NEWSLETTER</p>
            <h2 class="newsletter-title">Get latest newsletter</h2>
            <p class="newsletter-subtitle">
              Subscribe to our newsletter to get updates
            </p>
          </div>
          <div class="col-lg-6">
            <form class="newsletter-form">
              <input type="email" placeholder="Email address" required />
              <button type="submit">Confirm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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
</body>

</html>