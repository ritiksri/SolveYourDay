<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

<style>
    .tis-nav {
        background-color: black;
        /* background-color: rgb(193 80 0); */
        font-family: 'Patrick Hand', cursive;
        
    }
    /* Style the links inside the sidenav */
    
    #mySidenav {
        overflow: visible;
        position: fixed;
        top: 100px;
        left: -59%;
        transition: 0.3s;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 5px 5px 0;
        z-index: 9;
    }
    
    #mySidenav:hover {
        left: 0;
        transition: 0.3s;
    }
</style>

<body>
    <?php
  
  include 'connect.php';
  include 'login.php';
  include 'singup.php';
  ?>


        <nav class="navbar navbar-expand-lg navbar-dark fixed-top tis-nav">
            <a class="navbar-brand" href="solveyourday.php">SolveYourDay <img src="logo.png" width="30px" height="30px" alt="SYD"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="solveyourday.php">Home <i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="blog.php">Blogs <i class="fa fa-pencil-square-o"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="quotes.php">Quotes <i class="fa fa-quote-right"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="forum.php">Q/A - Forum<i class="fa fa-pencil-square-o"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About Us<i class="fa fa-pencil-square-o"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           More
          </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="about.php">About Us</a>
                            <a class="dropdown-item" href="#">Contact Us</a>

                        </div>
                    </li>
                    <!-- <li class="nav-item active">
                    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</li> -->

                </ul>

                <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="Search" name="search" required>
                    <input class="form-control mr-sm-2" type="search" value="nooneknows" aria-label="Search" name="from" hidden>
                    <button class="btn btn-success my-2 my-sm-0 mr-2" type="submit">Search</button>
                </form>


                <?php


    
  
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){

echo '<a href="logout.php" class ="btn btn-success ">Logout</a>';


}
if(!isset($_SESSION['loggedin']) ){
echo '<!-- Button trigger modal -->
<button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#loginModal">
Login
</button>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">
Sign Up
</button>';
}

?>


                    <!-- Button trigger modal
            <button type="button" class="btn btn-success mx-2" data-toggle="modal" data-target="#loginModal">
        Login
      </button>
           
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">
        Sign Up
      </button> -->
            </div>
            
      

        </nav>



        <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){

        echo '<ul class="nav justify-content-end fixed-top  bg-light" style="top: 50px;">
        <li  class="nav-item dropright my-2 " ><a href="followingpost.php?userlog='. $_SESSION['user_id'].'" class =" text-white bg-primary p-1 rounded-pill">Following`s Posts</a></li>


        <li class="nav-item dropleft">
               <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Welcome! "'. $_SESSION['name_user'].'"
               </a>

               <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
               
               <a href="profile.php?userlog='. $_SESSION['user_id'].'&from=yes" class ="mx-2 text-white btn">My Profile
               </a>
              
               <hr>
               <a href="logout.php" class ="mx-2 text-white btn">Logout
               </a>
               
           </div>

           
          </li>
      </ul>
      
      
      <div class="my-4">
.';
        
        
        }
        
    ?>














            <div class=" my-4">
.
     

