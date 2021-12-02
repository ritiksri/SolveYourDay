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
    <script data-ad-client="ca-pub-4409248548545189" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>

    <?php

   $blog_id = $_GET['blogid'];

    $sql = "SELECT * FROM `blogs` where `blog_id` = '$blog_id'";
    $result = mysqli_query($conn , $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    echo $title;

     }
    ?> - SolveYourDay</title>
  </head>
  <body >
  <?php
  include "nav.php";
  ?>
<div class="container my-4 tis-footer" >



<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];

      $blog_id = $_GET['blogid'];

      $sql = "SELECT * FROM `blogs` where `user_id` = '$username' AND `blog_id` = '$blog_id'";
       $result = mysqli_query($conn , $sql);
      $row = mysqli_fetch_assoc($result);
       if($row > 0){
 
        echo ' <div class="my-4">
        <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#editcontent">Edit Content</button>
        <a href="delete.php?blogid='.$blog_id.'" class="btn btn-danger mx-2">Delete Content</a>
    ';

}

        
        }

        ?>
        
        </div>

        <!-- Modal -->
<div class="modal fade" id="editcontent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php

$blog_id = $_GET['blogid'];

$sql = "SELECT * FROM `blogs` where `blog_id` = '$blog_id'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    // $content=nl2br($content);
}

echo  '<form action = "content.php?blogid='.$blog_id.'&editcommand=postcontent" method = "POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Edit Title <small> (Image may removed - In that case delete post and then repost) </small></label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name = "edittitle" value="'.$title.'">  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Edit Content <small class="text-danger">( Don Not Remove Unwanted characters*)</small></label>
    <textarea class="form-control" aria-describedby="emailHelp" name = "editcontent" rows="10">'.$content.'</textarea>
  </div>
  
  <button type="submit" class="btn btn-success">Edit</button>
</form>'

?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Dismiss</button>
        
      </div>
    </div>
  </div>
</div>

</div>

<div class="container my-4 tis-footer" >
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $edit_command = $_GET['editcommand'];
  if($edit_command == 'postcontent'){
  $edittitle = $_POST['edittitle'];
  $editcontent = $_POST['editcontent'];
  // $editcontent=nl2br($editcontent);


  $sql = "UPDATE `blogs` SET `title` = '$edittitle', `content` = ' $editcontent' WHERE `blogs`.`blog_id` = $blog_id;";
  
  $result = mysqli_query($conn, $sql);

  if($result == true){
    echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Edited!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> ';



  }
}


}


?>



<?php

$blog_id = $_GET['blogid'];

$sql = "SELECT * FROM `blogs` where `blog_id` = '$blog_id'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $blog_id = $row['blog_id'];
    $user_id = $row['user_id'];


echo '<h4 class="text-center ">
'. $title .'

</h4>
<small > <p class="text-center my-2"> Posted By : <strong><a href="profile.php?userlog='. $user_id .'&from=nooneknows" > '. $user_id .'</a></strong></p></small>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="image/'.$title.'.jpg" class="d-block w-100" alt=" problem in image of  '.$title.'" height="300px" >
    </div>
  </div>
</div>
<a href="follow.php?userlog='. $user_id .'" class="text-light btn-primary btn my-2" >Follow User !</a>
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

<p class="my-2">
'. $content .'
</p><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
';

}
?>














<nav class="nav ">



<?php








if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  $username =  $_SESSION['user_id'];


$sql12 = "SELECT * FROM `likeblog` WHERE `user_id` = '$username' AND `blog_id` = '$blog_id'";
$result12 = mysqli_query($conn , $sql12);
$rowcount=mysqli_num_rows($result12);

while($row12 = mysqli_fetch_assoc($result12)){
$like_no = $row12['sno'];
}

if($rowcount > 0){
  echo'
  <a class="nav-link my-0 py-0 px-1" href="unlikeblog.php?blogid='.$like_no.'">
  <img src="liked.png"  width="30px" height="30px" alt=""></a>';
}

