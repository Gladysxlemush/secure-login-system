<?php
$host = "db";
$user = "user";
$pass = "userpass";
$db   = "secure_login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

