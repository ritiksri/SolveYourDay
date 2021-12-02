<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content=" solveyourday - blog writing - blog sites - best blog sites">
        <meta name="description" content=" SolveYourDay is a public blogging and service providing site anyone can use it for free and also intract with other users of SOLVEYOURDAY">
       
    <script data-ad-client="ca-pub-4409248548545189" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SolveYourDay - Q/A</title>
    <link rel="icon" href="icon.png">
</head>
<style>

.tis-btn{
    border-radius: 4px;
    padding: 3px;
}
</style>

<body>
<?php
// for session
session_start();
// connect to db
include 'connect.php';
  include "nav.php";
?>

    <!-- HTML start -->
    <div class="container tis-footer my-4">

<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
        // echo ' <div class="my-4">

        // <form action="forum.php" method="POST">
        //     <div class="form-group">
        //         <label for="exampleInputEmail1">Short description of your Question :</label>
        //         <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required>
        //         <small id="emailHelp" class="form-text text-muted">Make title as short as possible</small>
        //     </div>
        //     <div class="form-group">
        //         <label for="exampleInputPassword1">Your Full Question :</label>
        //         <textarea type="password" class="form-control" id="exampleInputPassword1"
        //             name="content" required> </textarea>
        //     </div>

        //     <input type="text" hidden value = "'.$username.'" name= "username">


        //     <button type="submit" class="btn btn-success">Post</button>
        // </form>';
        }

        else{

          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Login To Start Discussion :(</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> ';
        }
   
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = $_POST['username'];

            $content=nl2br($content);

            $sql = "INSERT INTO `forum` ( `title`, `content`, `user_id`, `type`) VALUES ( '$title', '$content', '$user_id', '0')";
  
            $result = mysqli_query($conn, $sql);

            

          }

?>
   </div>
        <h3 class="text-center my-4">
            Recent Questions<small> - SolveYourDay</small>
        </h3>

<div class="container">

<?php


$sql = "SELECT * FROM `forum` ORDER BY forum_id DESC ";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $forum_id = $row['forum_id'];


echo '<div class="media mx-2 my-4">
<img src="user.jpg" width="60px" height="60px" class="mr-3 rounded-circle" alt="No Image" >
<div class="media-body">
  <h5 class="mt-0"><a href="contentforum.php?forumid=' . $forum_id . '" class="text-dark">' . $title . '</a></h5>
  ' . substr($content , 0, 150) . '... 
  <a href="contentforum.php?forumid=' . $forum_id . '">Read More :)</a>

  <a href="contentforum.php?forumid=' . $forum_id . '" class=" tis-btn btn-success mx-2">Reply</a>
  </div>
</div>';
}

?>

</div>
</div>
<!-- Footer -->
    <?php
include 'footer.php';
?>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/ea2dcc2855.js" crossorigin="anonymous"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>