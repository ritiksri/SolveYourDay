  
  <?php
  include 'connect.php';
  ?>

<?php
$search =  $_GET['userlog'] ;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $editname = $_POST['editname'];
  $editnamelast = $_POST['editnamelast'];

  // $editcontent=nl2br($editcontent);


  $sql = "UPDATE `users` SET `name` = '$editname' , `last_name` = '$editnamelast' WHERE `users`.`username` = '$search';";
  
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


// $_FILES["fileToUpload"]["name"]

$id = $_GET['userlog'];
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
    
header('Location: index.php');
exit;
  }
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

header('Location: index.php');
exit;

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
