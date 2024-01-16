<?php
//Code from lab sample solution
if(!isset($_SESSION)) {
    session_start(); 
}
$conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt148', '200020740', 'adbt148'); 
if ($conn->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    exit();
} else {
    $username = $conn->real_escape_string($_POST["login_username"]);
    $password = $conn->real_escape_string($_POST["login_pwd"]);
    $hashed_login = md5($password);


    $query_username = "SELECT username FROM User WHERE username = '$username'";
    $res_username = mysqli_query($conn, $query_username);
    $query = "SELECT username, password FROM adbt148.User WHERE username = '$username' AND password = '$hashed_login'";
    // execute the query
    $result = $conn->query($query);
    // store the results in $row variable
    $row = mysqli_fetch_row($result);

    if (!isset($row[0]) || !isset($row[1])) {
        if(mysqli_num_rows($res_username) > 0){//code by me to check if the username exists
            echo "<script language='javascript'>
                    alert('Incorrect Password');
                    window.location.href = 'login.php';
                  </script>";
        }
        else{
            echo "<script language='javascript'>
                    alert('Please enter valid credentials.');
                    window.location.href = 'login.php';
                  </script>";
        }
    }
    else{

        $_SESSION['username'] = $username;
        echo "<script language='javascript'>
                    alert('Welcome $username');
                    window.location.href = 'index.php';
                  </script>";    }
}
?>
