<?php
    require("./dao.php");
    if(isset($_POST["registration"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $roll=$_POST["roll"];
        $dep_id=$_POST["dept_id"];

        //file upload
        $profile_id=uploadFile();

        $student=array("name"=>$name,"email"=>$email,"roll"=>$roll,"dept_id"=>$dep_id,"profile_id"=>$profile_id);
        //  $res=insertStudentData($student);
         $res=insertStudentDataUsingPreparedStmnt($student);
            if($res){
               header("Location:index.php?success=true");
            }
            else{
                header("Location:index.php?success=false");
            }

       
    } 

    function uploadFile(){
        $id=0;
        if(isset($_FILES['profile']) && $_FILES['profile']['error']==0){
            $fileExtension=strtolower(pathinfo($_FILES['profile']['name'],PATHINFO_EXTENSION));
            $uniqueFileName=uniqid("IMG-",true).'.'.$fileExtension;
            $targetDir="uploads/";
            $targetFile=$targetDir.$uniqueFileName;

            $allowedTypes=['jpg','jpeg','png'];
            if(!in_array($fileExtension,$allowedTypes)){
                echo "Only jpg,jpeg,png file are allowed";
                exit;
            }
            $img_size=$_FILES['profile']['size'];
            if( $img_size>2*1024*1024){
                echo "file size is too large";
                exit;
            }
            $img_path=$_FILES['profile']['tmp_name'];
            //
            $img=array("img_name"=>$uniqueFileName,"img_size"=>$img_size,"img_type"=>$fileExtension,"img_path"=>$img_path);
            $id=insertProfileImage($img);
            if($id>0){
                if(move_uploaded_file($img_path,$targetFile)){
                    echo "file upload successfully";
                }
                else{
                    echo "error on uploading file";
                }
            }
            else{
                echo "error on uploading file into db";
            }        
        }
        return $id;
    }
    
    if($_GET["id"]){
        $id=$_GET["id"];
        $isDelete=deleteStudent($id);
        if($isDelete){
            header("Location:index.php?delete=true");
        }else{
            header("Location:index.php?delete=true");
        }
    }

    if(isset($_POST["edit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $roll=$_POST["roll"];
        $dep_id=$_POST["dept_id"];
        $id=$_POST["id"];
        $student=array("name"=>$name,"email"=>$email,"roll"=>$roll,"dept_id"=>$dep_id,"id"=>$id);
        //  $res=insertStudentData($student);
         $res=updateStudentDataUsingPreparedStmnt($student);
            if($res){
               header("Location:index.php?success=true");
            }
            else{
                header("Location:index.php?success=false");
            }
    } 

?>