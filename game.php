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
        
        @keyframes example {
            0% {
                background-color: red;
            }
            25% {
                background-color: purple;
            }
            50% {
                background-color: blue;
            }
            75% {
                background-color: green;
            }
            100% {
                background-color: red;
            }
        }
        /* The element to apply the animation to */
        
        .tis-code {
            position: relative;
            background-color: red;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            color: white;
            border-radius: 40px;
            border: 2px solid wheat;
        }
    </style>

    <body>
        <?php
  include 'nav.php';
  
  ?>




            <div class="container my-4">






                <!-- Posting Name Of Game_Admin -->

                <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_name = $_POST['admin_name'];
    
    $_SESSION["admin_name"] = $admin_name;
   
 }


 ?>
                    <?php
            
            if(isset($_SESSION['admin_name'])){
                echo '<div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                <strong> Welcome '.$_SESSION["admin_name"].' </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';  

              
            }

            else{

                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <form action="game.php" method="POST">
                  <label for="exampleInputEmail1">Enter Your Name To Start Making Your Quiz</label>
                  <input type="text" class="form-control" id="admin_name" name="admin_name" aria-describedby="emailHelp" required>
                  </div>
                <button type="submit" class="btn btn-warning btn-lg btn-block">Submit & Start</button>
              </form>';

            }

            ?>




                        <div class="container my-4">






                            <!-- Question 1 -->

                            <?php
