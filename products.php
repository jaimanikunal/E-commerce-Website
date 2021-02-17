<?php
require 'includes/common.php';

if(!isset($_SESSION['id'])){
    header('location: signup.php');
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
        <title>Lifestyle Store Product Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="text/External-css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="row_style"></div>
        <div class="container">
            <div class="jumbotron">
                <center><h1>Welcome to our Online Mobile's Store</h1>
                <p>We have the Latest Mobile at lowest cost, we have all in one place.</p></center>
            </div>
            <div class="row">
                <div class="text-center">
                    <div class="col-md-4 col-xs-6" class="column_style">
                        <a href="#" class="thumbnail"><img src="images/hello1 (4).jpg" alt="Mobile_phone"></a>
                        <div class="caption">
                                <h1>Huawei P40 Pro</h1>
                                <h4>Price Rs - 82,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                                if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                    </div>
                    <div class="col-md-4 col-xs-6" class="column_style">
                        <a href="#" class="thumbnail"><img src="images/hello1 (5).jpg" alt="Mobile_phones"></a>
                            <div class="caption">
                                <h1>Samsung S20 Ultra</h1>
                                <h4>Price Rs - 86,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                            } else {
                                                if (check_if_added_to_cart(2)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                    </div>
                    <div class="col-md-4 col-xs-6" class="column_style">
                        <a href="#" class="thumbnail"><img src="images/hello1 (6).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Iphone 11 Pro</h1>
                                <h4>Price Rs- 94,500</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                    </div>
                </div>
              </div><br><br>
              <div class="row">
                  <div class="text-center">
                    <div class="col-md-4 col-xs-6" class="column_style">
                        <a href="#" class="thumbnail"><img src="images/hello1 (7).jpg" alt="Mobile_phone"></a>
                        <div class="caption"><center>
                                <h1>Moto Razer 2019</h1>
                                <h4>Price Rs- 1,46,000</h4></center>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                    </div>
                <div class="text-center">
                     <div class="col-md-4 col-xs-6" class="column_style">
                         <a href="#" class="thumbnail"><img src="images/hello1 (8).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>One Plus 7 Pro</h1>
                                <h4>Price Rs- 46,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                    </div>
                </div>
                <div class="text-center">
                     <div class="col-md-4 col-xs-6" class="column_style">
                         <a href="#" class="thumbnail"><img src="images/hello1 (9).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>One Plus 8 Pro </h1>
                                <h4>Price Rs- 62,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(14)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                     </div>
                </div>
                  </div>
              </div><br><br>
              <div class="row">
                <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (10).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Asus AUG</h1>
                                <h4>Price Rs - 19,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(7)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                     </div>
                </div>
                <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (1).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Iphone XR</h1>
                                <h4>Price Rs- 33,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(8)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                     </div>
                </div>
                 <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (11).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Real Me</h1>
                                <h4>Price Rs- 12,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(9)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                </div>
                </div>
                </div><br><br>
                <div class="row">
                <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (2).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Vivo</h1>
                                <h4>Price Rs- 13,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(10)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                </div>
                </div>
                <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (12).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Redmi Note 5</h1>
                                <h4>Price Rs- 10,000</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(11)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                </div>
                </div>
                <div class="text-center">
                <div class="col-md-4 col-xs-6" class="column_style">
                    <a href="#" class="thumbnail"><img src="images/hello1 (3).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1>Samsung S10 Lite</h1>
                                <h4>Price Rs- 43,999</h4>
                                 <?php if (!isset($_SESSION['id'])) { ?>
                                <p><a href= "login.php" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                     <?php
                                            } else {
                                                if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                </div>
                </div>
        </div><br>
        <div class="row_style"></div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>