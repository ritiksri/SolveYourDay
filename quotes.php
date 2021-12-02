<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content=" solveyourday - blog writing - blog sites - best blog sites">
        <meta name="description" content=" SolveYourDay is a public blog and service providing site anyone can use it for free and also intract with other users of SOLVEYOURDAY">
        <script data-ad-client="ca-pub-4409248548545189" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>SolveYourDay - Quotes</title>
<style>

body {
      
    }
    
    .body-tis {
        background-color: rgb(0 0 0 / 64%);
        padding: 10px;
        border-radius: 10px;
    }

@media only screen and (min-width: 600px) {

.desktop-tis{
width: 20rem;

}


}

</style>

  </head>
  <body style="font-family: 'Patrick Hand', cursive; background-image: url('back.jpg');">
    <?php
    // for session
session_start();
    include 'nav.php';
    include 'connect.php';
    ?>
<div class="container my-4">


<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
       
        }

        else{

          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Login To Post Your Content</strong> 
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

            $sql = "INSERT INTO `quotes` ( `title`, `content`, `user_id`) VALUES ( '$title', '$content', '$user_id');";
  
            $result = mysqli_query($conn, $sql);

            if ($result == true) {



              $sql = "SELECT * FROM `quotes` where `title` = '$title'";
              $result = mysqli_query($conn , $sql);     
              while ($row = mysqli_fetch_assoc($result)) {
              $quote_id = $row['quote_id'];



              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Select image related to Post <small>(Required)</small></strong><div class="container my-1">
              <form action="uploadquotes.php?imgid='. $quote_id .'" method="post" enctype="multipart/form-data">
              <div class="form-group">
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control btn-success ">
        </div>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
        
        
      </form>
      </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
      
          
          
          }
          
                   
             
        }

    }
?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>




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



echo '<div class="card mx-auto my-2 desktop-tis body-tis" id="'.$quote_id.'">
<small class="ml-2 my-2"><img src="imageuser/'.$user_quote.'.jpg" width ="30px" height ="30px" class="mr-2 rounded-circle" alt="No Profile Picture"><a href="profile.php?userlog='. $user_quote .'&from=nooneknows" class="text-light" >'. $user_quote .'</a></small>
<a href="quotecontent.php?quoteid='.$quote_id.'"><img src="imagequotes/'.$quote_id.'.jpg"  class="card-img-top" alt="..."></a>
<div class="card-body py-2 px-1">
<nav class="nav ">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  $username =  $_SESSION['user_id'];


$sql12 = "SELECT * FROM `likedb` WHERE `user_id` = '$username' AND `quote_id` = '$quote_id'";
$result12 = mysqli_query($conn , $sql12);
$rowcount=mysqli_num_rows($result12);

while($row12 = mysqli_fetch_assoc($result12)){
$like_no = $row12['sno'];
}

if($rowcount > 0){
  echo'
  <a class="nav-link my-0 py-0 px-1" href="unlike.php?quoteid='.$like_no.'">
  <img src="liked.png" style="filter: invert(1);"  width="30px" height="30px" alt=""></a>';
}

else{





  echo'
    <a class="nav-link my-0 py-0 px-1"  href="like.php?quoteid='.$quote_id.'">
    <img src="like.png" style="filter: invert(100%);" width="30px" height="30px" alt=""></a>';
  
  }

}
else{





echo'
  <a data-toggle="modal" data-target="#loginModal">  <img src="like.png" style="filter: invert(100%);"   width="30px" height="30px" alt=""></a>';

}

  echo '<a class="nav-link my-0 py-0 px-1" href="quotecontent.php?quoteid='.$quote_id.'"><img src="comment.png" style="filter: invert(100%);"  width="30px" height="30px" alt=""></a>
  <a href="quotecontent.php?quoteid='.$quote_id.'" class="text-dark"><img src="share.png" style="filter: invert(100%);"  width="30px" height="30px" alt=""></a>
  
</nav>';









if($row > 0){


$sql13 = "SELECT * FROM `likedb` WHERE `quote_id` = '$quote_id'";
$result13 = mysqli_query($conn , $sql13);
$rowcount1=mysqli_num_rows($result13);




echo' <a href="quotecontent.php?quoteid='.$quote_id.'" class="text-light">
<small class="my-0 ml-2">Liked by '.$rowcount1.'  users!</small></a>';



}
echo'
  <h6 class="card-title"> <a href="profile.php?userlog='. $user_quote .'&from=nooneknows" class="text-light ml-1" >'. $user_quote .'</a> <small class="ml-1 my-0"><a href="quotecontent.php?quoteid='.$quote_id.'" class="text-light">'.$title.'</a></small></h6>
  <a href="quotecontent.php?quoteid='.$quote_id.'" class="text-light"><small class="my-0 ml-2">View All Comments...</small></a>
</div>
</div>';
}

?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>




</div>
</div>
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