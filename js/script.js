
// Mobile Menu Toggle

document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const navMenu = document.querySelector(".nav-menu");

  mobileMenuBtn.addEventListener("click", function () {
    navMenu.style.display = navMenu.style.display === "flex" ? "none" : "flex";
  });

  // Handle window resize
  window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
      navMenu.style.display = "flex";
    } else {
      navMenu.style.display = "none";
    }
  });

  // Animation on scroll
  const fadeElements = document.querySelectorAll(".fadeInUp");

  const fadeInOnScroll = function () {
    fadeElements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (elementTop < windowHeight - 100) {
        element.style.opacity = "1";
        element.style.transform = "translateY(0)";
      }
    });
  };

  // Initial check
  fadeInOnScroll();

  // Check on scroll
  window.addEventListener("scroll", fadeInOnScroll);
});

document.addEventListener("DOMContentLoaded", function () {
  // Set up Intersection Observer for animations
  const animateElements = document.querySelectorAll("[data-animate]");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");

          // Optional: Unobserve after animation to prevent re-animation
          // observer.unobserve(entry.target);
        } else {
          // This will trigger animation when scrolling back up
          entry.target.classList.remove("animate");
        }
      });
    },
    {
      threshold: 0.1, // Trigger when 10% of element is visible
    }
  );

  // Observe all animate elements
  animateElements.forEach((element) => {
    observer.observe(element);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
  const offcanvasMenu = document.querySelector(".offcanvas-menu");
  const offcanvasOverlay = document.querySelector(".offcanvas-overlay");

  mobileMenuBtn.addEventListener("click", function () {
    this.classList.toggle("active");
    offcanvasMenu.classList.toggle("active");
    offcanvasOverlay.classList.toggle("active");

    // Toggle body scroll
    document.body.style.overflow = this.classList.contains("active")
      ? "hidden"
      : "";
  });

  offcanvasOverlay.addEventListener("click", function () {
    mobileMenuBtn.classList.remove("active");
    offcanvasMenu.classList.remove("active");
    this.classList.remove("active");
    document.body.style.overflow = "";
  });

  // Close menu when clicking on links
  const navLinks = document.querySelectorAll(".offcanvas-menu .nav-menu a");
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      mobileMenuBtn.classList.remove("active");
      offcanvasMenu.classList.remove("active");
      offcanvasOverlay.classList.remove("active");
      document.body.style.overflow = "";
    });
  });

  // Handle window resize
  window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
      mobileMenuBtn.classList.remove("active");
      offcanvasMenu.classList.remove("active");
      offcanvasOverlay.classList.remove("active");
      document.body.style.overflow = "";
    }
  });
});


