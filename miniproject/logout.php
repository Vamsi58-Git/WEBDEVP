<?php
session_start();

// Destroy current session (clears user login)
session_unset();
session_destroy();

// Start a new empty session (for guest)
session_start();

// Redirect to home.php (now as guest)
header('Location: home.php');
exit;
?>
