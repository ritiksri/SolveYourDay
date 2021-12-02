<?php

include 'connect.php';


session_start();
$q = $_GET['q'];
$answer = $_GET['answer'];






if(isset($_SESSION['admin_name']) && $_GET['q'] == 1){
   
    $_SESSION['q1'] = $answer;

    header("Location: gamebd.php");
    exit;

}
if(isset($_SESSION['admin_name']) && $_GET['q'] == 2){
   
    $_SESSION['q2'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 3){
   
    $_SESSION['q3'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 4){
   
    $_SESSION['q4'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 5){
   
    $_SESSION['q5'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 6){
   
    $_SESSION['q6'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 7){
   
    $_SESSION['q7'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 8){
   
    $_SESSION['q8'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 9){
   
    $_SESSION['q9'] = $answer;

    header("Location: gamebd.php");
    exit;

}if(isset($_SESSION['admin_name']) && $_GET['q'] == 10){
   
    $_SESSION['q10'] = $answer;

    header("Location: gamebd.php");
    exit;

}




if(isset($_SESSION['admin_name']) && isset($_SESSION['q10']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

    $admin_name = $_POST['admin_post_name'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $game_no = $_POST['game_no'];

    $sql = "INSERT INTO `game_admin` (`name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `sno`, `game_no`) VALUES ('$admin_name', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', NULL, '$game_no');";
  
    $result = mysqli_query($conn, $sql);

    $_SESSION['answer'] = "recorded";






    header("Location: gamebd.php");
    exit;
}





?>





<!-- 
SELECT * FROM `game_admin` WHERE `name` LIKE 'ffe' AND `q1` = 1 AND `q2` = 1 AND `q3` = 1 AND `q4` = 1 AND `q5` = 1 AND `q6` = 1 AND `q7` = 1 AND `q8` = 1 AND `q9` = 1 AND `q10` = 1 -->