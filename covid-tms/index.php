<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="hos.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid-19 Testing Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
  /* Navbar custom styles */
  .navbar {
    background-color: transparent !important;
    font-family: 'Arial', sans-serif;
    font-weight: 500; /* Improved font weight for modern look */
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: none;
  }

  .navbar.scrolled {
    background-color: #2c3e50 !important; /* Darker shade for the navbar when scrolled */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Add shadow on scroll for depth */
  }

  .navbar-brand {
    font-size: 20px; /* Bigger, bold brand text */
    font-weight: 700; /* Heavier font weight for standout branding */
    color: #ecf0f1; /* Lighter color for the brand */
    
    letter-spacing: 1px;
    transition: all 0.3s ease;
  }

  .navbar-brand:hover {
    color: #f39c12; /* Vibrant amber color for hover */
    transform: scale(1.1); /* Slight zoom on hover */
    text-shadow: 2px 2px 8px rgba(255, 87, 34, 0.8); /* Glowing amber text shadow */
  }

  /* Navbar hover effect */
  /* Navbar Custom Hover Animation */
.navbar-nav .nav-item .nav-link {
  color: #ecf0f1; /* Default link color */
  font-size: 15px;
  font-weight: 600;
  text-transform: capitalize;
  transition: all 0.3s ease-in-out;
  letter-spacing: 0.5px;
  padding: 8px 15px; /* Comfortable click area */
  position: relative; /* Required for pseudo-element */
}

.navbar-nav .nav-item .nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -5px;
  width: 0;
  height: 3px;
  background-color: #f39c12; /* Vibrant color for hover effect */
  transition: width 0.3s ease-in-out;
}

.navbar-nav .nav-item .nav-link:hover {
  color: #f39c12; /* Change link color on hover */
}

.navbar-nav .nav-item .nav-link:hover::after {
  width: 100%; /* Extend underline effect */
}

/* Navbar Responsive Alignment */
@media (max-width: 768px) {
  .navbar-nav {
    text-align: center;
  }

  .navbar-nav .nav-item {
    margin-bottom: 10px; /* Spacing between items for smaller screens */
  }
}

/* Navbar Background Transition on Scroll */



  /* Navbar toggle button */
  .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease;
  }

  .navbar-toggler:hover {
    border-color: #f39c12; /* Match hover color for toggle button */
  }

  /* Navbar links alignment for smaller screens */
  @media (max-width: 768px) {
    .navbar-brand {
      font-size: 24px; /* Smaller font size for mobile screens */
    }

    .navbar-nav .nav-item .nav-link {
      font-size: 16px; /* Adjust for smaller screens */
    }
  }
</style>

<style>
  /* Navbar brand (logo) hover effect */
  .navbar img:hover {
    transform: scale(1.2); /* Zoom effect */
    transition: transform 0.3s ease-in-out;
    filter: brightness(1.2); /* Increase brightness on hover */
  }


/* Navbar links hover effect */

    
    /* Unique Animated Banner */
    
    /* Content Section Styling */
    section {
      padding: 60px 0;
    }

    section h2 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 30px;
    }

    footer {
      margin-top: 20px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .navbar-brand {
        font-size: 24px;
      }
    }
  </style>
  <style>
     /* Modal animation */
     @keyframes fadeInScale {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }

      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .modal-content {
      animation: fadeInScale 0.5s ease-out;
    }

  /* Unique Animated Banner with Text */
  .banner {
    position: relative;
    height: 600px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    animation: changeBackground 12s infinite;
  }

  /* Overlay text container */
  .banner-text {
    position: absolute;
    bottom: 20%;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    animation: changeText 12s infinite;
    opacity: 0.9s;
  }

  /* Background images animation */
  @keyframes changeBackground {
    0% {
      background-image: url('x3.jpg');
    }

    33% {
      background-image: url('cov1.jpg');
    }

    66% {
      background-image: url('x2.jpg');
    }

    100% {
      background-image: url('x1.jpeg');
    }
  }

  /* Text animation */
  @keyframes changeText {
    0%, 25% {
      content: "Coronavirus spreads through close contact with an infected person.";
    }
    25%, 50% {
      content: "Wear a mask and maintain social distancing.";
    }
    50%, 75% {
      content: "Wash your hands regularly to prevent infection.";
    }
    75%, 100% {
      content: "Get vaccinated to protect yourself and others.";
    }
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .banner {
      height: 300px;
    }

    .banner-text {
      font-size: 25px;
    }
  }
  .card-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    /* Individual card styling */
    .info-card {
      width: 300px;
      padding: 15px;
      border-radius: 10px;
      background-color: #f9f9f9;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
      transition: transform 0.3s ease;
    }

    .info-card:hover {
      transform: scale(1.05);
    }

    .info-card img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
    }

    .info-card h2 {
      text-align: center;
      color: #333;
      font-size: 20px;
    }

    .info-card p {
      color: #555;
      font-size: 14px;
      margin: 10px 0;
    }

    .vaccine-name {
      font-weight: bold;
      font-size: 16px;
      color: #007bff;
    }
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      text-align: center;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: white;
    }

    .benefits {
      list-style-type: disc;
      padding-left: 20px;
      color: #444;
    }

    .benefits li {
      margin: 5px 0;
    }

    /* Footer of the card */
    
