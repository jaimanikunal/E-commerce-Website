<?php
require 'includes/common.php';
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
    <body style="padding-top: 20px;">
    <?php include 'includes/header.php'; 
    ?><br>   
    <div class="container">
     <div class="row">
        <div class="col-sm-10">
            <center><h1 class="title">Live Support</h1><br>
		  <h3>We'd Love To Help!</h3><br>
                  <h5>24 hours | 7 days a week | 365 days a year Live Technical Support</h5>
             <div>
             <p>Write Your Query Here, We Are happy To Help You.</p>
          </div>
        </div>
        <div class="col-sm-2">
            <img align="right" src="images/contact_us (1).png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Details</h2>
	               <address>
				    <p>West World</p>
				    <p>Sector-102A</p>
				    <p>New Palam Vihar</p>
				    <p>Gurugram</p>
				    <p>Phone:(+91)8953545784</p>
				    <p>Email: info@mobilestore.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                        <a href="http://www.facebook.com/estore" target="_blank"><img src="./images/fb.png" alt="fb logo" Class="Facebook"></a>
                        <a href="http://www.facebook.com/estore" target="_blank"><img src="./images/insta.jpg" alt="fb logo" Class="Facebook"></a>
               </div>
            </div>
        </div>
    </div>
    </div><br>
       <?php include 'includes/footer.php'; 
       ?>
    </body>
</html>
