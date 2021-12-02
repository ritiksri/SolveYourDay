<?php
include 'connect.php';

?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Bank's
            <?php
    $type = $_GET['type'];
    echo $type;
    ?> - SolveYourDay
        </title>
        <link rel="icon" href="icon.png" alt="SYD">

        <style>
            .tis-c {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 400px;
            }
            
            .option-tis {
                font-size: 18px;
                background-color: rgb(48, 184, 48);
                color: white;
            }
            
            #banks {
                padding: 4px;
                border: 2px;
                border-style: solid;
                border-radius: 20px;
                font-size: 20px;
                background-color: rgb(234 255 207);
            }
        </style>
    </head>

    <body>
        <?php
    include 'nav.php';
    ?>

            <div class="container my-4 ">


                <h3 class=" text-center rounded bg-success text-light">
                    Customer Contact Of All Banks</h3>

                <div>

                    <form class="tis-c">
                        <select name="bank" class="my-4" id="banks">
<option value="volvo" class="option-tis" >Select Bank</option>
<option value="saab" class="option-tis" >Saab</option>
<option value="state bank of india" class="option-tis" >state bank of india</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
<option value="audi" class="option-tis" >Audi</option>
</select>
                        <input type="text" name="type" value="<?php
                        $type = $_GET['type'];
                        echo $type;
                        ?>" hidden>
                        <button type="submit" class="btn btn-success mx-2 rounded-pill">Go</button>
                    </form>


                </div>

            </div>






            <?php
include 'footer.php';
?>
                <!-- Optional JavaScript; choose one of the two! -->

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