</style>



</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="hos.png" alt="Logo" style="width: 40px; height: 40px; margin-bottom: 15px;"> Care 
        <span style="color: rgb(255, 0, 0); font-size: 20px;">X</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About Coronavirus</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="new-user-testing.php">Testing</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="live-test-updates.php">Live Updates</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Welcome Popup Modal -->
<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="welcomeModalLabel" style="color: #2c3e50;">Welcome to CareX Hospital</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <img src="hos.png" alt="Welcome Image" style="width: 50px; border-radius: 10px; margin-bottom: 20px;">
          <p style="font-size: 18px; color: #7f8c8d;">We are committed to ensuring your safety during the Covid-19 pandemic. Explore the site for important information, testing services, and live updates.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Get Started</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Animated Banner -->
  <div class="banner">
    <!-- Banner with Text -->
  <div class="banner-text">Coronavirus spreads through close contact with an infected person.</div>
</div>
  

  <!-- Content Sections -->
  <section id="about" style="padding: 60px 20px; background-color: #f4f4f9;">
  <div style="max-width: 800px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 32px; color: #2c3e50; margin-bottom: 20px;">About Coronavirus</h2>
    <p style="font-size: 18px; line-height: 1.8; color: #7f8c8d;">
      Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people
      infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without
      requiring special treatment. Stay informed to protect yourself and others.
    </p>
    <img src="cov2.jpg" alt="Coronavirus Awareness"
      style="width: 100%; border-radius: 10px; margin-top: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
  </div>
</section>
<h2 style="font-size: 28px; text-align: center; color: #34495e; margin-bottom: 40px;">Vaccine Information</h2>

  <div class="card-container">
    <!-- Cova-Vax Card -->
    <div class="info-card">
      <img src="pi.jpg" alt="Cova-Vax">
      <h2 style="font-size: 28px; text-align: center; color: #34495e; margin-bottom: 40px;">Cova-vax</h2>
      <p>Recommended for preventing COVID-19. It has shown high efficacy and safety in trials.</p>
      <ul class="benefits">
        <li>Safe and effective against COVID-19.</li>
        <li>Strengthens immunity for long-term protection.</li>
        <li>Low side effects reported in clinical trials.</li>
      </ul>
      <a href="new-user-testing.php" class="btn">Test Now</a>
      <div class="footer">Stay protected with Cova-Vax</div>
    </div>

    <!-- Nova-Vax Card -->
    <div class="info-card">
      <img src="nova.jpg" alt="Nova-Vax">
      <h2 style="font-size: 28px; text-align: center; color: #34495e; margin-bottom: 40px;">Nova-vax</h2>
      <p>This vaccine provides strong protection against the COVID-19 virus and variants.</p>
      <ul class="benefits">
        <li>Protects against multiple variants of the virus.</li>
        <li>Has a good safety profile.</li>
        <li>Low side effects reported trials.</li>
        <li>Requires a two-dose regimen for full protection.</li>
      </ul>
      <a href="new-user-testing.php" class="btn">Test Now</a>
      <div class="footer">Nova-Vax for enhanced immunity</div>
    </div>

    <!-- Pfizer Card -->
    <div class="info-card">
      <img src="pi.jpg" alt="Pfizer">
      <h2 style="font-size: 28px; text-align: center; color: #34495e; margin-bottom: 40px;">P-fizer</h2>
 
      <p>One of the most widely used COVID-19 vaccines worldwide, proven to be highly effective.</p>
      <ul class="benefits">
        <li>Effective at preventing COVID-19 infection and severe disease.</li>
        <li>Booster doses provide enhanced.</li>
        <li>Recommended for all eligible adults and children over 12 years.</li>
      </ul>
      <a href="new-user-testing.php" class="btn">Test Now</a>
      <div class="footer">P-fizer protection against COVID-19</div>
    </div>
  </div>
