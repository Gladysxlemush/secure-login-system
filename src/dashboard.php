<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<h2>🎉 Welcome!</h2>
<p>You are now logged in securely.</p>
<a href="logout.php">Logout</a>
