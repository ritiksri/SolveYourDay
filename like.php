<?php
session_start();
include 'connect.php';


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
    $username =  $_SESSION['user_id'];

    $quote_id = $_GET['quoteid'];

$sql ="INSERT INTO `likedb` (`quote_id`, `user_id`) VALUES ('$quote_id', '$username')";
$result = mysqli_query($conn , $sql);

    header("Location: quotes.php#$quote_id");
    exit;

}
else {
    header("Location: quotes.php");
    exit;

}

?>