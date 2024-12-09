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
    background-color: #2c3e50  !important;
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
</style>
  <style>
    /* Body and general styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-top: 50px;
      font-size: 36px;
    }

    .about-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .about-text {
      flex: 1;
      padding: 20px;
      font-size: 18px;
      line-height: 1.6;
      max-width: 600px;
      color: #444;
    }

    .about-text h2 {
      font-size: 28px;
      color: #007bff;
      margin-bottom: 20px;
    }

    .about-text p {
      margin-bottom: 20px;
    }

    .about-text p strong {
      font-weight: bold;
    }

    .about-images {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      padding: 20px;
    }

    .about-images img {
      width: 150px;
      height: 150px;
      border-radius: 15px;
      object-fit: cover;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-images img:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        align-items: center;
      }

      .about-text {
        text-align: center;
        padding: 20px;
      }

      .about-images {
        justify-content: center;
        margin-top: 20px;
      }

      .about-images img {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>
<body>
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
  

<br>
<br>
<br>
  

  <div class="about-container">
    <!-- Text Section -->
    <div class="about-text">
      <h2>What is Coronavirus?</h2>
      <p>The coronavirus is a large family of viruses that can cause illness in animals and humans. In humans, these viruses can lead to respiratory infections ranging from the common cold to more severe diseases like <strong>COVID-19</strong>.</p>
      <p>COVID-19, caused by the novel coronavirus (SARS-CoV-2), emerged in late 2019 and quickly became a global pandemic. The virus primarily spreads through respiratory droplets when an infected person coughs, sneezes, or talks.</p>
      <p>The symptoms of COVID-19 can range from mild to severe, including fever, cough, and difficulty breathing. The elderly and those with underlying health conditions are more vulnerable to severe effects. Preventative measures such as wearing masks, practicing social distancing, and getting vaccinated are essential in controlling the spread.</p>
    </div>

    
    <!-- Image Section -->
    <div class="about-images">
  <!-- First Image -->
  <div style="text-align: center;">
    <img src="hi.jpg" alt="Coronavirus Image 1">
  
  </div>

  <!-- Second Image -->
  <div style="text-align: center;">
    <img src="bg5.jpeg" alt="Coronavirus Image 2">
    
  </div>

  <!-- Third Image -->
  <div style="text-align: center;">
    <img src="sh.jpg" alt="Coronavirus Vaccine">
   
  </div>
</div>

  </div>
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
</body>
</html>
