<?php
// Redirect logged-in users to home page
session_start();
if (isset($_SESSION['user_id'])) {
  header('Location: home.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login & Register</title>
  <link rel="stylesheet" href="auth.css" />
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .left-panel {
      width: 50%;
      background-color: #f4f4f4;
    }

    .left-panel img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .right-panel {
      width: 50%;
      padding: 80px 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .logo {
      display: flex;
      justify-content: left;
      align-items: left;
      margin-bottom: 20px;
    }

    .logo img {
      height: 90px;
      max-width: 150px;
      object-fit: contain;
    }

    .toggle-buttons {
      text-align: center;
      margin-bottom: 20px;
    }

    .toggle-buttons button {
      margin: 0 10px;
      padding: 10px 20px;
      font-weight: bold;
      cursor: pointer;
    }

    #login-form,
    #register-form {
      display: none;
    }

    .form-active {
      display: block !important;
    }

    form input {
      display: block;
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    form button {
      padding: 14px;
      width: 100%;
      margin-top: 10px;
      background: black;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .subtitle {
      color: #e74c3c;
      margin-bottom: 30px;
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      margin: 20px 0;
    }

    .divider hr {
      flex: 1;
      border: none;
      height: 1px;
      background-color: #ccc;
    }

    .divider span {
      padding: 0 10px;
      color: #888;
      font-size: 14px;
      white-space: nowrap;
    }

    .social-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .social-buttons button {
      flex: 1;
      padding: 10px;
      border: none;
      cursor: pointer;
      color: #fff;
      font-weight: bold;
      border-radius: 4px;
    }

    button.google {
      background-color: #dd4b39;
    }

    button.facebook {
      background-color: #3b5998;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="left-panel">
      <img src="auth-image.jpg" alt="Auth Side Image" />
    </div>

    <div class="right-panel">
      <div class="logo">
        <img src="logo.png" alt="Logo" />
      </div>

      <div class="toggle-buttons">
        <button onclick="showForm('login')">Login</button>
        <button onclick="showForm('register')">Register</button>
      </div>

      <!-- LOGIN FORM -->
      <form id="login-form" method="POST" action="login1.php">
        <h2>Welcome Back</h2>
        <p class="subtitle">Sign in to continue</p>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Sign In</button>
        <div class="divider"><hr><span>or</span><hr></div>
        <div class="social-buttons">
          <button class="google">Google</button>
          <button class="facebook">Facebook</button>
        </div>
      </form>

      <!-- REGISTER FORM -->
      <form id="register-form" method="POST" action="register.php">
        <h2>Create Account</h2>
        <p class="subtitle">Sign up to get started</p>
        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Sign Up</button>
        <div class="divider"><hr><span>or</span><hr></div>
        <div class="social-buttons">
          <button class="google">Google</button>
          <button class="facebook">Facebook</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Show login form by default on load
    window.onload = function () {
      showForm('login');
    };

    function showForm(form) {
      document.getElementById('login-form').classList.remove('form-active');
      document.getElementById('register-form').classList.remove('form-active');
      if (form === 'login') {
        document.getElementById('login-form').classList.add('form-active');
      } else {
        document.getElementById('register-form').classList.add('form-active');
      }
    }
  </script>

</body>
</html>
