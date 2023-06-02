<?php 
    include '../user/db.php';
    ob_start();
    session_start();
    if(!isset($_SESSION['is_admin'])) { 
        header("Location: ../user/index.php");
    }
    // if(!isset($_SESSION['is_admin']) || $_SESSION['as_admin'] != true) { 
    //     header("Location: ../user/index.php");
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book Shop - Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <h1>Book Shop</h1>
                    <form action="#" method="get">
                        <input type="search" placeholder="Search">
                    </form>
                    <a href="../user/logout.php">Sign Out</a>
                </nav>
            </div>
        </header>