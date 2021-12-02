<?php
session_start();
include 'connect.php';
$username =  $_SESSION['user_id'];


$blogid = $_GET['blogid'];


$sql12 = "SELECT * FROM `likeblog` WHERE `user_id` = '$username' AND `sno` = '$blogid'";
$result12 = mysqli_query($conn , $sql12);
$rowcount=mysqli_num_rows($result12);

while($row12 = mysqli_fetch_assoc($result12)){
$like_no = $row12['blog_id'];
}


$sql = "DELETE FROM `likeblog` WHERE `likeblog`.`sno` = $blogid";
$result = mysqli_query($conn , $sql);


header("Location: content.php?blogid=$like_no");
exit;




?>