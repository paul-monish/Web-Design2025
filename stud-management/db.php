<?php
//Procedural
// $conn= mysqli_connect($host,$username,$password);
// if(!$conn){
//     die("Connection Failed: ".mysqli_connect_error());
    
// }
// echo "Connection successfully";

//Object oriented
// $conn=new mysqli($host,$username,$password,$db);

// if($conn->connect_error){
//     die("Connection Failed: ".$conn->connect_error);
// }
// echo "Connection successfully";


$username="root";
$password="";
$host="localhost";
$db="web_design";

function connectDb(){
    global $host,$username,$password,$db;
    $conn=new mysqli($host,$username,$password,$db);
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
   return $conn;
}

?>
