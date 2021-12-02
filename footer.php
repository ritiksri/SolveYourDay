<?php

 include 'connect.php';
 include 'login.php';
  include 'singup.php';
?>
   

 

   </div>
</div>


<div class="my-0" style="background-color: black;">
                <br>
                <hr class="my-2" style=" border-top: 1px solid white;">
                <ul class="nav flex-column my-4">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="blog.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="game.php">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="quotes.php">Quotes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About Us</a>
                    </li>
                </ul>

                <hr class="my-2" style=" border-top: 1px solid white;">
                <br>
            </div>
<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){

        echo '<div class="fixed-bottom" style="height: 55px; background-color: black;">
        <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="solveyourday.php"><img src="home.png"  width="40px" height="40px" alt=""></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="#" data-toggle="modal" data-target="#search"><img src="newsearch.png"  width="40px" height="40px" alt=""></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="#" data-toggle="modal" data-target="#newpost"><img src="new.png"  width="40px" height="40px" alt=""></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="#" data-toggle="modal" data-target="#notification"><img src="ntfy.png"  width="40px" height="40px" alt=""></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="profile.php?userlog='. $_SESSION['user_id'].'&from=yes"><img src="user.png"  width="40px" height="40px" alt=""></a>
        </li>
      </ul>
      </div>';
        
        
        }
    ?>



<!-- New Post Modal -->
<div class="modal fade" id="newpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
                    <a class="nav-link mx-4 text-light btn btn-success my-3"  data-toggle="modal" data-target="#blogpost">Blogs <i class="fa fa-pencil-square-o"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mx-4 text-light btn btn-success my-3" data-toggle="modal" data-target="#quotepost">Quotes <i class="fa fa-quote-right"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link mx-4 text-light btn btn-success my-3"  data-toggle="modal" data-target="#forumpost">Q/A - Forum<i class="fa fa-pencil-square-o"></i></a>
                </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Search Modal -->
<div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-inline my-2 my-lg-0" action = "search.php" method = "GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="search" required>
                <button class="btn btn-success my-4 my-sm-0" type="submit">Search</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Notification Modal -->
<div class="modal fade" id="notification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content mx-0 py-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-0 py-0">

      <?php

$user_log_id =  $_SESSION['user_id'];

$sql = "SELECT * FROM `quotes` WHERE `user_id` = '$user_log_id'";
$result = mysqli_query($conn , $sql);
// echo var_dump($result);
while ($row = mysqli_fetch_assoc($result)) {
    $quote_id = $row['quote_id'];
      
    
 


$sql11 = "SELECT * FROM `quotecomment` WHERE `quote_id` = '$quote_id' ORDER BY sno DESC";
$result11 = mysqli_query($conn , $sql11);

while ($row11 = mysqli_fetch_assoc($result11)) {
    $user_id = $row11['user_id'];
    $coment = $row11['content'];


    echo '<ul class="navbar-nav mx-0 py-0">
    <li class="nav-item active my-1">
    <img src="imageuser/'.$user_id.'.jpg" class="mr-3 rounded-circle" alt="..." width="20px" height="20px" >
    <b>
    <a href="profile.php?userlog='. $user_id .'&from=nooneknows" class="text-dark" > '.$user_id.' </a><a href="quotecontent.php?quoteid='.$quote_id.'" class="text-dark"></b>comments "'.$coment.'"
    <img src="imagequotes/'.$quote_id.'.jpg" class="rounded float-right" alt="..." width="40px" height="40px" ></a>
            </li>
    </ul>';


  }
    
}








?>

      <?php

$user_log_id =  $_SESSION['user_id'];

$sql = "SELECT * FROM `quotes` WHERE `user_id` = '$user_log_id'";
$result = mysqli_query($conn , $sql);
// echo var_dump($result);
while ($row = mysqli_fetch_assoc($result)) {
    $quote_id = $row['quote_id'];
      
    
 


$sql11 = "SELECT * FROM `likedb` WHERE `quote_id` = '$quote_id' ORDER BY sno DESC";
$result11 = mysqli_query($conn , $sql11);

while ($row11 = mysqli_fetch_assoc($result11)) {
    $user_id = $row11['user_id'];


    echo '<ul class="navbar-nav mx-0 py-0">
    <li class="nav-item active my-1">
    <img src="imageuser/'.$user_id.'.jpg" class="mr-3 rounded-circle" alt="..." width="20px" height="20px" >
    <b>
    <a href="profile.php?userlog='. $user_id .'&from=nooneknows" class="text-dark" > '.$user_id.' </a><a href="quotecontent.php?quoteid='.$quote_id.'" class="text-dark"></b>liked your post.
    <img src="imagequotes/'.$quote_id.'.jpg" class="rounded float-right" alt="..." width="40px" height="40px" ></a>
            </li>
    </ul>';


  }
    
}








?>

     
<?php

$user_log_id =  $_SESSION['user_id'];

$sql = "SELECT * FROM `follower` WHERE `user_id` = '$user_log_id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $follower_log_id = $row['follower_id'];
   


    echo '<ul class="navbar-nav mx-0 py-0">
    <li class="nav-item active my-1">
    <img src="imageuser/'.$follower_log_id.'.jpg" class="mr-3 rounded-circle" alt="..." width="20px" height="20px" >
    <b>
    <a href="profile.php?userlog='. $follower_log_id .'&from=nooneknows" class="text-dark" > '.$follower_log_id.' </a></b> followed you .
            </li>
    </ul>';



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
</div>







<!-- New Blog Modal -->
<div class="my-4">
        <!-- Search Modal -->
        <div class="modal fade" id="blogpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              
              <form action="blog.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title of Article/Blog</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required>
                <small id="emailHelp" class="form-text text-muted">Make title as short as possible</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content :)</label>
                <textarea class="form-control"
                    name="content" rows="9" required> </textarea>
            </div>
<?php
$username =  $_SESSION['user_id'];

        echo    '<input type="text" hidden value = "'.$username.'" name= "username">';

            ?>
            <button type="submit" class="btn btn-success">Post</button>
        </form>
        
        
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>














        

<!-- New Quote Modal -->
<div class="my-4">
        <!-- Search Modal -->
        <div class="modal fade" id="quotepost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
            
        <form action="quotes.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Title of Quote</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required >
                <small id="emailHelp" class="form-text text-muted">Make title in less than 30 words</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Caption :)</label>
                <textarea type="password" class="form-control" id="exampleInputPassword1"
                    name="content" required> </textarea>
            </div>

            <?php
$username =  $_SESSION['user_id'];

        echo    '<input type="text" hidden value = "'.$username.'" name= "username">';

            ?>
<label for="exampleInputPassword1" class="text-danger">( Click Post To Upload Image )</label> <br>
            <button type="submit" class="btn btn-success">Post</button>
        </form>
        
        
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>








        
        

<!-- New Quote Modal -->
<div class="my-4">
        <!-- Search Modal -->
        <div class="modal fade" id="forumpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ask Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
         
        <form action="forum.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Short description of your Question :</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required>
                <small id="emailHelp" class="form-text text-muted">Make title as short as possible</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Your Full Question :</label>
                <textarea type="password" class="form-control" id="exampleInputPassword1"
                    name="content" required> </textarea>
            </div>
            <?php
$username =  $_SESSION['user_id'];

        echo    '<input type="text" hidden value = "'.$username.'" name= "username">';

            ?>

            <button type="submit" class="btn btn-success">Post</button>
        </form>
        
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>