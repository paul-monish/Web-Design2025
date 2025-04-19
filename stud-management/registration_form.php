<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <form action="./controller.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Name"/>
        <input type="email" name="email" placeholder="Enter Email"/>
        <input type="number" name="roll" placeholder="Enter Roll"/>
        <input type="file" name="profile" />
        <select name="dept_id">
            <option value="1">CSE</option>
            <option value="3">CE</option>
            <option value="2">EE</option>
        </select>
        <input type="submit" value="Register" name="registration"/>
    </form>
</body>
</html>