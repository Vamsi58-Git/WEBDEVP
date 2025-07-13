<?php
session_start();
include 'db.php'; // This should define $conn using mysqli

// Redirect already logged-in users
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get email and password from form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify hashed password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: home.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <link rel="stylesheet" href="login1.css" />
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <img src="laptop-image.jpg" alt="Workspace" />
    </div>
    <div class="right-panel">
      <div class="logo">
        <img src="logo1.png" alt="App Logo" />
      </div>
      <h2>Perfect for Startups,<br>freelancers & companies.</h2>
      <p class="subtitle">Specially crafted for the people who care about design.</p>

      <!-- Show error message -->
      <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

      <form id="login-form" method="post" action="">
        <input type="email" id="email" name="email" placeholder="Email" required />
        <input type="password" id="password" name="password" placeholder="Password" required />
        <button type="submit">Log In</button>
        <div class="social">
          <div class="divider">
            <hr><span>or sign in with</span><hr>
          </div>
          <div class="social-buttons">
            <button class="google" type="button">G+ Google</button>
            <button class="facebook" type="button">Facebook</button>
          </div>
        </div>
      </form>

      <p style="text-align:center; margin-top: 15px;">
        Don't have an account? <a class="bottom-link" href="register.php">Sign up</a>
      </p>
    </div>
  </div>
  <script type="module" src="login1.js"></script>
</body>
</html>