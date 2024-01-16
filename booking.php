<?php
if(!isset($_SESSION)) { // if session hasn't started yet, then start the session
    session_start();
}
$today = date('Y-m-d');
$username = $_SESSION['username']
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
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style2.css">
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
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>    
                        <li class="nav-item">
                            <?php
    if (isset($_SESSION['username'])) {
        $_SESSION['logout'] = "<a class='nav-link active' href='#'>BOOKING</a>";
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
        <! ––
        *    Title: Bootstrap Login and Register Forms in One Page: 3 Free Templates
        *    Author: Azmind
        *    Date: ...
        *    Availability: https://azmind.com/bootstrap-login-register-forms-templates/
        I have made some changes in the styling
        ––>
        <! ––
        *    Title: PHP code below
        *    Author: Made by me
        *    ALl the php code below is made by me.
        ––>
        <main class="section">
            <div class="top-content">
                <div class="inner-bg">
                    <div class="container">
                        <center><div class="title">
                            <h1>BODY <font color = orange>STAR</font> Appointment Booking Form</h1>
                            </div>
                        </center>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Book an appointment</h3>
                                            <p>Make a booking using the form below</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="processBooking.php" method="POST" class="booking-form" id="booking-form">
                                            <fieldset class="fields" id="fieldset2">
                                                <div class='form-group'>&nbsp;Make a booking:<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" required id="pt" name="option" value="personal-trainer">
                                                    <label for="pt">Personal trainer</label><br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="gym-contract" name="option" value="gym-contract">
                                                    <label for="gym-contract">GYM Contract</label><br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="swim" name="option" value="swimming pool">
                                                    <label for="other">Swimming Pool</label>
                                                </div>
                                                <div class='form-group'>
                                                    <input type="date" required class="date" name="date" min=<?php
                                                           echo date('Y-m-d'); ?>>
                                                </div>
                                                <div class='form-group'>
                                                    <input type="time" required class="time" min="09:00" max="18:00" name="time">
                                                </div>
                                                <div class='form-group'>
                                                    <button type="submit" name='submit' class="btn" >BOOK</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1 middle-border"></div>
                            <div class="col-sm-1"></div>

                            <div class="col-sm-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Your bookings</h3>
                                            <p>Manage your bookings</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <?php 
                                        $conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt148', '200020740', 'adbt148');
                                        if ($conn->connect_error) {

                                            printf("Connection failed: %s\n", $conn->connect_error);
                                            exit();
                                        } else {
                                            // get a list of all students in the database
                                            $query = "SELECT reason, date,time, booking_id FROM adbt148.Booking WHERE username = '$username'";
                                            // execute the query
                                            $result = $conn->query($query);
                                            $count = 0;
                                            if (mysqli_num_rows($result) < 1) {
                                                echo"No appointments have been requested. <br>Please use the form on the left to request an appointment.";
                                            }
                                            // store the results in $row variable
                                            while($row = mysqli_fetch_array($result)) {
                                                echo $row[0]. "\t" .$row[1]. "\t" .$row[2]; // Print a single column data
                                                echo "<br>";
                                                echo "  <form role='form' action='removeBooking.php' method='GET' class='delete-booking-form' id='delete-booking- form'>
                                                <div class='form-group'>
                                                    <button type='submit' name='submit' value='$row[3]' class='removeBooking'>REMOVE</button>
                                                </div></form>";

                                            }
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/form_validation.js"></script>

    </body>
</html>
