<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Hiring Platform</title>
    <link rel="stylesheet" href="home.css">
    <style>
        .post-job-btn {
            background-color: #007bff; /* Green */
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
            <img src="logo1.png" alt="Logo" height="90px" width="150px">
        </div>
        <nav>
            <ul>
                <li><a href="skills.php">Find Freelancers</a></li>
                <li><a href="services.php">Find Jobs</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="clientdash.php">Client dashboard</a></li>
                <li><a href="lancerdash.php">Freelancer dashboard</a></li>
            </ul>
        </nav>

        <div class="buttons">
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
        </div>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h2>Find & Hire Expert Freelancers</h2>
            <p>Work with the best freelance talent from around the world on our secure, flexible, and cost-effective platform.</p>
            <div class="search-box">
                <input type="text" id="search" placeholder="What skill are you looking for?">
                <button onclick="searchSkill()">🔍</button>
            </div>
            <div class="skill-tags">
                <a href="#"><span>Design</span></a>
                <a href="#"><span>Writing</span></a>
                <a href="#"><span>Data Entry</span></a>
                <a href="#"><span>Web Development</span></a>
                <a href="#"><span>Graphic Design</span></a>
            </div>
            <button class="post-job-main">Post a Job - It's Free</button>
        </div>
    </section>

    <section class="stats">
        <div>
            <h3>800,000</h3>
            <p>Employers Worldwide</p>
        </div>
        <div>
            <h3>1 Million</h3>
            <p>Paid Invoices</p>
        </div>
        <div>
            <h3>$250 Million</h3>
            <p>Paid to Freelancers</p>
        </div>
        <div>
            <h3>99%</h3>
            <p>Customer Satisfaction Rate</p>
        </div>
    </section>

    <div class="finddom">
        <h2 class="findtop">Find Top Freelancers</h2>
        <hr>
    </div>    
    <section class="categories">
        <div class="category"><img src="videoedit icon.png" alt="Code"><h3>Video Editing & Recording</h3><p>286,705 Freelancers</p></div>
        <div class="category"><img src="coding.jpg" alt="Code"><h3>Programming & Development</h3><p>232,546 Freelancers</p></div>
        <div class="category"><img src="writing-icon.png" alt="Writing"><h3>Writing & Translation</h3><p>212,263 Freelancers</p></div>
        <div class="category"><img src="design-icon.png" alt="Design"><h3>Design & Art</h3><p>196,065 Freelancers</p></div>
        <div class="category"><img src="admin-icon.png" alt="Admin"><h3>Administrative & Secretarial</h3><p>86,282 Freelancers</p></div>
        <div class="category"><img src="sales-icon.png" alt="Sales"><h3>Sales & Marketing</h3><p>77,205 Freelancers</p></div>
        <div class="category"><img src="engineering-icon.png" alt="Engineering"><h3>Engineering & Architecture</h3><p>50,792 Freelancers</p></div>
        <div class="category"><img src="finance-icon.png" alt="Finance"><h3>Business & Finance</h3><p>45,725 Freelancers</p></div>
        <div class="category"><img src="education-icon.png" alt="Education"><h3>Education & Training</h3><p>10,155 Freelancers</p></div>
       
    </section>

    <footer>
        <button class="see-all">See All Skills</button>
    </footer>

    <section class="work-your-way">
        <div class="work-your-way-content">
            <h2>Work Your Way</h2>
            <p>Choose from four Payment terms and create Agreements.</p>
            <div class="payment-options">
                <div class="option" data-option="fixed-price">
                    <h3>Fixed Price</h3>
                    <p>Set a total fixed cost for your job and create milestones that you're satisfied every step of the way. Set a due date and the amount to be paid for each milestone.</p>
                    <button class="toggle-info" onclick="toggleInfo('fixed-price')">More Info</button>
                    <div class="extra-info" id="fixed-price-info"><p>Best for projects with a clear scope and timeline.</p></div>
                </div>
                <div class="option" data-option="hourly">
                    <h3>Hourly</h3>
                    <p>Pay based on the hours worked by the freelancer.</p>
                    <button class="toggle-info" onclick="toggleInfo('hourly')">More Info</button>
                    <div class="extra-info" id="hourly-info"><p>Ideal for ongoing or flexible projects.</p></div>
                </div>
                <div class="option" data-option="task-based">
                    <h3>Task-Based</h3>
                    <p>Pay per task completed by the freelancer.</p>
                    <button class="toggle-info" onclick="toggleInfo('task-based')">More Info</button>
                    <div class="extra-info" id="task-based-info"><p>Great for breaking down projects into smaller deliverables.</p></div>
                </div>
                <div class="option" data-option="recurring-payment">
                    <h3>Recurring Payment</h3>
                    <p>Set up automatic payments for ongoing work.</p>
                    <button class="toggle-info" onclick="toggleInfo('recurring-payment')">More Info</button>
                    <div class="extra-info" id="recurring-payment-info"><p>Perfect for long-term collaborations.</p></div>
                </div>
            </div>
            <a href="#" class="learn-more">Learn About Agreements</a>
        </div>
    </section>

    <div class="finddom">
        <h2>It's Easy to Get Work Done on Lancer.com</h2>
        <hr>
    </div>
    <div class="features">
        <div class="feature"><div class="icon"><img src="job-icon.png" alt="Post a Job"></div><h3>Post a Job</h3><p>Create your free job posting and start receiving Quotes within hours.</p></div>
        <div class="feature"><div class="icon"><img src="hire-icon.png" alt="Hire Freelancers"></div><h3>Hire Freelancers</h3><p>Compare the Quotes you receive and hire the best freelance professionals for the job.</p></div>
        <div class="feature"><div class="icon"><img src="work-icon.png" alt="Get Work Done"></div><h3>Get Work Done</h3><p>Decide on how and when payments will be made and use WorkRooms to collaborate.</p></div>
        <div class="feature"><div class="icon"><img src="payment-icon.jpg" alt="Make Secure Payments"></div><h3>Make Secure Payments</h3><p>Choose from multiple payment methods with SafePay payment protection.</p></div>
    </div>

    <div class="button-container">
        <button class="button">See How Lancer.com Works</button>
    </div>
    <div class="reviews">
        <h2 class="clientreviews">What clients say</h2><hr>
        <div class="testimonial-container">
            <button class="arrow arrow-left" onclick="prevReview()">&#9664;</button>
            <p class="testimonial" id="testimonial-text"></p>
            <div class="client-info">
                <img id="client-img" src="" alt="Client">
                <p class="client-name" id="client-name"></p>
                <p class="client-role" id="client-role"></p>
            </div>
            <button class="arrow arrow-right" onclick="nextReview()">&#9654;</button>
        </div>
    </div>

    <script>
        const testimonials = [
            { text: "Lancer helped us find an amazing transcriptionist. She is fast, accurate, and affordable!", name: "Ed Bagley", role: "Director of Product Marketing, O.C. Tanner Company", image: "https://randomuser.me/api/portraits/men/1.jpg" },
            { text: "The service was exceptional! Highly recommend Lancer for any project needs.", name: "Jane Doe", role: "HR Manager, ABC Corp", image: "https://randomuser.me/api/portraits/women/2.jpg" },
            { text: "Fast delivery and great quality. Lancer exceeded our expectations!", name: "John Smith", role: "CEO, XYZ Ltd", image: "https://randomuser.me/api/portraits/men/3.jpg" }
        ];
        let currentIndex = 0;
        function updateTestimonial() {
            document.getElementById('testimonial-text').textContent = testimonials[currentIndex].text;
            document.getElementById('client-name').textContent = testimonials[currentIndex].name;
            document.getElementById('client-role').textContent = testimonials[currentIndex].role;
            document.getElementById('client-img').src = testimonials[currentIndex].image;
        }
        function nextReview() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateTestimonial();
        }
        function prevReview() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonial();
        }
        setInterval(nextReview, 5000);
        updateTestimonial();
    </script>

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

    <script type="module" src="home.js"></script>
</body>
</html>
