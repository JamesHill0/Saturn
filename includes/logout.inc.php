<?php
    session_start(); 
 
if (isset($_POST['logout-submit'])) {
session_destroy();
header("Location: ../index.php");
exit();
}