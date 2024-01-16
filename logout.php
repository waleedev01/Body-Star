<?php
session_start();
unset($_SESSION['username']); 

session_destroy();

echo "<script language='javascript'>
                    alert('You have been logged out successfully');
                    window.location.href = 'index.php';
                  </script>";    
?>