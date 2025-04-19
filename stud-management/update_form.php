<?php
include "./dao.php";
$id=$_POST["id"];

$student=getStudentByIdUsingPrepare($id);
// print_r($student);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <form action="./controller.php" method="post">
        <input type="text" name="name" value="<?=$student["name"]?>" placeholder="Enter Name"/>
        <input type="email" name="email" value="<?=$student["email"]?>" placeholder="Enter Email"/>
        <input type="number" name="roll" value="<?=$student["roll"]?>" placeholder="Enter Roll"/>
        <input type="hidden" name="id" value="<?=$id?>"/>
        <select name="dept_id">
            <option value="1">CSE</option>
            <option value="3">CE</option>
            <option value="2">EE</option>
        </select>
        <input type="submit" value="Edit" name="edit"/>
    </form>
</body>
</html>