<?php
// for session



// connect to db

include 'connect.php';

//  for singup 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['act'] == 2) {
  $name = $_POST["name"];
  $last_name = $_POST["last_name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pass = $_POST["password"];

  $hashed_password = password_hash($pass, PASSWORD_DEFAULT);


  $extsql = "Select * from `users` where `username` ='$username'";
  $result = mysqli_query($conn, $extsql);
  $numrows = mysqli_num_rows($result);
  if ($numrows > 0){
     echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
     <strong>Not Signed Up!</strong> Username Already Exists! Try Different
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>';
  }
  else{
 
      
  $sql = "INSERT INTO `users` ( `name`, `last_name`, `username`, `email`, `password`) VALUES ( '$name', '$last_name', '$username', '$email', '$hashed_password')";
  $result = mysqli_query($conn, $sql);




// $_FILES["fileToUpload"]["name"]

$id =  $username;
$target_dir = "imageuser/";
$target_file = $target_dir . basename( $id. ".jpg" );
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

$name = $_FILES["fileToUpload"]["name"];
echo $name;


  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

// header('Location: blog.php');

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


if($result == true){

  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Signed Up!</strong> Login To Continue !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}
       }
}
else{}


// For Login
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['act'] == 1) {
  $user_id = $_POST["loginusername"];
  $pass = $_POST["loginpassword"];
  

  $sql = "Select * from `users` where `username` ='$user_id' ";
   
     $result = mysqli_query($conn, $sql);
     $num = mysqli_num_rows($result);
     while ($row = mysqli_fetch_assoc($result)) {
      $username = $row['username'];
      $name_user = $row['name'];


      if(password_verify($pass, $row['password'])){
     
        
        // session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $username;
        $_SESSION['name_user'] = $name_user;

      
      //   echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      //   <strong>Logged In!  </strong> Welcome   "'  . $_SESSION['username'] . '"
      //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      //     <span aria-hidden="true">&times;</span>
      //   </button>
      // </div>';

    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
      <strong>incorrect! </strong> Username or Password
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
    }


     } 
    //  echo var_dump($num);
   

   





}










?>












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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" href="icon.png" alt="SYD">
        <title>SolveYourDay - Home</title>
    </head>
    <style>
        .tis-border {
            border-radius: 20px;
        }
    </style>

    <body style="background-image: url('back.jpg');">
        <?php
  include 'nav.php';
  
  ?>





            <div class="container my-4">

                <!-- image slider -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active border border-light rounded">
                            <img src="1.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item border border-light rounded">
                            <a href="blog.php" class="text-dark"> <img src="combo.jpg" class="d-block w-100" alt="..."> </a>
                        </div>
                        <div class="carousel-item border border-light rounded">
                            <a href="game.php" class="text-dark"> <img src="1.jpeg" class="d-block w-100" alt="..."> </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


                <!-- cards -->

                <div class="container my-4">
                    <div class="row ">


                    <div class="card mx-4 my-4 tis-border" style="width: 18rem;">
                            <a href="gamelist.php" class="text-dark"> <img src="games.jpg" class="card-img-top tis-border" alt="GAmes"> </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="gamelist.php" class="text-dark">Quiz - Games</a></h5>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="card-text text-center">A game is a structured form of play, usually undertaken for entertainment or fun, and sometimes used as an educational tool. </p>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="text-center"><a href="gamelist.php" class="btn btn-success">Play Games</a></p>
                            </div>
                        </div>
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

                        <div class="card mx-4 my-4 tis-border" style="width: 18rem;">
                            <a href="blog.php" class="text-dark"> <img src="blog.jpg" class="card-img-top tis-border" alt="blog"> </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Blogs </a></h5>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="card-text text-center">Blogging refers to writing, photography, and other media that's self-published online. Blogging started as an opportunity for individuals to write diary-style entries.</p>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="text-center"><a href="blog.php" class="btn btn-success">Explore Blogs</a></p>
                            </div>
                        </div>
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

                        <div class="card mx-4 my-4 tis-border" style="width: 18rem;">
                            <a href="quotes.php" class="text-dark"> <img src="quote.jpg" class="card-img-top tis-border" alt="Quotes"> </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="quotes.php" class="text-dark"> Quotes </a></h5>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="card-text text-center">A quotes is the repetition of a sentence, phrase, or passage from speech or text that someone has said or written.</p>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="text-center"><a href="quotes.php" class="btn btn-success">Explore Quotes</a></p>
                            </div>
                        </div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="8263107986"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        <div class="card mx-4 my-4 tis-border" style="width: 18rem;">
                            <a href="forum.php" class="text-dark"> <img src="1.jpeg" class="card-img-top tis-border" alt="Q/A"> </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="forum.php" class="text-dark"> Q/A - Forum</a></h5>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="card-text text-center">A forum is a place, situation, or group in which people exchange ideas and discuss issues, especially important public issues.</p>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="text-center"><a href="forum.php" class="btn btn-success">Explore Questions</a></p>
                            </div>
                        </div>
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

                        <div class="card mx-4 my-4 tis-border" style="width: 18rem;">
                            <img src="1.jpeg" class="card-img-top tis-border" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="text-dark"> Under Process ! </a></h5>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <p class="card-text">Comming Soon...</p>
                                <hr style=" background-color: rgb(136, 136, 136);">
                                <a href="#" class="btn btn-success">Disabled</a>
                            </div>
                        </div>

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
                </div>


                <div class="my-4">
                    <h1 class="text-center text-light" style=" font-family: 'Patrick Hand', cursive;"> SolveYourDay </h1>

                </div>







            </div>
            <?php
include 'footer.php';
?>
                <!-- Optional JavaScript; choose one of the two! -->
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