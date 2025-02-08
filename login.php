
<?php

// $email=$_REQUEST['email'];
// $password=$_REQUEST['password'];

// $email=$_GET['email'];
// $password=$_GET['password'];

$dbEmail="abc@gmail.com";
$dbPassword="123456";

$email=$_POST['email'];
$password=$_POST['password'];

if($dbEmail==$email && $password==$dbPassword){
    session_start();
    $_SESSION['email']=$email;
    header('Location: home.php');
}
else{
    header('Location: form.html');
}

?>