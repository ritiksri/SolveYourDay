<?php
// for session
session_start();
// connect to db
include 'connect.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>
    <?php

       $forum_id = $_GET['forumid'];

       $sql = "SELECT * FROM `forum` where `forum_id` = '$forum_id'";
       $result = mysqli_query($conn , $sql);
       while ($row = mysqli_fetch_assoc($result)) {
       $title = $row['title'];

       echo $title;

}

?> - SolveYourDay</title>
  </head>


  <body>
  <?php

  include "nav.php";
  ?>

<div class="container my-4 tis-footer" >


<?php

$forum_id = $_GET['forumid'];
// $_SESSION['forum_id'] = $_GET['forumid'];
// $forum_id = $_SESSION['forum_id'];
$sql = "SELECT * FROM `forum` where `forum_id` = '$forum_id'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $forum_id = $row['forum_id'];
    $user_id = $row['user_id'];



echo '<div class="jumbotron">
<h1 >"'.$title.'"</h1>
<p class="lead"><b>Description : </b>"'.$content.'"</p>
<hr class="my-4">
<p>Posted By : <b>"<a href="profile.php?userlog='. $user_id .'&from=nooneknows" > '. $user_id .'</a>"</b></p>
</div>
';

}

?>









<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
        echo ' <div class="my-4">

        <form action="contentforum.php?forumid='.$forum_id.'" method="POST">
            <div class="form-group">
                <label for="exampleInputPassword1">Reply This Question :</label>
                <textarea type="password" class="form-control" id="exampleInputPassword1"
                    name="content" required> </textarea>
            </div>

            <input type="text" hidden value = "'.$username.'" name= "username">
            <input type="text" hidden value = "'.$forum_id.'" name= "forum_id">


            <button type="submit" class="btn btn-success">Reply</button>
        </form>';
        }

        else{

          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Login To Reply :(</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> ';
        }
      

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $forumcomment_id = $_POST['forum_id'];
            $content = $_POST['content'];
            $user_id = $_POST['username'];

            $content=nl2br($content);

            $sql = "INSERT INTO `forumcomment` (`forum_id`, `content`, `user_id`) VALUES ( '$forumcomment_id', '$content', '$user_id');";
  
            $result = mysqli_query($conn, $sql);

            

          }

?>
 <h4 class=" my-4">
        Replies :
        </h3>

<?php

$forum_id = $_GET['forumid'];
// $_SESSION['forum_id'] = $_GET['forumid'];
// $forum_id = $_SESSION['forum_id'];
$sql = "SELECT * FROM `forumcomment` where `forum_id` = '$forum_id' ORDER BY comment_id DESC";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    // $title = $row['title'];
    $content = $row['content'];
    // $forum_id = $row['forum_id'];
    $user_id = $row['user_id'];




echo '<div class="media mx-2 my-4">
<img src="user.jpg" width="60px" height="60px" class="mr-3 rounded-circle" alt="No Image" >
<div class="media-body">
  <h6 class="mt-0"><small>Commented By : </small><a href="profile.php?userlog='. $user_id .'&from=nooneknows" > '. $user_id .'</a></h6>
  <p>
  ' . $content . '
  </p>
  
</div>
</div>
';

}

?>

</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
<?php
include "footer.php";

?><!-- Font Awesome -->
<script src="https://kit.fontawesome.com/ea2dcc2855.js" crossorigin="anonymous"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>