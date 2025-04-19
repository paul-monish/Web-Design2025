<?php
require("./dao.php");
$students=getStudentsWithDepartment();
//  echo "<pre>";
//     print_r($students);
//     echo "</pre>";
$status=isset($_GET["success"]) ?$_GET["success"]:"false";
$msg=$status==="true"?"Inserted Successfully":"";

$del_status=isset($_GET["delete"]) ?$_GET["delete"]:"false";
$del_msg=$del_status==="true"?"Deleted Successfully":"";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>

    <div>
        <h1><?=$msg?></h1>
        <h1><?=$del_msg?></h1>
        <div>
            <a href="./registration_form.php" >Add Student</a>
        </div>
        <br/>
        <table border="2px">
            <tr>            
                <th>SlNo.</th>
                <th>Profile Image</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Roll</th>
                <th>Student Department</th>
                <th>Action</th>
            </tr>
            <?php 
                foreach($students as $stu){
            ?>
                <tr>
                    <td><?php echo $stu["sid"] ?></td>
                    <td><img src="uploads/<?=$stu["img_name"]?>" alt="user" height="100px" width="100px"/></td>
                    <td><?=$stu["sname"] ?></td>
                    <td><?=$stu["email"] ?></td>
                    <td><?=$stu["roll"] ?></td>
                    <td><?=$stu["dname"] ?></td>
                    <td>
                        <!-- <a href="./update_form.php?id=$stu["sid"]">Update</a> -->
                         <form method="post" action="./update_form.php">
                            <input type="hidden" name="id" value="<?=$stu["sid"]?>">
                            <input type="submit" name="update" value="update"/>
                        </form>
                        &nbsp&nbsp
                        <a href="./controller.php?id=<?=$stu["sid"]?>">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>  
        </table>
    </div>
</body>
</html>
