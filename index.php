<?php
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true) {
    header('Location: login.php');
    exit();
}

$title = 'TAMPILAN LOGIN';
include_once 'koneksi.php';
include_once 'header.php';

// You can customize the content of your dashboard here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILAN LOGIN</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h2>
    <div class="button">
        <button type="button">
            <a href="logout.php" style="text-decoration: none;">Logout</a>
        </button>
    </div>
</body>

</html>