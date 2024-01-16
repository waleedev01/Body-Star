<?php
if(!isset($_SESSION)) {
    session_start();
}
$username = $_SESSION['username']
?>
<?php
/* Code by me */ 

    $conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt148', '200020740', 'adbt148'); 
if ($conn->connect_errno) {
    printf("Connection failed: %s\n", $conn->connect_error);
    exit();
} else {
    $booking_id = $conn->real_escape_string($_GET['submit']);
    $sql = "DELETE FROM Booking WHERE booking_id='$booking_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript'>
                    alert('Booking Deleted successfully!')
                    window.location.href = 'booking.php ';
                    </script>";

    }
}




?>
