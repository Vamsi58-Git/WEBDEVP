<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lancer Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="lancerdash.css">
 
</head>
<body>

<header class="responsive-header" aria-label="Primary Navigation">
   
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu" aria-expanded="false">
        <span class="material-icons">menu</span>
    </button>
</header>

<div class="sidebar-overlay" id="sidebarOverlay" tabindex="-1" aria-hidden="true"></div>

<div class="dashboard-container">
    <aside class="sidebar" id="sidebar" role="navigation" aria-label="Sidebar Navigation">
        <div class="sidebar-header" aria-label="Brand Logo">
            <img src="logo1.png" alt="Logo" height="90px" width="150px">
        </div>
        <nav class="sidebar-nav">
            <a href="#" class="active" aria-current="page"><span class="material-icons" aria-hidden="true">dashboard</span>Dashboard</a>
            <a href="#"><span class="material-icons" aria-hidden="true">bar_chart</span>Reports</a>
            <a href="#"><span class="material-icons" aria-hidden="true">send</span>Proposal</a>
            <a href="#"><span class="material-icons" aria-hidden="true">chat</span>Chat</a>
            <a href="#"><span class="material-icons" aria-hidden="true">settings</span>Settings</a>
        </nav>
        <div class="sidebar-footer">
            <form action="logout.php" method="POST" style="margin: 0;">
    <button type="submit" style="background: none; border: none; color: #9ca3af; display: flex; align-items: center; gap: 10px; cursor: pointer;">
        <span class="material-icons" aria-hidden="true">logout</span> Log Out
    </button>
            </form>
</div>
    </aside>

    <main class="main-content" role="main" aria-label="Dashboard Content">
        <div class="header-top" style="display: flex; justify-content: space-between; align-items: center;">
<h1 class="header-title">FreeLancer Dashboad </h1>
 <div class="user-actions" style="display: flex; align-items: center; gap: 10px;">
