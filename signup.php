<?php
require 'includes/common.php';

if(isset($_SESSION['id'])){
header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="text/External-css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="row_style"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="row_style">
                    <img src="images/contact_us (2).png">
                </div>
                </div>
                <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <form method="post" action="signup_script.php">
                            <h2><b>SIGN UP</b></h2><br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group">                               
                                <input type="email" class="form-control" placeholder="Enter Your Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                            </div>
                            <div class="form-group">                              
                                <input type="password" class="form-control" placeholder="Enter your Password" pattern=".{5,}" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Enter Your Contact No.">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="Enter Your City Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Enter Your Adress">
                            </div>
                            <button class="btn btn-primary"><b>Submit</b></button>
                        </form>
                    </div>
            </div>
        </div><br><br><br>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
