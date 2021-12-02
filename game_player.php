<?php
// for session
session_start();

include 'connect.php';

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
        <title>Games - SolveYourDay</title>
    </head>
    <style>
        a:hover {
            border: 2px solid green;
            border-radius: 10px;
        }
        .tis-border {
            border-radius: 20px;
        }
    </style>

    <body>
        <?php
  include 'nav.php';
  
  ?>



<!-- Getting Game player Information -->




            <div class="container my-4">






                <!-- Posting Name Of Game_player -->

                <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $player_name = $_POST['player_name'];
    
    $_SESSION["player_name"] = $player_name;
   
 }


 ?>
         <?php
if(!isset($_SESSION['player_name'])){
$sno_owner = $_GET['sno'];
$_SESSION['owner_sno'] = $_GET['sno'];
$sql1 = "SELECT * FROM `game_admin` WHERE `sno` LIKE '$sno_owner'";
$result1 = mysqli_query($conn , $sql1);
while ($row = mysqli_fetch_assoc($result1)) {
    $Owner_name = $row['name'];
$_SESSION['owner_name'] = $Owner_name;
}
}

?>           <?php
            
            if(isset($_SESSION['player_name'])){
                echo '<div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                <strong> Welcome '.$_SESSION["player_name"].' </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';  

              
            }

            else{

                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <form action="game_player.php" method="POST">
                  <label for="exampleInputEmail1">Enter Your Name To Answer '.$_SESSION['owner_name'].'`s Questions :) </label>
                  <input type="text" class="form-control" id="player_name" name="player_name" aria-describedby="emailHelp" required>
                  </div>
                <button type="submit" class="btn btn-warning btn-lg btn-block">Submit & Play Games</button>
              </form>';

            }

            ?>




                        <div class="container my-4">






                        <!-- Question 1 -->

<?php
if(!isset($_SESSION['q1']) && isset($_SESSION['player_name'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> What is '.$_SESSION['owner_name'].'`s fav drink? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_player_answer.php?q=1&answer=1"><img src="image game/q1/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=1&answer=2"><img src="image game/q1/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=1&answer=3"><img src="image game/q1/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=1&answer=4"><img src="image game/q1/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 2 -->

<?php
if(!isset($_SESSION['q2']) && isset($_SESSION['player_name']) && isset($_SESSION['q1'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Which Pet Animal '.$_SESSION['owner_name'].' Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=2&answer=1"><img src="image game/q2/1.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=2&answer=2"><img src="image game/q2/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=2&answer=3"><img src="image game/q2/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_player_answer.php?q=2&answer=4"><img src="image game/q2/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 3 -->

<?php
if(!isset($_SESSION['q3']) && isset($_SESSION['player_name']) && isset($_SESSION['q2'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> Which Chocolate '.$_SESSION['owner_name'].' Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=3&answer=1"><img src="image game/q3/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=3&answer=2"><img src="image game/q3/2.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=3&answer=3"><img src="image game/q3/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=3&answer=4"><img src="image game/q3/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 4 -->
 
<?php
if(!isset($_SESSION['q4']) && isset($_SESSION['player_name']) && isset($_SESSION['q3'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark">  Which Place '.$_SESSION['owner_name'].' Like To Visit In Future ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=4&answer=1"><img src="image game/q4/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=4&answer=2"><img src="image game/q4/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=4&answer=3"><img src="image game/q4/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=4&answer=4"><img src="image game/q4/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

<!-- Question 5 -->

<?php
if(!isset($_SESSION['q5']) && isset($_SESSION['player_name']) && isset($_SESSION['q4'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> What Is '.$_SESSION['owner_name'].'`s Relationship Status ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=5&answer=1"><img src="image game/q5/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=5&answer=2"><img src="image game/q5/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=5&answer=3"><img src="image game/q5/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=5&answer=4"><img src="image game/q5/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 6 -->
 
<?php
if(!isset($_SESSION['q6']) && isset($_SESSION['player_name']) && isset($_SESSION['q5'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark">  Which Color Dress '.$_SESSION['owner_name'].' like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=6&answer=1"><img src="image game/q6/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=6&answer=2"><img src="image game/q6/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=6&answer=3"><img src="image game/q6/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=6&answer=4"><img src="image game/q6/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 7 -->
 
<?php
if(!isset($_SESSION['q7']) && isset($_SESSION['player_name']) && isset($_SESSION['q6'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Which Fast Food '.$_SESSION['owner_name'].' Like Most ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=7&answer=1"><img src="image game/q7/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=7&answer=2"><img src="image game/q7/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=7&answer=3"><img src="image game/q7/3.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=7&answer=4"><img src="image game/q7/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>


   <!-- Question 8 -->
 

<?php
if(!isset($_SESSION['q8']) && isset($_SESSION['player_name']) && isset($_SESSION['q7'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark">  '.$_SESSION['owner_name'].'`s Favorite Season ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=8&answer=1"><img src="image game/q8/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=8&answer=2"><img src="image game/q8/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=8&answer=3"><img src="image game/q8/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=8&answer=4"><img src="image game/q8/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>


   <!-- Question 9 -->
 

<?php
if(!isset($_SESSION['q9']) && isset($_SESSION['player_name']) && isset($_SESSION['q8'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark">  '.$_SESSION['owner_name'].'`s Hobby?  </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=9&answer=1"><img src="image game/q9/1.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=9&answer=2"><img src="image game/q9/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=9&answer=3"><img src="image game/q9/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=9&answer=4"><img src="image game/q9/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>


   <!-- Question 10 -->
 

<?php
if(!isset($_SESSION['q10']) && isset($_SESSION['player_name']) && isset($_SESSION['q9'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Which Would '.$_SESSION['owner_name'].' prefer ? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answer.php?q=10&answer=1"><img src="image game/q10/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=10&answer=2"><img src="image game/q10/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=10&answer=3"><img src="image game/q10/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
            <a href="game_player_answer.php?q=10&answer=4"><img src="image game/q10/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>



<?php
// echo $_SESSION['player_name'];
// echo $_SESSION['q1'];
// echo $_SESSION['q2'];
// echo $_SESSION['q3'];
// echo $_SESSION['q4'];
// echo $_SESSION['q5'];
// echo $_SESSION['q6'];
// echo $_SESSION['q7'];
// echo $_SESSION['q8'];
// echo $_SESSION['q9'];
// echo $_SESSION['q10'];

if(isset($_SESSION['player_name']) && isset($_SESSION['q10']) && !isset($_SESSION['answer'])){
    echo '
    <a class="btn btn-warning btn-lg btn-block">You Scored '.$_SESSION['result_player'].' / 10</a>
    <h5 class="card-title text-center"> 
    <br><br> Make Sure To <a href="exitgame.php" class="btn btn-success"> Click Here </a> Before Exit Otherwise You Can`t Answer More Quizs..
    </h5>
';
}




if(isset($_SESSION['player_name']) && isset($_SESSION['answer'])){

    echo'<h5 class="card-title text-center"> Your Answer Submitted Successfully For '.$_SESSION['owner_name'].'`s Quiz :)
    <br><br> Make Sure To <a href="exitgame.php" class="btn btn-success"> Click Here </a> Before Exit Otherwise You Can`t Answer More Quizs..
    </h5>';

}


?>



                            









                        </div>


                        <!-- cards -->

                        <div class="container my-4">
<h3 class="text-center">OR</h3>


<a href="exitgame.php" class="btn btn-warning btn-lg btn-block"> Make Your Quiz :) </a>

                        </div>
            </div>


            <div class="my-4">
                <h1 class="text-center" style=" font-family: 'Patrick Hand', cursive;"> SolveYourDay </h1>

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