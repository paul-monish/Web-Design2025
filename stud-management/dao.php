<?php
    require('./db.php');
    $conn=connectDb();

    function getStudents(){
        global $conn;
        $sql="select * from student";
        $result=$conn->query($sql);
        $students=array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                array_push($students,$row);
            }
        }
        return $students;
    }

    function getStudentsWithDepartment(){
        global $conn;
        // $sql="select s.name as sname,s.roll as roll,s.email as email,s.id as sid,d.name as dname from student s inner join  department d on s.dep_id=d.id";
        $sql="select s.name as sname,s.roll as roll,s.email as email,s.id as sid,d.name as dname,p.img_name as img_name from student s inner join  department d on s.dep_id=d.id inner join profile_image p on s.profile_id=p.id";
        $result=$conn->query($sql);
        $students=array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                array_push($students,$row);
            }
        }
        return $students;
    }
   
    function insertStudentData($student){
        global $conn;
        $name=$student["name"];
        $email=$student["email"];
        $roll=$student["roll"];
        $dept_id=$student["dept_id"];
        $sql="insert into student(name,email,roll,dep_id) values ('$name','$email','$roll',$dept_id)";
        $result=$conn->query($sql);
        if($result){
            return true;
        }
        else{
            echo "ERROR: $conn->error";
        }
    }

    function insertStudentDataUsingPreparedStmnt($student){
        global $conn;
        $name=$student["name"];
        $email=$student["email"];
        $roll=$student["roll"];
        $dept_id=$student["dept_id"];
        $profile_id=$student["profile_id"];
        $sql="insert into student(name,email,roll,dep_id,profile_id) values (?,?,?,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("ssiii",$name,$email,$roll,$dept_id,$profile_id);
        $result=$stmt->execute();
        if($result){
            return true;
        }
        else{
            echo "ERROR: $conn->error";
        }
    }

    
    function insertProfileImage($image){
        global $conn;
        $img_name=$image["img_name"];
        $img_size=$image["img_size"];
        $img_type=$image["img_type"];
        $img_path=$image["img_path"];
        $sql="insert into profile_image(img_name,img_size,img_path,img_type) values (?,?,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("siss",$img_name,$img_size,$img_path,$img_type);
        $result=$stmt->execute();
        if($result){
            return $stmt->insert_id;
        }
        else{
            return 0;
        }
    }

    function deleteStudent($id){
        global $conn;
        $sql="delete from student where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("i",$id);
        $result=$stmt->execute();
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function getStudentById($id){
        global $conn;
        $sql="select * from student where id=$id";
        $result=$conn->query($sql);
        $student=null;
        if($result->num_rows>0){
            if($row=$result->fetch_assoc()){
              $student=$row;
            }
        }
        return $student;
    }

    function getStudentByIdUsingPrepare($id){
        global $conn;
        $sql="select * from student where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $student=null;
        if($result->num_rows>0){
            if($row=$result->fetch_assoc()){
              $student=$row;
            }
        }
        return $student;
    }


    function updateStudentDataUsingPreparedStmnt($student){
        global $conn;
        $name=$student["name"];
        $email=$student["email"];
        $roll=$student["roll"];
        $dept_id=$student["dept_id"];
        $id=$student["id"];
        // $sql="insert into student(name,email,roll,dep_id) values (?,?,?,?)";
        $sql="update student set name=?,email=?,roll=?,dep_id=? where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("ssiii",$name,$email,$roll,$dept_id,$id);
        $result=$stmt->execute();
        if($result){
            return true;
        }
        else{
            echo "ERROR: $conn->error";
        }
    }

    // $stu= getStudentByIdUsingPrepare(4);
    // echo "<pre>";
    // print_r($stu);
    // echo "</pre>";
    
   
?>