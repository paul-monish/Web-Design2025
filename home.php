<?php
session_start();
$_SESSION['email']='xyz@gmail.com';
$loggedInEmail=$_SESSION['email'];
echo "Welcome $loggedInEmail <br/>";
session_destroy();
session_start();
$afterDestroy=$_SESSION['email'];
echo "destroy $afterDestroy";
?>