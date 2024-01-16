<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BODY STAR</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/styleContact.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
        <header>        
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class='title-container'>
                    <a class="navbar-brand" href="index.php">BODY <font color=orange>STAR</font></a>
                    <div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">CONTACT</a>
                        </li>    
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $_SESSION['logout'] = "<a class='nav-link' href='booking.php'>BOOKING</a>";
                                echo $_SESSION['logout']; // add to DOM
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $_SESSION['logout'] = "<a class='nav-link' href='logout.php'>LOGOUT</a>";
                                echo $_SESSION['logout']; // add to DOM
                            }else{
                                echo"<a class='nav-link' href='login.php'>LOGIN</a>";      }    
                            ?>

                        </li>    
                    </ul>
                </div>
            </nav>
        </header>
        <! --  Code by me  --> 
        <section>
            <div class="grid-container-contact">
                <div>
                    <center><br><b><h2>CONTACT<font color= orange> US</font></h2></b><br></center>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna.<br><b>Opening <font color=orange>Hours:</font></b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Monday: 9:00-18:00<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Tuesday: 9:00-18:00<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Wednesday: 9:00-18:00<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Thursday: 9:00-18:00<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Friday: 9:00-18:00<br> <b>EMAIL <font color=orange>US</font></b>: bodystar@bodystar.com.<br><br>
                    You can book an appointment with us: <b>click on the <font color = orange>button</font></b> below.<br><br>
                    <center><a href='login.php'><button style='width:auto;'>REGISTER/LOGIN</button></a></center>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9928.78245375081!2d-0.1024624!3d51.5279719!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x570d19c20ab22a83!2sCity%20University!5e0!3m2!1sit!2sit!4v1617463850823!5m2!1sit!2sit" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <?php 
        include "footer.html"; 
        ?> 
    </body>
</html>


