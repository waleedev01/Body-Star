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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </head>
    <body>
        <header>
            <! ––
            *    Title: Bootstrap 4 Navigation Bar
            *    Author: W3Schools.com
            *    Date: ...
            *    Availability: https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp
            *    Used in all the pages
            I have made a lot of changes in the styling
            ––>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class='title-container'><! --  made a div to style the title  --> 
                    <a class="navbar-brand" href="index.php">BODY <font color=orange>STAR</font></a>
                    <div><! --  made a div to style the toggler  --> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>    
                        <li class="nav-item"><! --  Code about session from week 9 sample solution  --> 
                            <?php
                            if (isset($_SESSION['username'])) {
                                $_SESSION['logout'] = "<a class='nav-link' href='booking.php'>BOOKING</a>";
                                echo $_SESSION['logout'];
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $_SESSION['logout'] = "<a class='nav-link' href='logout.php'>LOGOUT</a>";
                                echo $_SESSION['logout'];
                            }else{
                                echo"<a class='nav-link' href='login.php'>LOGIN</a>";      }    
                            ?>

                        </li>    
                    </ul>
                </div>
            </nav>
        </header>

        <! ––
        *    Title: How To Create a Hero Image
        *    Author: W3Schools.com
        *    Date: ...
        *    https://www.w3schools.com/howto/howto_css_hero_image.asp
        I have made made some changes in styling, mainly in the size.
        ––>
        <div class="hero-image">
            <div class="hero-text">
                <?php
                if (isset($_SESSION['username'])) {
                    echo"<h1>BOOK AN<font color=orange> APPOINTMENT</font></h1>";
                    echo"<a href='booking.php'<center><button style='width:auto;'>MORE INFORMATION</button></a></center>";

                }else{
                    echo"<h1>JOIN <font color=orange>US</font> TODAY</h1>";
                    echo"<a href='login.php'<center><button style='width:auto;'>MORE INFORMATION</button></a></center>";

                }
                ?>
            </div>
        </div>
        <! --  Code by me  --> 
        <section>
            <div class="grid-container">
                <div>
                    <br><b>OPENING HOURS</b><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.<br><br></div>
                <div class="grid-second-row">
                    <br><b>WHY CHOOSE US</b><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.<br><br></div>
                <div>
                    <br><b>OUR STAFF</b><br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.<br><br></div>
            </div>
        </section>

        <?php 
        include "footer.html"; 
        ?>    
    </body>

</html>
