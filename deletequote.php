<!-- DELETE FROM `blogs` WHERE `blogs`.`blog_id` = 131 -->


<?php

session_start();

include "connect.php"; // Using database connection file here

$quoteid = $_GET['quoteid']; // get id through query string

$sql = "DELETE FROM `quotes` WHERE `quotes`.`quote_id` = $quoteid";
$result = mysqli_query($conn , $sql);

header("Location: quotes.php");
exit;




?>