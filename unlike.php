<?php
session_start();
include 'connect.php';
$username =  $_SESSION['user_id'];


$quoteid = $_GET['quoteid'];


$sql12 = "SELECT * FROM `likedb` WHERE `user_id` = '$username' AND `sno` = '$quoteid'";
$result12 = mysqli_query($conn , $sql12);
$rowcount=mysqli_num_rows($result12);

while($row12 = mysqli_fetch_assoc($result12)){
$like_no = $row12['quote_id'];
}


$sql = "DELETE FROM `likedb` WHERE `likedb`.`sno` = $quoteid";
$result = mysqli_query($conn , $sql);


header("Location: quotes.php#$like_no");
exit;




?>