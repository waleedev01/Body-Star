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
        <style>
            .mySlides {display:none;}
        </style>
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
                            <a class="nav-link active" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>   
                        <li class="nav-item">
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
        <!––
        *    Title: Carousel
        *    Author: bootstrap
        *    Date: ...
        *    Availability:    https://getbootstrap.com/docs/4.0/components/carousel/
        *    Used in all the pages
        I have made some changes in the styling  
        ––>
        
        
        <!--  
        Title: Photo1
        Photo by <a href="https://unsplash.com/@dncerullo?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Danielle Cerullo</a> on <a href="https://unsplash.com/s/photos/gym?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        Title: Photo2
        Photo by <a href="https://unsplash.com/@risennnnn?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Risen Wang</a> on <a href="https://unsplash.com/s/photos/gym?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>


        Title: Photo3
        Photo by <a href="https://unsplash.com/@jelmerassink?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Jelmer Assink</a> on <a href="https://unsplash.com/s/photos/gym?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
        --> 
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('images/gym1.jpg')">  
                        <div class="carousel-caption">
                            <h2 class="display-4">What <font color= orange>we</font> offer</h2>
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('images/gym2.jpg')">
                        <div class="carousel-caption">
                            <h2 class="display-4"><font color=orange>Reviews</font></h2>
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('images/gym3.jpg')">
                        <div class="carousel-caption">
                            <h2 class="display-4">Our <font color = orange>Staff</font></h2>
                            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis nulla eu diam ultrices blandit eu aliquam magna. Cras porta augue semper ullamcorper dapibus. Nulla facilisi. In id metus ut urna pretium bibendum. Nam in felis id lacus laoreet aliquet.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <?php 
        include "footer.html"; 
        ?> 
    </body>
</html> 