if(!isset($_SESSION['q1']) && isset($_SESSION['admin_name'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> Which Drink You Like Most? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=1&answer=1"><img src="image game/q1/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=1&answer=2"><img src="image game/q1/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=1&answer=3"><img src="image game/q1/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=1&answer=4"><img src="image game/q1/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q2']) && isset($_SESSION['admin_name']) && isset($_SESSION['q1'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark">Which Pet Animal You Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=2&answer=1"><img src="image game/q2/1.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=2&answer=2"><img src="image game/q2/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=2&answer=3"><img src="image game/q2/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=2&answer=4"><img src="image game/q2/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q3']) && isset($_SESSION['admin_name']) && isset($_SESSION['q2'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Which Chocolate You Like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=3&answer=1"><img src="image game/q3/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=3&answer=2"><img src="image game/q3/2.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=3&answer=3"><img src="image game/q3/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=3&answer=4"><img src="image game/q3/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q4']) && isset($_SESSION['admin_name']) && isset($_SESSION['q3'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> Which Place You Like To Visit In Future ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=4&answer=1"><img src="image game/q4/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=4&answer=2"><img src="image game/q4/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=4&answer=3"><img src="image game/q4/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=4&answer=4"><img src="image game/q4/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q5']) && isset($_SESSION['admin_name']) && isset($_SESSION['q4'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> What Is Your Relationship Status ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=5&answer=1"><img src="image game/q5/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=5&answer=2"><img src="image game/q5/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=5&answer=3"><img src="image game/q5/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=5&answer=4"><img src="image game/q5/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q6']) && isset($_SESSION['admin_name']) && isset($_SESSION['q5'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Which Color Dress You like Most?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=6&answer=1"><img src="image game/q6/1.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=6&answer=2"><img src="image game/q6/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=6&answer=3"><img src="image game/q6/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=6&answer=4"><img src="image game/q6/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q7']) && isset($_SESSION['admin_name']) && isset($_SESSION['q6'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> Which Fast Food You Like Most ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=7&answer=1"><img src="image game/q7/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=7&answer=2"><img src="image game/q7/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=7&answer=3"><img src="image game/q7/3.png" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=7&answer=4"><img src="image game/q7/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q8']) && isset($_SESSION['admin_name']) && isset($_SESSION['q7'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="blog.php" class="text-dark"> Your Favorite Season ?</a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=8&answer=1"><img src="image game/q8/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=8&answer=2"><img src="image game/q8/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=8&answer=3"><img src="image game/q8/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=8&answer=4"><img src="image game/q8/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q9']) && isset($_SESSION['admin_name']) && isset($_SESSION['q8'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark"> Your Hobby? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=9&answer=1"><img src="image game/q9/1.jpeg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=9&answer=2"><img src="image game/q9/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=9&answer=3"><img src="image game/q9/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=9&answer=4"><img src="image game/q9/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

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
if(!isset($_SESSION['q10']) && isset($_SESSION['admin_name']) && isset($_SESSION['q9'])){
    
echo '<div class="card mx-auto my-4 tis-border" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title text-center"> <a href="#" class="text-dark">Which Would you prefer ? </a></h5>
    <div>
        <div class="">
            <hr style=" background-color: rgb(136, 136, 136);">

            <div class="row mx-auto" width="220px">
                <a href="game_save_answer.php?q=10&answer=1"><img src="image game/q10/1.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=10&answer=2"><img src="image game/q10/2.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=10&answer=3"><img src="image game/q10/3.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>
                <a href="game_save_answer.php?q=10&answer=4"><img src="image game/q10/4.jpg" width="105px" height="105px" class="mx-1 my-2 rounded" alt=""></a>

            </div>
            <hr style=" background-color: rgb(136, 136, 136);">
        </div>
    </div>
</div>
</div>';
  
}
?>



                                                                    <?php


if(isset($_SESSION['admin_name']) && isset($_SESSION['q10']) && !isset($_SESSION['answer'])){
    echo '
<form action="game_save_answer.php?q=save&answer=alls" method="POST">
<input type="hidden" id="custId" name="admin_post_name" value="'.$_SESSION['admin_name'].'">
<input type="hidden" id="custId" name="q1" value="'.$_SESSION['q1'].'">
<input type="hidden" id="custId" name="q2" value="'.$_SESSION['q2'].'">
<input type="hidden" id="custId" name="q3" value="'.$_SESSION['q3'].'">
<input type="hidden" id="custId" name="q4" value="'.$_SESSION['q4'].'">
<input type="hidden" id="custId" name="q5" value="'.$_SESSION['q5'].'">
<input type="hidden" id="custId" name="q6" value="'.$_SESSION['q6'].'">
<input type="hidden" id="custId" name="q7" value="'.$_SESSION['q7'].'">
<input type="hidden" id="custId" name="q8" value="'.$_SESSION['q8'].'">
<input type="hidden" id="custId" name="q9" value="'.$_SESSION['q9'].'">
<input type="hidden" id="custId" name="q10" value="'.$_SESSION['q10'].'">
<input type="hidden" id="custId" name="game_no" value="1">

<button type="submit" class="btn btn-warning btn-lg btn-block my-4">Save Answer & Share</button>

</form>
';
}




if(isset($_SESSION['admin_name']) && isset($_SESSION['answer'])){



    $admin_name = $_SESSION['admin_name'];
$q1 = $_SESSION['q1'];
$q2 = $_SESSION['q2'];
$q3 = $_SESSION['q3'];
$q4 = $_SESSION['q4'];
$q5 = $_SESSION['q5'];
$q6 = $_SESSION['q6'];
$q7 = $_SESSION['q7'];
$q8 = $_SESSION['q8'];
$q9 = $_SESSION['q9'];
$q10 = $_SESSION['q10'];

 



    $sql1 = "SELECT * FROM `game_admin` WHERE `name` LIKE '$admin_name' AND `q1` = '$q1' AND `q2` = '$q2' AND `q3` = '$q3' AND `q4` = '$q4' AND `q5` = '$q5' AND `q6` = '$q6' AND `q7` = '$q7' AND `q8` = '$q8' AND `q9` = '$q9' AND `q10` = '$q10'";
    $result1 = mysqli_query($conn , $sql1);
    while ($row = mysqli_fetch_assoc($result1)) {
        $sno = $row['sno'];
$_SESSION['sno'] = $sno;
    }




    echo'<h5 class="card-title text-center">';
    echo '<br><a href= 
    "whatsapp://send?text=
*How Much You Know Me?*😍
👉
solveyourday.com/game_player.php?sno='.$_SESSION['sno'].'"
            data-action="share/whatsapp/share"
            target="_blank"> Share Your Quiz With Friends On WhatsApp ~ <br>
            <img src="whatsapp.png" width="90px" height="90px" class="mx-1 my-2 rounded" alt="">
        </a><br>
        OR - Copy Link To Share 👇<br> <br>
<textarea id="w3review" name="w3review" rows="4" cols="35">
How Much You Know Me?😍
👉
solveyourday.com/game_player.php?sno='.$_SESSION['sno'].'
</textarea><br><br>
        
        <a href="resultgame.php?sno='.$_SESSION['sno'].'" class="btn btn-success btn-lg btn-block">View Result :)</a><br>
        OR - Copy Link To View Result Everytime 👇<br><br>
        <textarea id="w3review" name="w3review" rows="4" cols="35">
        solveyourday.com/resultgame.php?sno='.$_SESSION['sno'].'
        </textarea>     </h5> ';
}


?>









                                                                        <!-- <a href= 
"whatsapp://send?text=GFG Example for whatsapp sharing"
        data-action="share/whatsapp/share"
        target="_blank"> 
        Share to whatsapp 
    </a>  -->


                        </div>
                        <!-- cards -->

                        <div class="container my-4">
                            <h3 class="text-center">OR</h3>


                            <a href="exitgame.php" class="btn btn-warning btn-lg btn-block"> Make New Quiz :) </a>

                        </div>
            </div>


            <div class="my-4">
                <h1 class="text-center" style=" font-family: 'Patrick Hand', cursive;"> SolveYourDay </h1>

            </div>







            </div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- ads -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4409248548545189" data-ad-slot="8263107986" data-ad-format="auto" data-full-width-responsive="true"></ins>
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