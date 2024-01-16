<?php
if(!isset($_SESSION)) { 
    session_start();
}
$today = date('Y-m-d');
$username = $_SESSION['username']
?>
<?php

    if(isset($_POST['submit'])){
        $conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt148', '200020740', 'adbt148'); 
        if ($conn->connect_errno) {
            printf("Connection failed: %s\n", $conn->connect_error);
            exit();
        } else {
            $radio = $conn->real_escape_string($_POST['option']);
            $date = $conn->real_escape_string($_POST['date']);
            $time = $conn->real_escape_string($_POST['time']);
            mysqli_query($conn, "INSERT INTO Booking (username, date, reason,time)
            VALUES ('$username', '$date','$radio','$time')")

                or die(mysqli_error($conn)); 

            echo "<script language='javascript'>
                    alert('Booking Registered successfully!')
                    window.location.href = 'booking.php ';
                    </script>";
        }
    }

?>
