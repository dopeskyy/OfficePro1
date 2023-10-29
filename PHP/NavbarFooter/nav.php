<?php
session_start(); // Start the PHP session

// Check if the user is signed in based on your session variable
$isSignedIn = isset($_SESSION['user_id']);

?>

<!-- Your HTML code -->
<link rel="stylesheet" href="../../CSS/mainstyles.css" />

<div id="nav">
    <div id="nav-wrapper">

        <img src="../../Photos/icons/logo.jpg" width="100" height="76" alt="This is a photo of OfficePro Supplies logo"
             style="cursor: pointer" onclick="window.location.href = '../pages/home.php'">

        <a href="../pages/home.php">Home</a>
        <a href="../pages/shop.php">Shop</a>
        <a href="../pages/faq.php">FAQ</a>
        <a href="../pages/aboutus.php">About Us</a>
        <a href="../../HTML/pages/contactus.html">Contact Us</a>

        <?php
        if ($isSignedIn) {
            echo '<a href="../handlers/profile.php">My Profile</a>';
            echo '<a href="../handlers/logout.php">Logout</a>';
        } else {
            echo '<a id="sr" href="../handlers/loginhandler.php">Sign In / Register</a>';
        }
        ?>


        <img id="icon3" src="../../Photos/icons/cart.png" width="25" height="25" alt="This is a photo of a cart"
             style="cursor: pointer" onclick="window.location.href = '../../HTML/pages/cart.html'">
    </div>
</div>
