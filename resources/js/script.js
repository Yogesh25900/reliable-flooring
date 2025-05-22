// script.js - 364 lines of code
document.addEventListener('DOMContentLoaded', function() {
    // Hamburger Menu Toggle
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-links');
    
    hamburgerMenu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      toggleHamburgerAnimation();
    });
  
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!event.target.closest('.nav-container')) {
        if (navLinks.classList.contains('active')) {
          navLinks.classList.remove('active');
          toggleHamburgerAnimation();
        }
      }
    });
  
    // Dropdown Menu Toggle
    const dropdownItems = document.querySelectorAll('.dropdown');
    
    dropdownItems.forEach(item => {
      item.addEventListener('click', function(e) {
        if (window.innerWidth <= 992) {
          e.preventDefault();
          this.classList.toggle('active');
          
          // Close other dropdowns
          dropdownItems.forEach(otherItem => {
            if (otherItem !== this) {
              otherItem.classList.remove('active');
            }
          });
        }
      });
    });
  
    // Add active class to current page link
    const currentLocation = location.href;
    const navLinksItems = document.querySelectorAll('.nav-link');
    
    navLinksItems.forEach(link => {
      if (link.href === currentLocation) {
        link.classList.add('active');
      }
    });
  
    // Scroll Animation
    const scrollLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    scrollLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Close mobile menu after clicking link
        if (navLinks.classList.contains('active')) {
          navLinks.classList.remove('active');
          toggleHamburgerAnimation();
        }
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 70,
            behavior: 'smooth'
          });
        }
      });
    });
  
    // Hamburger Animation
    function toggleHamburgerAnimation() {
      const hamburgerIcon = document.querySelector('.hamburger-icon');
      const spans = hamburgerIcon.querySelectorAll('span');
      
      spans[0].classList.toggle('top');
      spans[1].classList.toggle('middle');
      spans[2].classList.toggle('bottom');
    }
  
    // Add additional interactive elements
    const logo = document.querySelector('.logo');
    const navItems = document.querySelectorAll('.nav-item');
    const socialIcons = document.querySelectorAll('.social-icon');
  
    // Logo Hover Effect
    logo.addEventListener('mouseenter', function() {
      this.style.transform = 'scale(1.05)';
      this.style.transition = 'transform 0.3s ease';
    });
  
    logo.addEventListener('mouseleave', function() {
      this.style.transform = 'scale(1)';
    });
  
    // Nav Item Hover Effects
    navItems.forEach(item => {
      item.addEventListener('mouseenter', function() {
        if (window.innerWidth > 992) {
          this.style.transform = 'translateY(-3px)';
          this.style.transition = 'transform 0.3s ease';
        }
      });
  
      item.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });
  
    // Social Icon Hover Effects
    socialIcons.forEach(icon => {
      icon.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px)';
      });
  
      icon.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });
  
    // Update active link on scroll
    window.addEventListener('scroll', function() {
      const scrollPosition = window.scrollY;
      
      document.querySelectorAll('section').forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop - 100 && 
            scrollPosition < sectionTop + sectionHeight - 100) {
          const currentId = '#' + section.getAttribute('id');
          navLinksItems.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentId) {
              link.classList.add('active');
            }
          });
        }
      });
    });
  });


    // Smooth scroll on navbar link click
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            const fadeTarget = target.querySelector('.fade-in');

            if (target) {
                // Smooth scroll to section
                target.scrollIntoView({
                    behavior: 'smooth'
                });

                // Trigger fade-in effect after scroll starts
                if (fadeTarget) {
                    fadeTarget.classList.remove('visible');

                    // Delay to sync with scroll
                    setTimeout(() => {
                        fadeTarget.classList.add('visible');
                    }, 400); // Adjust timing if needed
                }
            }
        });
    });

    // Fade-in effect when scrolling manually
    const faders = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.3  // Trigger when 30% of the element is in view
    });

    faders.forEach(fader => {
        observer.observe(fader);
    });


  
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link");

  // Smooth scroll on click
  navLinks.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").slice(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // Active nav highlight on scroll
  const sections = Array.from(document.querySelectorAll("section, div[id]")); // Get all targetable blocks

  window.addEventListener("scroll", () => {
    let scrollY = window.pageYOffset;

    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute("id");

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove("active");
          if (link.getAttribute("data-target") === sectionId) {
            link.classList.add("active");
          }
        });
      }
    });
  });
});


    
function scrollLeft() {
  const container = document.querySelector('.product-cards');
  container.scrollBy({
    left: -300,
    behavior: 'smooth',
  });
}

