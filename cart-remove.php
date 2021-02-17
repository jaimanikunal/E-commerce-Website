<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $items_id = $_GET["id"];
    $user_id = $_SESSION['id'];
    $query = "DELETE FROM users_items WHERE items_id='$items_id' AND user_id='$user_id' ";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location: cart.php");
}
?>


