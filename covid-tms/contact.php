
<?php
// Database connection
include('includes/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize input data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Validation
    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email address.";
    if (empty($subject)) $errors[] = "Subject is required.";
    if (empty($message)) $errors[] = "Message is required.";

    // If no errors, insert data into the database
    if (empty($errors)) {
        $query = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>alert('Your message has been sent successfully!');</script>";
        } else {
            echo "<script>alert('Error submitting your message. Please try again.');</script>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="hos.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
  /* Navbar custom styles */
  .navbar {
    background-color: #2c3e50 !important;
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
        body {
            font-family: Arial, sans-serif;
            background: url('back.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 700px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 80px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .form-group textarea {
            resize: none;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #0072ff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #005bb5;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            .form-container h2 {
                font-size: 20px;
            }

            .form-group input,
            .form-group textarea {
                font-size: 14px;
            }

            .form-container button {
                font-size: 14px;
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
    <div class="form-container">
    <h2 style="font-size: 28px; text-align: center; color: #34495e; margin-bottom: 40px;">Contact Us</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" placeholder="Enter subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4" placeholder="Enter your message" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>
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
