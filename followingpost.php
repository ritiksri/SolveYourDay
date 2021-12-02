<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>SolveYourDay - Quotes</title>
  </head>
  <body>
    <?php
    // for session
session_start();
    include 'nav.php';
    include 'connect.php';
    ?>
<div class="container my-4">





<div class="row">

<?php

$userlog = $_GET['userlog'];

$sql1 = "SELECT * FROM `follower` WHERE `follower_id` = '$userlog'";

$result1 = mysqli_query($conn , $sql1);

while ($row1 = mysqli_fetch_assoc($result1)){

$user_id = $row1['user_id'];


$sql = "SELECT * FROM `blogs` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $blog_id = $row['blog_id'];
    


echo '<div class="card mx-auto my-4" style="width: 20rem;">
<img src="image/'.$blog_id.'.jpg" height="300px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title"> <a href="content.php?blogid='.$blog_id.'" class="text-dark">'.$title.'</a></h5>
  
  <p class="card-text">'.substr($content , 0, 250).'... <a href="content.php?blogid='.$blog_id.'">Read More</a></p>
  <!-- <a href="#" class="btn btn-primary">Go To Post</a> -->
</div>
</div>';


}


$sql = "SELECT * FROM `quotes` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn , $sql);
// echo var_dump($result);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $user_quote = $row['user_id'];
    $quote_id = $row['quote_id'];
   


echo '<div class="card mx-auto my-4" style="width: 20rem;">
<img src="imagequotes/'.$quote_id.'.jpg" height="300px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">'.$title.'</h5>
  <small>Posted By : <a href="profile.php?userlog='. $user_quote .'&from=nooneknows" > '. $user_quote .'</a></small>
  <p class="card-text">'.substr($content , 0, 80).'... <a href="quotecontent.php?quoteid='.$quote_id.'">Read More</a></p>
  <!-- <a href="#" class="btn btn-primary">Go To Post</a> -->
</div>
</div>';

}




}
?>





</div>
</div>
</div>



    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
<!-- Font Awesome -->
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