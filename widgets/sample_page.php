<?php
session_start();

if (empty($_SESSION['user_session'])) {
  		 header("Location: ../index.php"); 
   
} else {
    echo $_SESSION['user_session'];
}

?>
