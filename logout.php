<?php
require 'includes/common.php';
if (!isset($_SESSION['id'])) {
    header('location: login.php');
}
else {
 session_destroy();
 header('location: index.php');
}
 ?>

