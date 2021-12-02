<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>Search - SolveYourDay</title>
  </head>
  <body>

<?php
session_start();
include 'nav.php';
require 'connect.php';
?>

    <div class="container">
    <h2 class="text-dark my-3"><b>
    Your Posts : <?php echo
    $_GET['userlog'] ;
    ?>
    </b></h2>

<div class="my-3">

<h4 class="text-dark my-3"><b>
    Your Posts to "Blogs"
    </b></h4>
<?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `blogs` WHERE `user_id` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {

    if ($row > 0) {
        $title = $row['title'];
        $content = $row['content'];
        $user_id = $row['user_id'];
        $blog_id = $row['blog_id'];
    }
    
    


echo '<div class="media my-3">
<img src="image/'.$title.'.jpg" width="60px" height="60px" class="mr-3 rounded-circle" alt="No Image" >
<div class="media-body">
  <h5 class="mt-0"> <a href="content.php?blogid=' . $blog_id . '" class="text-dark"> '. $title .'</a></h5><a href="content.php?blogid=' . $blog_id . '" class="text-dark">
  '. substr($content , 0, 200) .'
  </a></div>
</div>
';


}


?>


<h4 class="text-dark my-3"><b>
    Your Posts to "Quotes"
    </b></h4>

    <div class="row">
    <?php


$sql = "SELECT * FROM `quotes` ORDER BY quote_id DESC";
$result = mysqli_query($conn , $sql);
// echo var_dump($result);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $user_quote = $row['user_id'];
    $quote_id = $row['quote_id'];
   


echo '

<div class="card mx-auto my-2" style="width: 120px;">
<img src="imagequotes/'.$quote_id.'.jpg" height="120px" class="card-img-top" alt="...">



</div>';
}

?>









</div>
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
<?php
include 'footer.php';
?>
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