<?php

include 'connect.php';


session_start();
$q = $_GET['q'];
$answer = $_GET['answer'];
$player_name_answer = $_SESSION["player_name"];
$owner_sno = $_SESSION['owner_sno'];




if(isset($_SESSION['player_name']) && $_GET['q'] == 1){
   
    $_SESSION['q1'] = $answer;

    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q1` = '$answer'";
$result1 = mysqli_query($conn , $sql1);
$row = mysqli_fetch_assoc($result1);
if($row > 1){
echo "ans yes";

$sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
  
    $result = mysqli_query($conn, $sql);
    header("Location: game_playerbd.php");
    exit;
}
else{
    header("Location: game_playerbd.php");
    exit;
}
}
if(isset($_SESSION['player_name']) && $_GET['q'] == 2){
   
    $_SESSION['q2'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q2` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 3){
   
    $_SESSION['q3'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q3` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 4){
   
    $_SESSION['q4'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q4` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 5){
   
    $_SESSION['q5'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q5` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 6){
   
    $_SESSION['q6'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q6` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 7){
   
    $_SESSION['q7'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q7` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 8){
   
    $_SESSION['q8'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q8` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 9){
   
    $_SESSION['q9'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q9` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        header("Location: game_playerbd.php");
        exit;
    }

}if(isset($_SESSION['player_name']) && $_GET['q'] == 10){
   
    $_SESSION['q10'] = $answer;
    $sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$owner_sno' AND `q10` = '$answer'";
    $result1 = mysqli_query($conn , $sql1);
    $row = mysqli_fetch_assoc($result1);
    if($row > 1){
    echo "ans yes";
    
    $sql = "INSERT INTO `game_result` (`sno`, `admin_sno`, `Right Answer`, `player_name`, `game_no`) VALUES (NULL, '$owner_sno', '1', '$player_name_answer', '1');";
      
        $result = mysqli_query($conn, $sql);
      
      
      
      
      
        $sql2 = "SELECT * FROM `game_result` WHERE `admin_sno` = '$owner_sno' AND `Right Answer` = 1 AND `player_name` LIKE '$player_name_answer'";
        $result2 = mysqli_query($conn , $sql2);
        $rowcount=mysqli_num_rows($result2);
        $row = mysqli_fetch_assoc($result2);
      
      
      
      
      echo $rowcount;
      $_SESSION['result_player'] = $rowcount;
      
      $sql12 = "INSERT INTO `game_result_final` (`sno`, `game_no`, `score`, `player_name`, `admin_sno`) VALUES (NULL, '1', '$rowcount', '$player_name_answer', '$owner_sno');";
      
      $result12 = mysqli_query($conn, $sql12);
      
      
      
        header("Location: game_playerbd.php");
        exit;
    }
    else{
        
        $sql2 = "SELECT * FROM `game_result` WHERE `admin_sno` = '$owner_sno' AND `Right Answer` = 1 AND `player_name` LIKE '$player_name_answer'";
        $result2 = mysqli_query($conn , $sql2);
        $rowcount=mysqli_num_rows($result2);
        $row = mysqli_fetch_assoc($result2);
      
      
      
      
      echo $rowcount;
      $_SESSION['result_player'] = $rowcount;

      $sql12 = "INSERT INTO `game_result_final` (`sno`, `game_no`, `score`, `player_name`, `admin_sno`) VALUES (NULL, '1', '$rowcount', '$player_name_answer', '$owner_sno');";
      
      $result12 = mysqli_query($conn, $sql12);
      header("Location: game_playerbd.php");
        exit;
    }

}








?>




<!-- SELECT * FROM `game_result` WHERE `admin_sno` = 6 AND `Right Answer` = 1 AND `player_name` LIKE 'qwer' -->