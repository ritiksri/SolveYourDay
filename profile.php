<?php
session_start();

include 'connect.php'



?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="icon.png">
    <title>
    
    <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {

    
        $profile = $row['username'];
        echo  "$profile" ;
        
        
    
    
    }

  
    
    
    ?>
     - SolveYourDay
    
    
    
    </title>
  </head>
  <body style="font-family: 'Patrick Hand', cursive;">
  <?php
  include 'nav.php';
  ?>
<div class="container">

    

<?php
// $search =  $_GET['userlog'] ;

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $editname = $_POST['editname'];

//   // $editcontent=nl2br($editcontent);


//   $sql = "UPDATE `users` SET `name` = '$editname' WHERE `users`.`username` = '$search';";
  
//   $result = mysqli_query($conn, $sql);

//   if($result == true){
//     echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
//     <strong>Edited!</strong>
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div> ';



//   }


// }


?>


    
   


<?php

$from =  $_GET['from'] ;

if($from == "without"){
echo '<div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
<strong>Login To Follow !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}

if($from == "al"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
    <strong>Already Following !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }
    
    if($from == "done"){
        echo '<div class="alert alert-primary alert-dismissible fade show my-2" role="alert">
        <strong>Followed !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        }


        if($from == "same"){
          echo '<div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
          <strong>Don`t Follow Yourself!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>';
          }

        if($from == "unfollow"){
          echo '<div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
          <strong>Unfollowed !</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>';
          }

?>

<div class="my-4">


<div class="media">

<?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);

if($row > 0){

    echo '
    <img src="imageuser/'.$search.'.jpg" class="mr-3 rounded-circle" alt="..." width="100px" height="100px" >';
}
else {
    
    echo '<h3 class="text-center"> No User Found </h3>';
}
    
   

    ?>


  <div class="media-body "> 
    <h5 class="mt-0 mx-4">  <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if($row > 0){
        $name = $row['name'];
        $last_name = $row['last_name'];
        echo ''.$name.'&nbsp;'.$last_name.'';
        
    }
    

    
    }

    
    
    
    ?>
    
    </h5>
    <p class="mx-4">

   


    
    <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {

    if($row > 0){
        $profile = $row['username'];
        echo  "<b>Username : </b> $profile" ;
        
        
    }

    
    }

  
    
    
    ?>
    
    
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      $username =  $_SESSION['user_id'];
      $search =  $_GET['userlog'] ;



     if($username == $search){

        echo '<a class="mx-2" data-toggle="modal" data-target="#editprofile">Edit Profile</a>';

     }
        
        }

        ?>

     </p>
     
     <p class="mx-4">
    
    <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `follower` WHERE `user_id` = '$search'";
$result = mysqli_query($conn , $sql);
$rowcount=mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
    
        
        echo  '<b><a class="text-dark" data-toggle="modal" data-target="#followers">Followers : </b> '.$rowcount.' </a>' ;
        
    
    

    
    






    ?>
     
     </p>
     <p class="mx-4">
    
    <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `quotes` WHERE `user_id` = '$search'";
$result = mysqli_query($conn , $sql);
$rowcount=mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);
    
     
    echo  "<b>Posts : </b> $rowcount" ;
        
    
    

    
    


    ?>
     
     </p>



<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
  $username =  $_SESSION['user_id'];

  $extsql = "Select * from `follower` where `user_id` ='$search' AND `follower_id` ='$username' ";
  $result = mysqli_query($conn, $extsql);
  $numrows = mysqli_num_rows($result);
  while ($row = mysqli_fetch_assoc($result)){
    $profile_follower_sno = $row['sno'];
  }
  if ($numrows > 0){
   
    echo '
    
    <a href="unfollow.php?userlog='. $profile_follower_sno .'" class="text-light btn-danger btn my-2" >Unfollow !</a>
    ';
    }

  


else{



$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
$profile = $row['username'];
    
    

    echo '
    
    <a href="follow.php?userlog='. $profile .'" class="text-light btn-primary btn my-2" >Follow User !</a>
    ';
}
}
}
else{
echo '
  <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
<strong>Login To Follow !</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
?>
   </div>
</div>





<hr style=" border-style: inset;
  border-width: 1px;
  background-color: black;">
</div>
<h3 class="text-center">
POSTS
</h3>






<div class="row">
    <?php
$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `quotes` WHERE `user_id` = '$search' ORDER BY quote_id DESC";
$result = mysqli_query($conn , $sql);
// echo var_dump($result);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $content = $row['content'];
    $user_quote = $row['user_id'];
    $quote_id = $row['quote_id'];
   


echo '

<div class="card mx-auto my-1" style="width: 120px;"><a href="quotecontent.php?quoteid='.$quote_id.'">
<img src="imagequotes/'.$quote_id.'.jpg" height="120px" class="card-img-top" alt="..."></a>



</div>';
}

?>









</div>





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
    
    


echo '<div class="media my-3">
<img src="image/'.$title.'.jpg" width="60px" height="60px" class="mr-3 rounded-circle" alt="No Image" >
<div class="media-body">
  <h5 class="mt-0"> <a href="content.php?blogid=' . $blog_id . '" class="text-dark"> '. $title .'</a></h5><a href="content.php?blogid=' . $blog_id . '" class="text-dark">
  '. substr($content , 0, 200) .'
  </a></div>
</div>
';

}
    
}


?>







</div>






<!-- Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editprofile">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `users` WHERE `username` = '$search'";
$result = mysqli_query($conn , $sql);
while ($row = mysqli_fetch_assoc($result)) {
    // if($row > 0){
    //     $name = $row['name'];
    //     echo $name;
        
    // }
    
    $profile = $row['name'];
    $profilelast = $row['last_name'];
    
   
}
echo  '<form action = "uploadprofile.php?userlog='.$search.'&from=yes" method = "POST"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name = "editname" value="'.$profile.'">  
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Last Name</label>
  <input type="text" class="form-control"  aria-describedby="emailHelp" name = "editnamelast" value="'.$profilelast.'">  
</div>
        <div class="form-group">
  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control btn-primary ">
  </div>
  
      <input type="submit" value="Edit Profile" name="submit" class="btn btn-primary">
</form>';

?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal followers-->
<div class="modal fade" id="followers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editprofile">Followers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php

$search =  $_GET['userlog'] ;

$sql = "SELECT * FROM `follower` WHERE `user_id` = '$search'";
$result = mysqli_query($conn , $sql);
$rowcount=mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    $followers = $row['follower_id'];
    
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
</div>
  

    <!-- Footer -->
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