<section id="services" style="padding: 60px 20px; background-color: #ecf0f1;">
  <div style="max-width: 1000px; margin: 0 auto;">
    <h2 style="font-size: 32px; text-align: center; color: #34495e; margin-bottom: 40px;">Covid-19 Symptoms</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
      <div style="background-color: #fff; width: 300px; margin: 10px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img src="hi.jpg" alt="High Fever"
          style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 20px;">
          <h3 style="font-size: 20px; color: #e74c3c; margin-bottom: 10px;">High Fever</h3>
          <p style="font-size: 16px; color: #7f8c8d;">Symptoms may include a high fever lasting 2-14 days. Seek medical attention if it persists.</p>
        </div>
      </div>
      <div style="background-color: #fff; width: 300px; margin: 10px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img src="co.jpg" alt="Dry Cough"
          style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 20px;">
          <h3 style="font-size: 20px; color: #3498db; margin-bottom: 10px;">Dry Cough</h3>
          <p style="font-size: 16px; color: #7f8c8d;">A persistent dry cough is a common symptom and may last for days or weeks.</p>
        </div>
      </div>
      <div style="background-color: #fff; width: 300px; margin: 10px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <img src="sh.jpg" alt="Shortness of Breath"
          style="width: 100%; height: 200px; object-fit: cover;">
        <div style="padding: 20px;">
          <h3 style="font-size: 20px; color: #2ecc71; margin-bottom: 10px;">Shortness of Breath</h3>
          <p style="font-size: 16px; color: #7f8c8d;">Difficulty breathing can be a serious symptom. Immediate care is advised.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="contact" style="padding: 60px 20px; background-color: #f4f4f9;">
  <div style="max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 32px; text-align: center; color: #2c3e50; margin-bottom: 20px;">Prevention</h2>
    <ul style="list-style-type: none; padding: 0; font-size: 18px; line-height: 2; color: #7f8c8d;">
      <li style="background: #ecf0f1; padding: 15px; border-radius: 5px; margin: 10px 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <strong>Wash your hands often:</strong> Use soap and water for at least 20 seconds.
      </li>
      <li style="background: #ecf0f1; padding: 15px; border-radius: 5px; margin: 10px 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <strong>Wear a face mask:</strong> Protect yourself and others by wearing a mask in crowded areas.
      </li>
      <li style="background: #ecf0f1; padding: 15px; border-radius: 5px; margin: 10px 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <strong>Avoid contact with sick people:</strong> Maintain a safe distance and avoid physical contact.
      </li>
      <li style="background: #ecf0f1; padding: 15px; border-radius: 5px; margin: 10px 0; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <strong>Cover your cough or sneeze:</strong> Use a tissue or your elbow to prevent spreading germs.
      </li>
    </ul>
  </div>
