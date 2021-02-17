<?php
require 'includes/common.php';
if (!isset($_SESSION['id'])) {
    header('location: index.php');
}
$old_password = $_POST['old_password'];
$old_password = mysqli_real_escape_string($con, $old_password);
$old_password = MD5($old_password);

$new_password = $_POST['new_password'];
$new_password = mysqli_real_escape_string($con, $new_password);
$new_password = MD5($new_password);

$re_type_new_password = $_POST['re_type_new_password'];
$re_type_new_password = mysqli_real_escape_string($con, $re_type_new_password);
$re_type_new_password = MD5($re_type_new_password);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$original_password = $row['password'];

if ($new_password != $re_type_new_password) {
    echo 'password not matched' ;
} else {
    if ($old_password == $original_password) {
        $query = "UPDATE  users SET password = '" . $new_password . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
         echo 'Password Updated Successfully';
    } else
        echo 'Password not matched' ;
}
?>
