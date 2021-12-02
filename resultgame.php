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

.tis-table{
    border: 1px solid black;
}

</style>
    <body>
        <?php
  include 'nav.php';
  
  ?>

<div class="container my-4 mx-4">



<h2 class="text-center my-4">Your Quiz's Result</h2>


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
$sql = "SELECT * FROM `game_result_final` WHERE `admin_sno` = 23";
$result = mysqli_query($conn , $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $score = $row['score'];
        $player_name = $row['player_name'];

    }



?>





<div class="container my-4">

<table class="table tis-table">
  <caption>Scores :)</caption>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Score</th>
      
    </tr>
  </thead>
  <tbody>
  <?php

$result_sno = $_GET['sno'];

$sql = "SELECT * FROM `game_result_final` WHERE `admin_sno` = '$result_sno'";
$result = mysqli_query($conn , $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $score = $row['score'];
        $player_name = $row['player_name'];

        echo '<tr>
        <th scope="row"> '.$player_name.' </th>
        <td>'.$score.' / 10</td>
       
      </tr>';

    }



?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
     
    </tr>
     -->
  </tbody>
</table>


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
                <h1 class="text-center" style=" font-family: 'Patrick Hand', cursive;"> SolveYourDay.com </h1>

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