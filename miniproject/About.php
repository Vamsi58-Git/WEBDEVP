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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us Section</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #333;
      line-height: 1.6;
    }
    header {
        display: flex;
        justify-content: space-between;
        padding: 15px 30px;
        background: white;
        background-color: rgb(221, 213, 213);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        align-items: center;
    }
    
    .logo {
        height: 90px;
        width: 150px;
        margin-left: 50px;
    }
    .image{
        height: 90px;
        width: 150px;
    
    }
    nav a {
        margin-left: 15px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        padding: 20px;
    }
    
    .btn {
        color: white;
        background-color: rgb(39, 119, 198);
        text-decoration: none;
    }
    
    .sign_log{
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .sign_log:hover{
        color:rgb(39, 119, 198);
    }

    .about-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 40px;
      padding: 60px 40px;
      flex-wrap: wrap; 
      max-width: 1200px;
      margin: auto;
    }

    .about-text {
      flex: 1;
      max-width: 550px;
    }

    .about-text h2 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    .about-text p {
      margin-bottom: 15px;
      font-size: 1em;
    }

    .learn-more-button {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s;
    }

    .learn-more-button:hover {
      background-color: #333;
    }

    .about-image {
      flex: 1;
      max-width: 500px;
    }

    .about-image img {
      width: 100%;
      height: auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .about-container {
        padding: 40px 20px;
        text-align: center;
      }

      .about-text, .about-image {
        max-width: 100%;
      }

      .about-text h2 {
        font-size: 1.8em;
      }
    }
    .values-section {
        padding: 40px 10px;
        max-width: 1200px;
        margin: auto;
        text-align: center;
      }
      .values-section hr{
        width: 50px;
        height: 3px;
        background-color: black;
        margin: 5px auto 0;
      }
  
      .values-section h2 {
        font-size: 2.5em;
        margin-bottom: 40px;
      }
  
      .values-grid {
        padding-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
      }
  
      .value-card {
        background-color: white;
        padding: 30px 20px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
      }
  
      .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
      }
  
      .value-icon {
        font-size: 40px;
        color: #4a90e2;
        margin-bottom: 15px;
      }
  
      .value-title {
        font-size: 1.4em;
        font-weight: bold;
        margin-bottom: 10px;
      }
  
      .value-desc {
        font-size: 0.95em;
        color: #666;
      }
      h1 {
        text-align: center;
        margin-top: 50px;
        font-size: 36px;
        color: #111;
      }
  
      .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 50px;
        max-width: 1200px;
        margin: 0 auto;
      }
  
      .team-member {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 400px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease;
      }
  
      .team-member:hover {
        transform: translateY(-5px);
      }
  
      .team-member img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
      }
  
      .role {
        text-transform: uppercase;
        font-size: 12px;
        color: #888;
      }
  
      .name {
        font-size: 20px;
        font-weight: bold;
        margin: 8px 0;
        color: #222;
      }
  
      .desc {
        font-size: 14px;
        color: #555;
      }
  
      @media (max-width: 768px) {
        .team-member {
          width: 100%;
        }
      }
      .footer {
        background-color: #222;
        color: white;
        padding: 40px 0;
        font-family: Arial, sans-serif;
    }
    
    .container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
    }
    .footer-column {
        flex: 1;
        min-width: 200px;
        margin: 10px;
    }
    
    .footer-column h3 {
        font-size: 18px;
        margin-bottom: 15px;
        color: #ffffff;
    }
    
    .footer-column ul {
        list-style: none;
        padding: 0;
    }
    
    .footer-column ul li {
        margin-bottom: 10px;
    }
    
    .footer-column ul li a {
        text-decoration: none;
        color: #ccc;
        font-size: 14px;
        transition: color 0.3s ease-in-out;
    }
    
    .footer-column ul li a:hover {
        color: #ffffff;
    }
    .social-icons img, .app-icons img {
        width: 30px;
        margin-right: 10px;
        transition: transform 0.3s ease-in-out;
    }
    
    .social-icons img:hover, .app-icons img:hover {
        transform: scale(1.1);
    }
    .footer-bottom {
        text-align: center;
        padding: 15px 0;
        background-color: #111;
        margin-top: 20px;
    }
    
    .footer-bottom p {
        font-size: 14px;
        color: #ccc;
    }
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
    <header>
        <div class="logo">
            <img src="logo1.png" alt="logo_lancer" class="image">
        </div>
        <nav>
           <a href="home.php">Home</a>
         <?php if (isset($_SESSION['user_name'])): ?>
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
            <?php endif; ?>
        </nav>
    </header>
  <section class="about-container">
    <div class="about-text">
      <h2>About Us</h2>
     <p>We are a passionate group of second-year Computer Science and Data Science (CSD) students from Aditya Institute of Technology and Management, Tekkali. Our team is dedicated to turning ideas into impactful solutions by combining technology, creativity, and collaboration.

        This website is developed as part of our Skill Oriented Course (SOC), where we focus on building real-world projects to enhance our technical, problem-solving, and teamwork skills. Each team member has contributed through roles such as designing, coding, content writing, and testing to make this project a meaningful learning experience.
        
        We believe in continuous learning and are excited to showcase our work through this platform.</p>
      <button class="learn-more-button">Learn More...</button>
    </div>

    <div class="about-image">
      <img src="designer-image.jpg" alt="Expo Image">
    </div>
  </section>
  <section class="values-section">
    <h2>Our Values</h2><hr>
    <div class="values-grid">
      <div class="value-card">
        <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
        <div class="value-title">Innovation</div>
        <div class="value-desc">We continuously strive for creative solutions that transform the way we work and live.</div>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="fas fa-users"></i></div>
        <div class="value-title">Collaboration</div>
        <div class="value-desc">Teamwork and open communication are at the heart of our mission and projects.</div>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
        <div class="value-title">Integrity</div>
        <div class="value-desc">We are committed to honesty, transparency, and accountability in everything we do.</div>
      </div>
      <div class="value-card">
        <div class="value-icon"><i class="fas fa-globe"></i></div>
        <div class="value-title">Impact</div>
        <div class="value-desc">Our work aims to create a meaningful and positive impact in our communities.</div>
      </div>
    </div>
  </section>
  <h1>Meet our team</h1>

  <div class="team-container">
   
    <div class="team-member">
      <img src="icons-boy.png" alt="K Rohit">
      <div class="role">Team Leader</div>
      <div class="name">K Rohit</div>
      <div class="desc">Second year CSD student passionate about innovation and leadership.</div>
    </div>

    <div class="team-member">
      <img src="icons-girl.png" alt="Sailaja">
      <div class="role">Research Analyst</div>
      <div class="name">B Sailaja</div>
      <div class="desc">Focused on data insights and meaningful contribution to project goals.</div>
    </div>

    
    <div class="team-member">
      <img src="icons-girl.png" alt="Pujitha">
      <div class="role">Creative Designer</div>
      <div class="name">D Pujitha</div>
      <div class="desc">Bringing visual charm and user-centric design to our work.</div>
    </div>

    
    <div class="team-member">
      <img src="icons-girl.png" alt="Gnaneswari">
      <div class="role">Documentation Lead</div>
      <div class="name">K Gnaneswari</div>
      <div class="desc">Ensures all our ideas are clearly communicated and well-documented.</div>
    </div>

    <div class="team-member">
      <img src="icons-boy.png" alt="Vamsi Krishna">
      <div class="role">Frontend Developer</div>
      <div class="name">V Vamsi Krishna</div>
      <div class="desc">Loves building websites and solving real-world problems with code.</div>
    </div>

  
    <div class="team-member">
      <img src="icons-boy.png" alt="Abhi Ram">
      <div class="role">Presentation Specialist</div>
      <div class="name">M Abhi Ram</div>
      <div class="desc">Adds flair to our presentations with structure, flow, and impact.</div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>Navigate</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">Find a Freelancer</a></li>
                    <li><a href="#">Find a Job</a></li>
                    <li><a href="#">Enterprise Solutions</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Company Info</h3>
                <ul>
                    <li><a href="#">About Lancer.com</a></li>
                    <li><a href="#">How Lancer.com Works</a></li>
                    <li><a href="#">Why Lancer.com</a></li>
                    <li><a href="#">Work Agreements</a></li>
                    <li><a href="#">SafePay</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Help & FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">APIs</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Cookie Settings</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Policies</h3>
                <ul>
                    <li><a href="#">IP Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>

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
        <p>© 2025, Lancer.com ,  Made by TEAM 3</p>
    </div>
</footer>

</body>
</html>