else{





  echo'
    <a class="nav-link my-0 py-0 px-1" href="likeblog.php?blogid='.$blog_id.'">
    <img src="like.png"  width="30px" height="30px" alt=""></a>';
  
  }

}
else{





echo'
  <a data-toggle="modal" data-target="#loginModal">  <img src="like.png"  width="30px" height="30px" alt=""></a>';

}

  echo '
  <a class="nav-link my-0 py-0 px-1" data-toggle="modal" data-target="#sharemodal"><img src="share.png"  width="30px" height="30px" alt=""></a>
  
</nav>';




$sql13 = "SELECT * FROM `likeblog` WHERE `blog_id` = '$blog_id'";
$result13 = mysqli_query($conn , $sql13);
$rowcount1=mysqli_num_rows($result13);




echo'  <a data-toggle="modal" data-target="#likelist">
<small class="my-0 ml-2">Liked by '.$rowcount1.'  users!</small></a>';







?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $edit_command = $_GET['editcommand'];
  if($edit_command == 'postcomment'){
  $blog_comment_id = $_POST['blog_id'];
  $content = $_POST['comment'];
  $user_id = $_POST['username'];

  $content=nl2br($content);


  $sql = "INSERT INTO `blogcomment` (`blog_id`, `user_id`, `content`) VALUES ('$blog_comment_id', '$user_id', '$content')";

  $result = mysqli_query($conn, $sql);

  

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

<?php
$blog_id = $_GET['blogid'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
echo 
'<form action="content.php?blogid='.$blog_id.'&editcommand=postcomment" method="post">
<div class="form-group">
    <textarea name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  
  <input type="text" hidden value = "'.$username.'" name= "username">
            <input type="text" hidden value = "'.$blog_id.'" name= "blog_id">

  <button class="btn btn-success">Post Comment</button>
</form>';
}

?><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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


<h4 class="my-2">
Comments...
</h4>

<?php

$quote_id = $_GET['blogid'];

$sql11 = "SELECT * FROM `blogcomment` WHERE `blog_id` = '$blog_id' ORDER BY sno DESC";
$result11 = mysqli_query($conn , $sql11);


while ($row11 = mysqli_fetch_assoc($result11)) {
  
    $content = $row11['content'];
    
    $user_id = $row11['user_id'];




echo '<div class="media mx-2 my-4"><a href="profile.php?userlog='. $user_id .'&from=nooneknows" class="text-dark" >
<img src="imageuser/'.$user_id.'.jpg" width ="30px" height ="30px" class="mr-2 rounded-circle" alt="No Profile Picture"></a>
<div class="media-body">
<p> <a href="profile.php?userlog='. $user_id .'&from=nooneknows" class="text-dark" > '. $user_id .' : </a><small> ' . $content . '</small>
 
  
  </p>
  
</div>
</div>
';

}

?>












<!-- Modal likelist-->
<div class="modal fade" id="likelist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editprofile">Liked users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php

$search =  $_GET['blogid'] ;

$sql = "SELECT * FROM `likeblog` WHERE `blog_id` = '$search'";
$result = mysqli_query($conn , $sql);
$rowcount=mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    $followers = $row['user_id'];
    
    echo  '
    <div class="media">
    <a href="profile.php?userlog='. $followers .'&from=nooneknows" class="text-dark"><img src="imageuser/'.$followers.'.jpg" class="mr-3 rounded-circle" alt="..." width="20px" height="20px" >
    </a><a href="profile.php?userlog='. $followers .'&from=nooneknows" class="text-dark">'.$followers.'</a> <div class="media-body "> 
        <h5 class="mt-0 mx-4"> 
        
        </h5></div></div> <hr> ';



}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
















<!-- Share Modal -->
<div class="modal fade" id="sharemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Copy The Post Link And Share</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       


       ?>

       <textarea name="" id="">http://solveyourday.com<?php
       
echo $_SERVER['REQUEST_URI'];

       ?></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
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