</section>


 
  <!-- Footer -->
  <footer style="background-color: #2c3e50; padding: 30px 20px;">
  <div style="max-width: 1200px; margin: 0 auto; text-align: center; color: white;">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: center;">
      <!-- Logo Section -->
      <div style="flex: 1; margin: 10px; min-width: 200px;">
        <img src="hos.png" alt="Hospital Logo" style="width: 80px; height: 80px; margin-bottom: 10px;">
        <h4 style="font-size: 18px; margin: 5px 0; font-weight: bold;">
          Care<span style="color: rgb(255, 0, 0);">X</span> Hospital
        </h4>
      </div>

      <!-- Contact Info Section -->
      <div style="flex: 2; margin: 10px; min-width: 200px; text-align: left;">
        <h5 style="font-size: 18px; margin-bottom: 10px; font-weight: bold;">Contact Us</h5>
        <p style="font-size: 14px; line-height: 1.5;">
          <strong>Phone:</strong> +1-800-555-1234<br>
          <strong>Email:</strong> support@carexhospital.com<br>
          <strong>Address:</strong> 123 Health Blvd, Well City, Wellness State
        </p>
      </div>

      <!-- Quick Links Section -->
      <div style="flex: 1; margin: 10px; min-width: 200px;">
        <h5 style="font-size: 18px; margin-bottom: 10px; font-weight: bold;">Quick Links</h5>
        <ul style="list-style: none; padding: 0; font-size: 14px; line-height: 1.8;">
          <li>
            <a href="about.php" style="color: #ecf0f1; text-decoration: none; transition: color 0.3s ease; display: inline-block;" 
               onmouseover="this.style.color='#f39c12'; this.style.textDecoration='underline';" 
               onmouseout="this.style.color='#ecf0f1'; this.style.textDecoration='none';">About Us</a>
          </li>
          <li>
            <a href="contact.php" style="color: #ecf0f1; text-decoration: none; transition: color 0.3s ease; display: inline-block;" 
               onmouseover="this.style.color='#f39c12'; this.style.textDecoration='underline';" 
               onmouseout="this.style.color='#ecf0f1'; this.style.textDecoration='none';">Contact Us</a>
          </li>
          <li>
            <a href="index.php" style="color: #ecf0f1; text-decoration: none; transition: color 0.3s ease; display: inline-block;" 
               onmouseover="this.style.color='#f39c12'; this.style.textDecoration='underline';" 
               onmouseout="this.style.color='#ecf0f1'; this.style.textDecoration='none';">Home</a>
          </li>
          <li>
            <a href="login.php" style="color: #ecf0f1; text-decoration: none; transition: color 0.3s ease; display: inline-block;" 
               onmouseover="this.style.color='#f39c12'; this.style.textDecoration='underline';" 
               onmouseout="this.style.color='#ecf0f1'; this.style.textDecoration='none';">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Social Media Links -->
    <div style="margin-top: 20px;">
      <a href="https://www.facebook.com/" style="color: white; margin: 0 10px; text-decoration: none; font-size: 20px; transition: color 0.3s ease;" 
         onmouseover="this.style.color='#f39c12'; this.style.transform='scale(1.2)';" 
         onmouseout="this.style.color='white'; this.style.transform='scale(1)';">
        <i class="fab fa-facebook-f"></i> Facebook
      </a>
      <a href="https://en.wikipedia.org/wiki/Twitter" style="color: white; margin: 0 10px; text-decoration: none; font-size: 20px; transition: color 0.3s ease;" 
         onmouseover="this.style.color='#f39c12'; this.style.transform='scale(1.2)';" 
         onmouseout="this.style.color='white'; this.style.transform='scale(1)';">
        <i class="fab fa-twitter"></i> Twitter
      </a>
      <a href="https://www.linkedin.com/" style="color: white; margin: 0 10px; text-decoration: none; font-size: 20px; transition: color 0.3s ease;" 
         onmouseover="this.style.color='#f39c12'; this.style.transform='scale(1.2)';" 
         onmouseout="this.style.color='white'; this.style.transform='scale(1)';">
        <i class="fab fa-linkedin-in"></i> LinkedIn
      </a>
    </div>
  </div>
  <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #bdc3c7;">
    &copy; 2024 CareX Hospital. All rights reserved.
  </div>
</footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    // Navbar color change on scroll
    window.addEventListener('scroll', function () {
      const navbar = document.getElementById('mainNav');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
  <script>
    // Add or remove 'scrolled' class to navbar when scrolling
$(window).on('scroll', function() {
  if ($(window).scrollTop() > 50) {
    $('.navbar').addClass('scrolled');
  } else {
    $('.navbar').removeClass('scrolled');
  }
});

// Show the welcome modal when the page loads
$(document).ready(function() {
  $('#welcomeModal').modal('show');
});

  </script>
</body>

</html>
