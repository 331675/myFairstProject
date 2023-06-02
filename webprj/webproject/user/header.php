<?php 
    include 'db.php'; 
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book Shop</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <h1>Book Shop</h1>
                    <ul>
                        <li><a href="home.php" class="">Home</a></li>
                        <?php if(isset($_SESSION['user_id'])) { ?>
                            <li><a href="cart.php" class="">Cart</a></li>
                            <li><a href="logout.php" class="">Log out</a></li>
                        <?php }else { ?>
                            <li><a href="index.php" class="">Login</a></li>
                            <li><a href="register.php" class="">Register</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>