</div>
</div>

        <section aria-label="Summary statistics" class="overview-cards">
            <article class="card" role="region" aria-labelledby="annual-earning">
                <div class="card-info">
                    <div id="annual-earning" class="card-amount">$82,935</div>
                    <div class="card-label">12-months earnings</div>
                </div>
                <div class="card-icon" aria-hidden="true">
                    <span class="material-icons">attach_money</span>
                </div>
            </article>

            <article class="card" role="region" aria-labelledby="long-term-clients">
                <div class="card-info">
                    <div id="long-term-clients" class="card-amount">41%</div>
                    <div class="card-label">Long-term clients</div>
                </div>
                <div class="card-icon" aria-hidden="true">
                    <span class="material-icons">groups</span>
                </div>
            </article>

            <article class="card" role="region" aria-labelledby="views-last-7days">
                <div class="card-info">
                    <div id="views-last-7days" class="card-amount">82</div>
                    <div class="card-label">in the last 7 days</div>
                </div>
                <div class="card-icon" aria-hidden="true">
                    <span class="material-icons">remove_red_eye</span>
                </div>
            </article>
        </section>

        <section class="analytics-card" aria-label="Analytics graph">
            <div class="analytics-header">
                <div>Analytics - Updated last monday at 4:07 pm</div>
                <select aria-label="Select analytics type">
                    <option value="views" selected>Views</option>
                    <option value="clicks">Clicks</option>
                </select>
                <select aria-label="Select date range">
                    <option value="last7days" selected>Last 7 Days</option>
                    <option value="last30days">Last 30 Days</option>
                </select>
            </div>
            <canvas id="analyticsChart" class="analytics-chart" aria-label="Line chart showing analytics data" role="img"></canvas>
        </section>

        <section aria-label="Weekly Summary" class="summary-table-container">
            <h2 style="font-weight: 700; font-size: 1.25rem; margin-bottom: 16px;">Weekly Summary</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Contract</th>
                        <th scope="col">Hours</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>UI Designer for Dashboard</td>
                        <td>5.20</td>
                        <td><strong>$220</strong></td>
                        <td>Hourly</td>
                    </tr>
                    <tr>
                        <td>UI/UX Designer to Update Figma</td>
                        <td>-</td>
                        <td><strong>$240</strong></td>
                        <td>Fixed</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <aside class="right-sidebar" aria-label="User profile and communication">
        <section class="profile-section" aria-label="User profile summary">
            <img src="user-profile.png" class="profile-avatar" />
            <div class="profile-name">  <?php
             echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'Guest';
             ?></div>
            <div class="profile-stat">
                <svg class="progress-ring" width="40" height="40" aria-hidden="true">
                    <circle class="back" stroke-width="4" r="18" cx="20" cy="20" />
                    <circle class="front" stroke-width="4" r="18" cx="20" cy="20" stroke-dasharray="113.097" stroke-dashoffset="11.3097" />
                </svg>
                <div>
                    <div class="progress-label">Job Success Rate</div>
                    <div class="progress-percent">90%</div>
                </div>
            </div>
            <div class="profile-stat">
                <svg class="progress-ring" width="40" height="40" aria-hidden="true">
                    <circle class="back" stroke-width="4" r="18" cx="20" cy="20" />
                    <circle class="front" stroke-width="4" r="18" cx="20" cy="20" stroke-dasharray="113.097" stroke-dashoffset="73.5132" />
                </svg>
                <div>
                    <div class="progress-label">Long Term Client</div>
                    <div class="progress-percent">35%</div>
                </div>
            </div>
            <button style="margin-top: 8px; padding: 8px 16px; border: none; border-radius: 8px; background-color: #2563eb; color: white; font-weight: 600; cursor: pointer;" aria-label="View Profile">View Profile</button>
        </section>

        <section aria-label="Communication" class="communication-section">
            <h3 class="communication-title">Communication</h3>
            <p class="communication-text">You replied to 2 of 3 invitations to apply in the past 30 days.</p>

            <div class="communication-progress" aria-label="You may work a day progress">
                <div class="progress-label">You may Work a day</div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 45%;"></div>
                </div>
                <div class="progress-bar-labels">
                    <span>Never</span>
                    <span>Always</span>
                </div>
            </div>

            <div class="communication-progress" aria-label="You reply every time progress">
                <div class="progress-label">You reply every time</div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 95%;"></div>
                </div>
                <div class="progress-bar-labels">
                    <span>Never</span>
                    <span>Always</span>
                </div>
            </div>
        </section>
    </aside>

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
                    </div>e
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
    // Sidebar mobile toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const menuToggle = document.getElementById('menuToggle');

    menuToggle.addEventListener('click', () => {
        const isActive = sidebar.classList.toggle('active');
        sidebarOverlay.classList.toggle('active', isActive);
        menuToggle.setAttribute('aria-expanded', isActive);
        if (isActive) {
            sidebar.focus();
        }
    });

    sidebarOverlay.addEventListener('click', () => {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', false);
    });

    // Analytics line chart using Chart.js library via CDN
    // We will embed a minimal inline script to plot the line chart

    // Load Chart.js dynamically
    function loadChartJS(callback) {
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/chart.js';
        script.onload = callback;
        document.head.appendChild(script);
    }

    function createChart() {
        const ctx = document.getElementById('analyticsChart').getContext('2d');

        const data = {
            labels: ['Oct 7', 'Oct 8', 'Oct 9', 'Oct 10', 'Oct 11', 'Oct 12', 'Oct 13'],
            datasets: [{
                label: 'Views',
                data: [10, 25, 16, 30, 22, 34, 18],
                fill: true,
                borderColor: '#2563eb',
                backgroundColor: 'rgba(37, 99, 235, 0.15)',
                tension: 0.3,
                pointBackgroundColor: '#2563eb',
                pointRadius: 5,
                pointHoverRadius: 7
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'nearest',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'nearest',
                        intersect: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y + ' Views';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6b7280'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        max: 40,
                        grid: {
                            color: '#e5e7eb'
                        },
                        ticks: {
                            stepSize: 10,
                            color: '#6b7280'
                        }
                    }
                }
            }
        };

        new Chart(ctx, config);
    }

    loadChartJS(createChart);

    // Circular Progress bar calculations

    // Using stroke-dashoffset to show percentage
    // 100% = 0 offset, 0% = full circumference offset
    // circumference = 2 * PI * radius = 2 * 3.1416 * 18 ~= 113.097
    function setCircleProgress(circle, percent) {
        const radius = circle.r.baseVal.value;
        const circumference = 2 * Math.PI * radius;
        const offset = circumference - (percent / 100) * circumference;
        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = offset;
    }

    document.querySelectorAll('svg.progress-ring').forEach(svg => {
        const circleFront = svg.querySelector('circle.front');
        let percent = 0;
        if (circleFront.style.strokeDashoffset) {
            // Parse from dashoffset style
            const dashoffset = parseFloat(circleFront.style.strokeDashoffset);
            const radius = circleFront.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            percent = (1 - dashoffset / circumference) * 100;
        } else {
            percent = 75; // default fallback
        }
        setCircleProgress(circleFront, percent);
    });
</script>
</body>
</html>

