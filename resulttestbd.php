<?php
include 'connect.php';

$sql1 = "SELECT * FROM `game_player` WHERE `game_admin` LIKE '17'";
$result1 = mysqli_query($conn , $sql1);
while ($row = mysqli_fetch_assoc($result1)) {
    $sno = $row['sno'];
    $q1 = $row['q1'];
    $q2 = $row['q2'];
    $q3 = $row['q3'];
    $q4 = $row['q4'];

echo $q1;
echo $q2;
echo $q3;
echo $q4;


}




?>