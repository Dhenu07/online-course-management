<?php


include './dbconnection.php';
require_once './dbconnection.php';
session_start();
function emptyInputSignup($name,$email,$pwd,$rpwd){
    $result=true;
    if(empty($name) || empty($email) || empty($pwd) || empty($rpwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}


function InvalidUname($name){
    $result=true;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
           $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function InvalidEmail($email){
     $result=true;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd,$rpwd){
     $result=true;
    if($pwd!==$rpwd){
           $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function UnameExists($conn,$name){
    $query="SELECT * FROM login_details WHERE name LIKE '%".$name."%';";
    $res=mysqli_query($conn,$query);
    if(!$res){
        return false;
        exit();
    }
    else{
        return true;
    }
}
function createUser($conn,$name,$email,$pwd){
    $sql="insert into login_details(name,username,password) values("."'".$name."','".$email."','".$pwd."'".");";
    $res=mysqli_query($conn,$sql);
    $_SESSION['er']=$sql;
    if($res){
        header("location:../signup.php?error=none");
        exit();
    }
    else{
        header("location:../signup.php?error=stmtFailed");
    }
}

if ($_GET['action']=="btn_course") {
    echo $_POST['btn_course'];
	$_SESSION['course_data'] = $_POST['btn_course'];
	echo "<script>window.location.href='../courses/course-page.php';</script>";
}
