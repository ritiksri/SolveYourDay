<?php
session_start();
include 'connect.php';



?>


<?php
$userlog = $_GET['userlog'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
    $username =  $_SESSION['user_id'];


    $extsql = "Select * from `follower` where `user_id` ='$userlog' AND `follower_id` ='$username' ";
  $result = mysqli_query($conn, $extsql);
  $numrows = mysqli_num_rows($result);
  if ($numrows > 0){
    $userlog = $_GET['userlog'];
    header("Location: profile.php?userlog=$userlog&from=al");
    exit;

  }
  else{

    if($userlog == $username){

      header("Location: profile.php?userlog=$userlog&from=same");
      exit;


    }
    
    $sql = "INSERT INTO `follower` (`user_id`, `follower_id`) VALUES ('$userlog', '$username')";

    $result = mysqli_query($conn , $sql);

    header("Location: profile.php?userlog=$userlog&from=done");
    exit;

}



}
else{
    $userlog = $_GET['userlog'];
    header("Location: profile.php?userlog=$userlog&from=without");
    exit;


}


?>