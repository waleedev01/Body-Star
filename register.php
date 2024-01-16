<?php
// connect to the database
//use your moodle student name both as the login (second parameter) and the name of the database you are connecting to (last parameter)
//the password is your student id number, which is nine digits long as the third parameter - the password
$conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt148', '200020740', 'adbt148'); 
if ($conn->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    exit();
} else {
    // declare the variables for registration and assign values to these variables from the data entered by the user in the fields
    //these refer to the *name* attribute you gave to each input field in the form
    $username = $conn->real_escape_string($_POST['username']);
    $firstName = $conn->real_escape_string($_POST['firstname']);
    $lastName = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNumber = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['psw']);
    $hashed_pword = md5($password); // encrypt the given password



    $query_username = "SELECT username FROM User WHERE username = '$username'";
    $res_username = mysqli_query($conn, $query_username);
    
  
    $query_username = "SELECT username FROM User WHERE email = '$email'";
    $res_email = mysqli_query($conn, $query_username);
    
    

    //code from lab sample solution
    if (mysqli_num_rows($res_username) > 0) {
        echo "<script language='javascript'>
                    alert('Username already taken. Registration failed.');
                    window.location.href = 'login.php';
                    </script>";
    }
    if (mysqli_num_rows($res_email) > 0) {
        echo "<script language='javascript'>
                    alert('There is already an account with this email. Registration failed.');
                    window.location.href = 'login.php';
                    </script>";
    }
    else {

        mysqli_query($conn, "INSERT INTO User (username, password, first_name, last_name, email, phone_number)
            VALUES ('$username', '$hashed_pword','$firstName', '$lastName', '$email','$phoneNumber')")

            or die(mysqli_error($conn));

        echo "<script language='javascript'>
                    alert('Registered successfully!')
                    window.location.href = 'login.php ';
                    </script>";
    }
}
?>
