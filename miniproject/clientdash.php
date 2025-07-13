<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Client Dashboard</title>
  <!-- Google Material Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- Google Fonts - Inter for modern typography -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="clientdash.css">
</head>
<body>
  <header class="header-desktop">
  <div class="header-inner">
    
    <!-- Title: Left Side -->
    <div class="header-title">Client Dashboard</div>

    <!-- Search Bar: Center -->
    <form class="search-bar">
      <input type="search" placeholder="Search..." />
      <span class="material-icons search-icon">search</span>
    </form>

    <!-- Right Section: Icons + Profile -->
    <div class="header-actions">
      <button class="header-icon-btn" title="Messages">
        <span class="material-icons">chat_bubble_outline</span>
        <span class="notification-badge">3</span>
      </button>
      <button class="header-icon-btn" title="Notifications">
        <span class="material-icons">notifications_none</span>
        <span class="notification-badge">7</span>
      </button>
      <div class="user-profile">
        <img src="icons-boy.png" alt="User profile picture" />
        <span>Rohit</span>
      </div>
    </div>
  </div>
</header>

  <div class="main-layout">
    <aside id="sidebar" class="sidebar" role="navigation" aria-label="Sidebar navigation">
      <nav>
        <a href="#" class="active" aria-current="page">
          <span class="material-icons" aria-hidden="true">dashboard</span> Dashboard
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">analytics</span> Analytics
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">mail_outline</span> Mail
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">folder_open</span> Documents
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">group</span> Clients
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">person</span> Users
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">star</span> Reviews
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">settings</span> Settings
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">help_outline</span> Help & Support
        </a>
        <a href="#">
          <span class="material-icons" aria-hidden="true">logout</span> Logout
        </a>
      </nav>
      <button class="sidebar-btn" type="button" aria-label="Connect to Admin">Connect to Admin</button>
      <div class="sidebar-footer">Client Dashboard © TEAM 3</div>
    </aside>
    <main class="content-area" role="main" tabindex="-1">

      <!-- Info Cards -->
      <section aria-label="Summary statistics" class="info-cards">
        <article class="info-card" tabindex="0">
          <div class="info-title">New Visitor</div>
          <div class="info-value">162.9K</div>
          <div class="info-desc up">
            <span class="material-icons" aria-hidden="true">trending_up</span> +10%
          </div>
          <div style="font-size: 12px; color: #999;">Total 659.45K Visitors</div>
        </article>
        <article class="info-card" tabindex="0">
          <div class="info-title">Active Users</div>
          <div class="info-value">47.23K</div>
          <div class="info-desc down">
            <span class="material-icons" aria-hidden="true">trending_down</span> -05%
          </div>
          <div style="font-size: 12px; color: #999;">Total 223.15K Users</div>
        </article>
        <article class="info-card" tabindex="0">
          <div class="info-title">New Freelancer</div>
          <div class="info-value">2.43K</div>
          <div class="info-desc up">
            <span class="material-icons" aria-hidden="true">trending_up</span> +10%
          </div>
          <div style="font-size: 12px; color: #999;">Total 23.48K Freelancers</div>
        </article>
        <article class="info-card" tabindex="0">
          <div class="info-title">New Client</div>
          <div class="info-value">945</div>
          <div class="info-desc down">
            <span class="material-icons" aria-hidden="true">trending_down</span> -03%
          </div>
          <div style="font-size: 12px; color: #999;">Total 6.38K Clients</div>
        </article>
      </section>

      <!-- Dashboard grid -->
      <section class="dashboard-grid" aria-label="Dashboard charts and data">

        <!-- Daily Visitors Chart -->
        <section class="chart-container" aria-label="Daily and monthly visitors chart">
          <div class="chart-header">
            <h2 class="chart-title" id="dailyVisitorsLabel">Daily Visitors</h2>
            <select aria-labelledby="dailyVisitorsLabel" class="chart-period-select" name="period" id="periodSelect">
              <option value="daily" selected>Daily</option>
              <option value="monthly">Monthly</option>
            </select>
          </div>
          <!-- Placeholder line chart image -->
          <img 
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/34ec75f2-8516-47b1-8bdf-d388d5790dac.png" 
            alt="Line chart representation showing daily and monthly visitors trends" 
            style="width: 100%; height: auto; border-radius: 12px;"
          />
        </section>

        <!-- Visitor Locations -->
        <section class="visitor-locations" aria-label="Visitor locations data">
          <h3>Visitor Locations <button class="see-all-btn" aria-label="See all locations">See all</button></h3>
          <ul>
            <li><span class="country">United States</span><span class="stat up">14,656 <span class="material-icons">trending_up</span> 5.0%</span></li>
            <li><span class="country">Canada</span><span class="stat up">8,450 <span class="material-icons">trending_up</span> 2.3%</span></li>
            <li><span class="country">United Kingdom</span><span class="stat down">6,500 <span class="material-icons">trending_down</span> 1.1%</span></li>
            <li><span class="country">Germany</span><span class="stat down">4,230 <span class="material-icons">trending_down</span> 7.2%</span></li>
            <li><span class="country">French</span><span class="stat down">1,962 <span class="material-icons">trending_down</span> 1.25%</span></li>
            <li><span class="country">Switzerland</span><span class="stat up">1,221 <span class="material-icons">trending_up</span> 2.45%</span></li>
            <li><span class="country">Netherland</span><span class="stat up">912 <span class="material-icons">trending_up</span> 1.55%</span></li>
            <li><span class="country">United Arab Emirates</span><span class="stat up">320 <span class="material-icons">trending_up</span> 0.25%</span></li>
          </ul>
        </section>

        <!-- Users list -->
        <section class="users-list-container" aria-label="Users list with details">
          <h3>Users List</h3>
          <table class="users-list" role="table">
            <thead>
              <tr>
                <th scope="col">User Name</th>
                <th scope="col">Location</th>
                <th scope="col">Email Address</th>
                <th scope="col">Mobile Number</th>
              </tr>
            </thead>
            <tbody>
              <tr tabindex="0">
                <td>Kathryn Murphy</td>
                <td>United States</td>
                <td><a href="mailto:Kathryn@example.com">Kathryn@example.com</a></td>
                <td>(307) 555-0133</td>
              </tr>
              <tr tabindex="0">
                <td>Jordan Entolmp</td>
                <td>Canada</td>
                <td><a href="mailto:jordanp@gmail.com">jordanp@gmail.com</a></td>
                <td>(405) 555-0128</td>
              </tr>
              <tr tabindex="0">
                <td>Kripton Burgant</td>
                <td>Netherland</td>
                <td><a href="mailto:burgantk@gmail.com">burgantk@gmail.com</a></td>
                <td>(929) 555-0109</td>
              </tr>
              <tr tabindex="0">
                <td>Sampot Sunpant</td>
                <td>China</td>
                <td><a href="mailto:sunpants@gmail.com">sunpants@gmail.com</a></td>
                <td>(303) 555-0105</td>
              </tr>
            </tbody>
          </table>
        </section>
      </section>

    </main>
  </div>
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
<script>
  // Sidebar toggle for mobile menu
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');

  menuToggle.addEventListener('click', () => {
    const isOpen = sidebar.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', isOpen);
  });
</script>

</body>
</html>

