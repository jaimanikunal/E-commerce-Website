<?php

require 'includes/common.php';
if (!isset($_SESSION['id'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store Product Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="text/External-css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="row_style"></div>
        <div class="container">
            <center>
        <h2 style="font-family: roboto;"> Your Order placed Successfully.</h2><br>
        <h4> Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item. </h4>
        </center>
         </div>
        <?php
        include 'includes/footer.php';
        ?>
            </body>
</html>