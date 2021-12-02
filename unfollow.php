<?php
session_start();
include 'connect.php';



?>


<?php
$userlog = $_GET['userlog'];


$sql = "SELECT * FROM `follower` WHERE `sno` = '$userlog'";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
$profile_name = $row['user_id'];

}



$sql = "DELETE FROM `follower` WHERE `follower`.`sno` = $userlog";
$result = mysqli_query($conn , $sql);


header("Location: profile.php?userlog=$profile_name&from=unfollow");
exit;



?>