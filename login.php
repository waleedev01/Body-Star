<?php
if(!isset($_SESSION)) { 
    session_start();
}
?>
<html>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

        <! ––
        *    Title: Bootstrap Login and Register Forms in One Page: 3 Free Templates
        *    Author: Azmind
        *    Date: ...
        *    Availability: https://azmind.com/bootstrap-login-register-forms-templates/
        I have made some changes in the styling
        ––>
        <! ––
        *    Some parts are taken from the week 9 sample solution
        ––>
        <! ––
        *    Title: PHP code below
        *    Author: Made by me
        *    ALl the php code below is made by me.
        ––>

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
                                $_SESSION['logout'] = "<a class='nav-link' href='logout.php'>LOGOUT</a>";
                                echo $_SESSION['logout']; // add to DOM
                            }else{
                                echo"<a class='nav-link  active' href='#'>LOGIN</a>";      }    
                            ?>
                        </li>    
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Top content -->

        <!-- Main content -->
        <main class="section">
            <div class="top-content">
                <div class="inner-bg">
                    <div class="container">
                        <center><div class="title">
                            <h1>BODY <font color = orange>STAR</font> Login &amp; Register Forms</h1>

                            </div>
                        </center>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h2>Login to our site</h2>
                                            <p>Enter email and password to log on:</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-key"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="processLogin.php" method="POST" class="login-form" id="login-form">
                                            <fieldset class="fields" id="fieldset2">
                                                <div class='form-group'>&nbsp;Username<br>
                                                    <label for="username"></label>
                                                    <input type='text' placeholder='Username' name='login_username' class="form-username form-control" id='login_username'>
                                                    <small id='loginUsernameTag'>Error Message</small>
                                                </div>
                                                <div class='form-group'>&nbsp;Password<br>
                                                    <label for="psw"></label>
                                                    <input type='password' placeholder='Password' name='login_pwd' class="form-password form-control" id='login_pwd'>
                                                    <small id='loginPasswordTag'>Error Message</small>
                                                </div>
                                                <div class='form-group'>
                                                    <button type="submit" class="btn" id="logBtn">Login</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="social-login">
                                    <h3>Or login with:</h3>
                                    <div class="social-login-buttons">
                                        <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                            <i class="fa fa-facebook"></i> Facebook
                                        </a>
                                        <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </a>
                                        <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                            <i class="fa fa-google-plus"></i> Google Plus
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- Registration form -->
                            <div class="col-sm-1 middle-border"></div>
                            <div class="col-sm-1"></div>

                            <div class="col-sm-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h2>Register</h2>
                                            <p>Please fill in this form to create an account:</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form method="post" action="register.php" id="register-form">
                                            <fieldset class="fields" id="fieldset1">

                                                <div class="form-group">Username<br>
                                                    <!-- Enter username -->
                                                    <label for="username"></label>
                                                    <input type="text" placeholder="Username" name="username" id="username" maxlength="20" class="form-username form-control">
                                                    <small id="usernameTag">Error Message</small> <!-- error message for username if there is an error in the input -->
                                                </div>

                                                <div class="form-group">First Name
                                                    <!-- Enter first and last names -->
                                                    <label for="firstname"></label>
                                                    <input type="text" placeholder="First name" name="firstname" maxlength="30" id="firstname" class="form-first-name form-control">
                                                    <small id="firstnameTag">Error Message</small> <!-- error message for first name if there is an error in the input -->
                                                </div>
                                                <div class="form-group">Last Name
                                                    <label for="lastname"></label>
                                                    <input type="text" placeholder="Last name" name="lastname" maxlength="30" id="lastname" class="form-last-name form-control">
                                                    <small id="lastnameTag">Error Message</small> <!-- error message for last name if there is an error in the input -->
                                                </div>

                                                <div class="form-group">Mobile phone number
                                                    <!-- Enter phone number -->
                                                    <label for="phone"></label>
                                                    <input type="text" placeholder="Mobile phone number" name="phone" maxlength="11" id="phone" class="form-phone-number form-control">
                                                    <small id="mobileTag">Error Message</small> <!-- error message for mobile phone number if there is an error in the input -->
                                                </div>

                                                <div class="form-group">Email
                                                    <!-- Enter email address -->
                                                    <label for="email"></label>
                                                    <input type="text" placeholder="Email" name="email" id="email" maxlength="40" class="form-email form-control">
                                                    <small id="emailTag">Error Message</small> <!-- error message for email address if there is an error in the input -->
                                                </div>

                                                <div class="form-group">Password<br>
                                                    <!-- Enter password -->
                                                    <label for="psw"></label>
                                                    <input type="password" placeholder="Enter password" name="psw" id="psw" maxlength="20" class="form-password form-control">
                                                    <small id="pwordTag">Error Message</small> <!-- error message for password if there is an error in the input -->
                                                </div>

                                                <div class="form-group">Repeat Password<br>
                                                    <!-- Confirm password -->
                                                    <label for="psw-repeat"></label>
                                                    <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" maxlength="20" class="form-repeat-password form-control">
                                                    <small id="confirmTag">Error Message</small> <!-- error message for confirmed password if there is an error in the input -->
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name='submit' class="btn" id="regBtn">Register</button>
                                                </div>
                                            </fieldset>
                                        </form>
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


        <!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->   

    </body>
</html>