<?php
require 'includes/common.php';

if(isset($_SESSION['id'])) {
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
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="text/External-css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="content">
            <div id="banner_image">
                <div class="container">
                    <center>
                    <div id="banner_content">
                        <h1>IPHONE ONLINE STORE</h1><br>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>                  
                        </div>
                    </center>
                       </div>
                     </div>
            
             <div class="row_style">
                <div class="container">
                   <div class="col-md-4 col-xs-6" class="column_style">
                       <a href="products.phpl" class="thumbnail"><img src="images/hello1 (1).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1><center><a href="products.php">Iphone XR</a></center></h1>
                            </div>
                    </div>
                     <div class="col-md-4 col-xs-6" class="column_style">
                         <a href="products.php" class="thumbnail"><img src="images/hello1 (2).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1><center><a href='products.php'> Vivo</a></center></h1>
                            </div>
                    </div>
                     <div class="col-md-4 col-xs-6" class="column_style">
                         <a href="products.php" class="thumbnail"><img src="images/hello1 (3).jpg" alt="Mobile_phone"></a>
                            <div class="caption">
                                <h1><center><a href="products.php">Samsung S10</a></center></h1>
                            </div>
                    </div>
             </div>
             </div>
        </div><br><br>
        <?php
        include 'includes/footer.php';
        ?>
            
    </body>
</html>
