<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy check for username and password (replace with your own authentication logic)
    if ($username === "admin" && $password === "password123") {
        header("Location: admin-dashboard.html");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
