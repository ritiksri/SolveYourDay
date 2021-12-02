<?php
session_start();
include 'connect.php';


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
    $username =  $_SESSION['user_id'];

    $blog_id = $_GET['blogid'];

$sql ="INSERT INTO `likeblog` (`blog_id`, `user_id`) VALUES ('$blog_id', '$username')";
$result = mysqli_query($conn , $sql);

    header("Location: content.php?blogid=$blog_id");
    exit;

}
else {
    header("Location: blog.php");
    exit;

}

?>