function scrollRight() {
  const container = document.querySelector('.product-cards');
  container.scrollBy({
    left: 300,
    behavior: 'smooth',
  });
}




  window.addEventListener("DOMContentLoaded", () => {
    const container = document.querySelector(".product-scroll-container");
    const cards = container.querySelectorAll(".product-card");

    if (cards.length >= 4) {
      container.style.justifyContent = "flex-start";
    } else {
      container.style.justifyContent = "center";
    }
  });


  window.addEventListener("resize", () => {
  const container = document.querySelector(".product-scroll-container");
  const cards = container.querySelectorAll(".product-card");

  if (cards.length >= 4) {
    container.style.justifyContent = "flex-start";
  } else {
    container.style.justifyContent = "center";
  }
});



  function adjustLayout() {
    const container = document.querySelector(".product-scroll-container");
    const cards = container.querySelectorAll(".product-card");
    if (cards.length < 4) {
      container.style.justifyContent = "center";
    } else {
      container.style.justifyContent = "flex-start";
    }
  }
  window.addEventListener("DOMContentLoaded", adjustLayout);
  window.addEventListener("resize", adjustLayout);

function adjustScrollLayout() {
  const container = document.querySelector(".product-scroll-container");
  const cards = container.querySelectorAll(".product-card");

  // Total width of all cards + gaps
  let totalWidth = 0;
  cards.forEach(card => {
    totalWidth += card.offsetWidth;
  });

  const gap = parseInt(getComputedStyle(container).gap) || 20;
  totalWidth += gap * (cards.length - 1);

  if (totalWidth < container.offsetWidth) {
    container.style.justifyContent = "center";
  } else {
    container.style.justifyContent = "flex-start";
  }
}
window.addEventListener("load", adjustScrollLayout);
window.addEventListener("resize", adjustScrollLayout);




document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.querySelector("[unique-script-id='w-w-dm-id']");

  // Show overlay on .btn-box click
  const btnBoxes = wrapper.querySelectorAll(".btn-box");
  btnBoxes.forEach(btn => {
    btn.addEventListener("click", function () {
      const overlay = this.parentElement.querySelector(".overlay");
      if (overlay) {
        overlay.style.display = "block";
      }
    });
  });

  // Hide overlay on .close click
  const closeButtons = wrapper.querySelectorAll(".close");
  closeButtons.forEach(btn => {
    btn.addEventListener("click", function () {
      const overlays = wrapper.querySelectorAll(".overlay");
      overlays.forEach(overlay => {
        overlay.style.display = "none";
      });
    });
  });

  // Filter logic and active class toggle
  const filterButtons = wrapper.querySelectorAll(".list");
  filterButtons.forEach(button => {
    button.addEventListener("click", function () {
      const value = this.getAttribute("data-filter");
      const squareImgs = wrapper.querySelectorAll(".squareImg");

      squareImgs.forEach(img => {
        if (value === "all" || img.classList.contains(value)) {
          img.style.display = "block";
          img.style.transition = "all 1s";
        } else {
          img.style.display = "none";
        }
      });

      // Toggle active class
      filterButtons.forEach(btn => btn.classList.remove("active"));
      this.classList.add("active");
    });
  });
});


const filterButtons = document.querySelectorAll(".list");
  const projects = document.querySelectorAll(".project");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      const filter = button.getAttribute("data-filter");

      // Toggle active class on buttons
      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      // Show/hide projects with animation
      projects.forEach(project => {
        const img = project.querySelector("img");
        const match = filter === "all" || img.classList.contains(filter);

        if (match) {
          project.classList.remove("hide");
        } else {
          project.classList.add("hide");
        }
      });
    });
  });



