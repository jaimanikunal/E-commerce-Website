<?php
require 'includes/common.php';
if (!isset($_SESSION['id'])) {
    header('location: index.php');
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
        ?>
        <div class="row_style"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <form method="post" action="settings_script.php">
                        <h2>Change Password</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="old_password" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="new_password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="re_type_new_password" placeholder="Re type New Password">
                        </div>
                        <button class="btn btn-primary"><b>Change</b></button>
                    </form>                    
                </div>
            </div>
        </div><br><br><br><br>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
