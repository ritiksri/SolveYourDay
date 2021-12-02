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
    <title>SolveYourDay - Blog</title>
</head>
<style>
    body {
        color: white;
    }
    
    .body-tis {
        background-color: rgb(0 0 0 / 64%);
        padding: 10px;
        border-radius: 60px;
    }
</style>

<body style="background-image: url('back.jpg');">
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
// for session
session_start();
// connect to db
include 'connect.php';
  include "nav.php";
?>


        <!-- HTML start -->
        <div class="container tis-footer my-2 mx-2 ">

            <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
        // echo ' <div class="my-4">

        // <form action="blog.php" method="POST">
        //     <div class="form-group">
        //         <label for="exampleInputEmail1">Title of Article/Blog</label>
        //         <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required>
        //         <small id="emailHelp" class="form-text text-muted">Make title as short as possible</small>
        //     </div>
        //     <div class="form-group">
        //         <label for="exampleInputPassword1">Content :)</label>
        //         <textarea class="form-control"
        //             name="content" required> </textarea>
        //     </div>

        //     <input type="text" hidden value = "'.$username.'" name= "username">


        //     <button type="submit" class="btn btn-success">Post</button>
        // </form>';
        }

        else{

          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Login To Post Your Content :(</strong> 
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

            $sql = "INSERT INTO `blogs` ( `title`, `content`, `user_id`,  `content_id`) VALUES ( '$title', '$content', '$user_id', '1');";
  
            $result = mysqli_query($conn, $sql);

            if ($result == true) {
                echo '<div class="alert alert-success my-2 " role="alert">
                <strong>Select image related to Post <small>(Required)</small></strong><div class="container my-1">
                <form action="upload.php?imgid='. $title .'" method="post" enctype="multipart/form-data">
                <div class="form-group">
          <input type="file" name="fileToUpload" id="fileToUpload" class="form-control btn-success " required>
          </div>
          <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
          
          
        </form>
        </div>
               
              </div>';
        
            }

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
        <h3 class="text-center my-1">
            Recent Blogs - SolveYourDay
        </h3>

        <div class=" container">
            <div class="row container">
                <?php


$sql = "SELECT * FROM `blogs` ORDER BY blog_id DESC";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $blog_id = $row['blog_id'];


echo '

<div class="card mx-4 my-3 body-tis" style="width: 18rem;">
  
  <img src="image/'.$title.'.jpg" width="" height="150px" class="rounded-pill" alt="No Image" >
  <div class="card-body">
  <h4 class="card-title text-center"><a href="content.php?blogid=' . $blog_id . '" class="text-light ">' . $title . '</a></h4>
 
     <hr style=" background-color: rgb(136, 136, 136);">
      <p class="card-text text-center" style="color: rgb(211, 211, 211);">' . substr($content , 0, 250) . '...
        <br>
        <br>
      <a href="content.php?blogid=' . $blog_id . '" class="text-warning">Read More&gt;</a>
    </p><hr style=" background-color: rgb(136, 136, 136);">
  </div>
</div>


';

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
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
            </script>

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>