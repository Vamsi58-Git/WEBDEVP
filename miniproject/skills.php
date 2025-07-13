<?php
session_start();
// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "user_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Skills and Challenges on the Service</title>
  <link rel="stylesheet" href="skills.css" />
   <style>
        .post-job-btn {
            background-color: #007bff; 
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .post-job-btn:hover {
            background-color: #218838;
        }

        .log-in {
            background-color: #007bff; /* Blue */
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .log-in:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

  <header class="header">
    <a href="home.php"><img src="logo1.png" alt="Lancer Company Logo" class="logo" /></a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="About.php">About</a>
      <a href="#">Service</a>
      <a href="#">Project</a>
      <a href="#">Contact</a>
    </nav>
   <div><?php if (isset($_SESSION['user_name'])): ?>
                <!-- Post a Job Button -->
                <a href="post_job.php" style="margin-right: 10px;">
                    <button type="button" class="post-job-btn">Post a Job</button>
                </a>

                <!-- Welcome and Logout -->
                <span style="margin-right: 20px; font-weight: bold; color: #222;">
                    Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?>
                </span>
                <form action="logout.php" method="POST" style="display:inline;">
                    <button type="submit" class="log-in">Logout</button>
                </form>
            <?php else: ?>
                <!-- Login Button -->
                <a href="login1.php">
                    <button class="log-in">Log In</button>
                </a>
            <?php endif; ?></div>
  </header>

  <section class="service" id="service">
    <div class="container">
      <div class="left">
        <img src="lancer-banner.png" alt="Floating Tablet with Freelancer App Preview" />
      </div>
      <div class="right">
        <h1>SKILLS AND CHALLENGES ON THE SERVICE</h1>
        <p>Find, collaborate, and hire top freelancers and agencies. Join our community of Lancer professionals ready to work.</p>
      </div>
    </div>
  </section>

  <section class="services-cards">
    <div class="search-bar">
      <input type="text" placeholder="Search by Skill..." />
    </div>
    <div class="filter-tags">
      <button class="tag">Design</button>
      <button class="tag">Web Development</button>
      <button class="tag">Marketing</button>
      <button class="tag">Writing</button>
    </div>
    <div class="profile-card">
      <img src="serv1.png" alt="Freelancer Profile Image" class="profile-img" />
      <h2>Top Lancer Assistants</h2>
      <p>Top Lancer Assistants content strategist, marketing expert & admin support</p>
      <ul>
        <li>✔ Professional Assistant</li>
        <li>✔ Social Media Marketing</li>
        <li>✔ Content Strategy</li>
      </ul>
      <div class="rating-earnings">
        <p>⭐⭐⭐⭐☆ 4.8/5.0</p>
        <p>$12k+ Earned</p>
      </div>
      <div class="social-links">
        <a href="#" target="_blank" rel="noopener noreferrer"><img src="facebook-icon.png" alt="Facebook" /></a>
        <a href="#" target="_blank" rel="noopener noreferrer"><img src="instagram-logo1.png" alt="Instagram" /></a>
        <a href="#" target="_blank" rel="noopener noreferrer"><img src="linkedin-icon.png" alt="LinkedIn" /></a>
      </div>
      <a href="#" class="view-profile-btn">View Profile</a>
    </div>
  </section>
 <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column"><h3>Navigate</h3><ul><li><a href="#">Home</a></li><li><a href="#">Post a Job</a></li><li><a href="#">Find a Freelancer</a></li><li><a href="#">Find a Job</a></li><li><a href="#">Enterprise Solutions</a></li></ul></div>
                <div class="footer-column"><h3>Company Info</h3><ul><li><a href="#">About Lancer.com</a></li><li><a href="#">How Lancer.com Works</a></li><li><a href="#">Why Lancer.com</a></li><li><a href="#">Work Agreements</a></li><li><a href="#">SafePay</a></li><li><a href="#">Pricing</a></li></ul></div>
                <div class="footer-column"><h3>Resources</h3><ul><li><a href="#">Help & FAQ</a></li><li><a href="#">Blog</a></li><li><a href="#">Contact Us</a></li><li><a href="#">Mobile App</a></li><li><a href="#">APIs</a></li><li><a href="#">Sitemap</a></li><li><a href="#">Cookie Settings</a></li></ul></div>
                <div class="footer-column"><h3>Policies</h3><ul><li><a href="#">IP Policy</a></li><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms of Service</a></li></ul></div>
                <div class="footer-column">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                        <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                        <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                    </div>
                    <h3>Get the Lancer App</h3>
                    <div class="app-icons">
                        <a href="#"><img src="playstore1-icon.png" alt="Google Play"></a>
                        <a href="#"><img src="appstore-icon.jpg" alt="App Store"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025, Lancer.com , Made by TEAM 3</p>
        </div>
    </footer>

 

</body>
</html>
