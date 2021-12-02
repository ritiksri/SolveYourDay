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
        a{
            color :white;
        }
        .tis-border {
            border-radius: 20px;
        }
        .tisfontshow{
            background-color: wheat;
            padding: 2px;
            border-radius: 4px;
        }
        .tis-box{
            background-image: linear-gradient(to right top, #17da59, #7cc00b, #a4a200, #bd8300, #ca6000, #d54c1b, #de332f, #e30044, #e90065, #e1008f, #c200c0, #7900f3);
            width: 105px;
            height: 105px;
            border:2px dashed white;
            border-radius: 8px;
            margin: 2px;
            color: white;
            font-size: 25px;
            background-image: linear-gradient(to right top, #17da59, #7cc00b, #a4a200, #bd8300, #ca6000, #d54c1b, #de332f, #e30044, #e90065, #e1008f, #c200c0, #7900f3);
        }
        .tis-option{
            
            margin: 0;
            position: relative;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-family: 'Patrick Hand', cursive;
        }
        .tis-option-back{
            background-image: linear-gradient(to right top, #da1717, #da5000, #d57400, #cc9300, #c1ae00, #b7bd00, #a9cb00, #96da0f, #85e00c, #6fe711, #51ed1c, #00f328);
            color: white;
            font-family: 'Patrick Hand', cursive;
            border-radius: 28px;
            border:2px solid white;
        }
        .tis-wish {
            background-image: linear-gradient(to right top, #17da59, #7cc00b, #a4a200, #bd8300, #ca6000, #d54c1b, #de332f, #e30044, #e90065, #e1008f, #c200c0, #7900f3);
            font-family: 'Patrick Hand', cursive;
            border-radius: 20px;
        }
        
        .tis-close {
            
            border-radius: 28px;
            border: 2px solid white;
        }
        
        .tis-img-dec {
            border: 3px dashed white;
            background-color: black;
        }
    </style>

    <body style="background-image: url('gamebdbg.jpg');>
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

?>       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4409248548545189"
     data-ad-slot="2991792942"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>    <?php
            
            if(isset($_SESSION['player_name'])){
                echo '
              <div class="alert tis-wish alert-dismissible fade show my-4 " role="alert">';

                
$filename = 'bduser/'.$_SESSION['owner_name'].'.jpg';

if (file_exists($filename)) {
    echo '<img src="bduser/'.$_SESSION['owner_name'].'.jpg" alt="" height="100px" width="100px" class="mr-3 rounded-circle tis-img-dec">';
} else {
    echo '<img src="icon.png" alt="" height="100px" width="100px" class="mr-3 rounded-circle tis-img-dec">';
}

              echo ' 
                <strong> Birthday  Quiz Of '.$_SESSION['owner_name'].' </strong> <br>
                <strong>“A wish for '.$_SESSION['owner_name'].' on his/her birthday, whatever '.$_SESSION['owner_name'].' ask may '.$_SESSION['owner_name'].' receive, whatever '.$_SESSION['owner_name'].' seek may '.$_SESSION['owner_name'].' find, whatever '.$_SESSION['owner_name'].' wish may it be fulfilled on his/her birthday and always. Happy birthday '.$_SESSION['owner_name'].'!”</strong> <br>
                <small>~ From '.$_SESSION['player_name'].' & Team SolveYourDay.com </small>
                <button type="button" class="close tis-close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              ';  

              
            }

            else{

                echo '<div class="alert tis-wish alert-dismissible fade show" role="alert">
                <form action="game_playerbd.php" method="POST">
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
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class=""> What is '.$_SESSION['owner_name'].'`s fav drink? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
                <a href="game_player_answerbd.php?q=1&answer=1" class="tis-box text-center"> <p class="tis-option">Tea</p></a>
                <a href="game_player_answerbd.php?q=1&answer=2" class="tis-box text-center"> <p class="tis-option">Coffee</p></a>
                <a href="game_player_answerbd.php?q=1&answer=3" class="tis-box text-center"> <p class="tis-option">Cold Drink</p></a>
                <a href="game_player_answerbd.php?q=1&answer=4" class="tis-box text-center"> <p class="tis-option">Wine</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 2 -->

<?php
if(!isset($_SESSION['q2']) && isset($_SESSION['player_name']) && isset($_SESSION['q1'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class=""> Which Pet Animal '.$_SESSION['owner_name'].' Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=2&answer=1" class="tis-box text-center"> <p class="tis-option">Dog</p></a>
                <a href="game_player_answerbd.php?q=2&answer=2" class="tis-box text-center"> <p class="tis-option">Cat</p></a>
                <a href="game_player_answerbd.php?q=2&answer=3" class="tis-box text-center"> <p class="tis-option">Rabbit</p></a>
                <a href="game_player_answerbd.php?q=2&answer=4" class="tis-box text-center"> <p class="tis-option">Bird</p></a>
            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 3 -->

<?php
if(!isset($_SESSION['q3']) && isset($_SESSION['player_name']) && isset($_SESSION['q2'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class=""> Which Chocolate '.$_SESSION['owner_name'].' Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=3&answer=1"class="tis-box text-center"> <p class="tis-option">DairyMilk</p></a>
            <a href="game_player_answerbd.php?q=3&answer=2"class="tis-box text-center"> <p class="tis-option">5 Star</p></a>
            <a href="game_player_answerbd.php?q=3&answer=3"class="tis-box text-center"> <p class="tis-option">Perk</p></a>
            <a href="game_player_answerbd.php?q=3&answer=4"class="tis-box text-center"> <p class="tis-option">KitKat</p></a>
            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 4 -->
 
<?php
if(!isset($_SESSION['q4']) && isset($_SESSION['player_name']) && isset($_SESSION['q3'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="">  Which is '.$_SESSION['owner_name'].'`s Fav. Cartoon?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=4&answer=1"class="tis-box text-center"> <p class="tis-option">Doremon</p></a>
            <a href="game_player_answerbd.php?q=4&answer=2"class="tis-box text-center"> <p class="tis-option">Shinchan</p></a>
            <a href="game_player_answerbd.php?q=4&answer=3"class="tis-box text-center"> <p class="tis-option">Tom & Jerry</p></a>
            <a href="game_player_answerbd.php?q=4&answer=4"class="tis-box text-center"> <p class="tis-option">Oggy & Cokroges</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

<!-- Question 5 -->

<?php
if(!isset($_SESSION['q5']) && isset($_SESSION['player_name']) && isset($_SESSION['q4'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class=""> Which type songs  '.$_SESSION['owner_name'].' like most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=5&answer=1"class="tis-box text-center"> <p class="tis-option">Party Songs</p></a>
            <a href="game_player_answerbd.php?q=5&answer=2"class="tis-box text-center"> <p class="tis-option">Sad Songs</p></a>
            <a href="game_player_answerbd.php?q=5&answer=3"class="tis-box text-center"> <p class="tis-option">Devotional Songs</p></a>
            <a href="game_player_answerbd.php?q=5&answer=4"class="tis-box text-center"> <p class="tis-option">Cartoon Songs</p></a>
            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 6 -->
 
<?php
if(!isset($_SESSION['q6']) && isset($_SESSION['player_name']) && isset($_SESSION['q5'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="">  Which Color Dress '.$_SESSION['owner_name'].' like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=6&answer=1"class="tis-box text-center"> <p class="tis-option">Black</p></a>
            <a href="game_player_answerbd.php?q=6&answer=2"class="tis-box text-center"> <p class="tis-option">Red</p></a>
            <a href="game_player_answerbd.php?q=6&answer=3"class="tis-box text-center"> <p class="tis-option">White</p></a>
            <a href="game_player_answerbd.php?q=6&answer=4"class="tis-box text-center"> <p class="tis-option">Pink</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 7 -->
 
<?php
if(!isset($_SESSION['q7']) && isset($_SESSION['player_name']) && isset($_SESSION['q6'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class=""> Which Fast Food '.$_SESSION['owner_name'].' Like Most ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=7&answer=1"class="tis-box text-center"> <p class="tis-option">Maggie</p></a>
            <a href="game_player_answerbd.php?q=7&answer=2"class="tis-box text-center"> <p class="tis-option">Pizza</p></a>
            <a href="game_player_answerbd.php?q=7&answer=3"class="tis-box text-center"> <p class="tis-option">Dosa</p></a>
            <a href="game_player_answerbd.php?q=7&answer=4"class="tis-box text-center"> <p class="tis-option">Pani Puri</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>


   <!-- Question 8 -->
 

<?php
if(!isset($_SESSION['q8']) && isset($_SESSION['player_name']) && isset($_SESSION['q7'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="">  '.$_SESSION['owner_name'].'`s Favorite Season ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=8&answer=1"class="tis-box text-center"> <p class="tis-option">Winter</p></a>
            <a href="game_player_answerbd.php?q=8&answer=2"class="tis-box text-center"> <p class="tis-option">Summer</p></a>
            <a href="game_player_answerbd.php?q=8&answer=3"class="tis-box text-center"> <p class="tis-option">Autumn</p></a>
            <a href="game_player_answerbd.php?q=8&answer=4"class="tis-box text-center"> <p class="tis-option">Rainy</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>


   <!-- Question 9 -->
 

<?php
if(!isset($_SESSION['q9']) && isset($_SESSION['player_name']) && isset($_SESSION['q8'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="">  '.$_SESSION['owner_name'].'`s Hobby?  </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=9&answer=1"class="tis-box text-center"> <p class="tis-option">Drawing</p></a>
            <a href="game_player_answerbd.php?q=9&answer=2"class="tis-box text-center"> <p class="tis-option">Dancing</p></a>
            <a href="game_player_answerbd.php?q=9&answer=3"class="tis-box text-center"> <p class="tis-option">Singing</p></a>
            <a href="game_player_answerbd.php?q=9&answer=4"class="tis-box text-center"> <p class="tis-option">Playing Games</p></a>

            </div>
            <hr style=" background-color: white;">
        </div>
    </div>
</div>
</div>';
  
}
?>

   <!-- Question 10 -->
 

<?php
if(!isset($_SESSION['q10']) && isset($_SESSION['player_name']) && isset($_SESSION['q9'])){
    
echo '<div class="card mx-auto my-4 tis-border  tis-option-back" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class=""> Which Would '.$_SESSION['owner_name'].' prefer ? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: white;">

            <div class="row mx-auto" width="220px">
            <a href="game_player_answerbd.php?q=10&answer=1"class="tis-box text-center"> <p class="tis-option">Outing with friends</p></a>
            <a href="game_player_answerbd.php?q=10&answer=2"class="tis-box text-center"> <p class="tis-option">Playing Games</p></a>
            <a href="game_player_answerbd.php?q=10&answer=3"class="tis-box text-center"> <p class="tis-option">Study Full Time</p></a>
            <a href="game_player_answerbd.php?q=10&answer=4"class="tis-box text-center"> <p class="tis-option">Sleeping</p></a>

            </div>
            <hr style=" background-color: white;">
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


                        <!-- cards -->

                        <div class="container my-4">
<h3 class="text-center">OR</h3>


<a href="exitgamebd.php" class="btn btn-warning btn-lg btn-block"> Make Your Quiz :) </a>

                        </div>
            </div>


            <div class="my-4">
                <h1 class="text-center tisfontshow" style=" font-family: 'Patrick Hand', cursive;"> SolveYourDay </h1>

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