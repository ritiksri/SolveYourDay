<!-- DELETE FROM `blogs` WHERE `blogs`.`blog_id` = 131 -->


<?php

session_start();

include "connect.php"; // Using database connection file here

$blogid = $_GET['blogid']; // get id through query string

$sql = "DELETE FROM `blogs` WHERE `blogs`.`blog_id` = $blogid";
$result = mysqli_query($conn , $sql);

header("Location: blog.php");
exit;




?>