<?php


    session_start();
    $username=$_SESSION['details'];
    echo $username['username'];
    include_once "../functions/dbconnection.php";
    $rollno=$_POST['rollno'];
    $class=$_POST['class'];
    $section=$_POST['section'];
    $year=$_POST['year'];
    $gender=$_POST['gender'];

    $sql="update login_details set  Roll_No='".$rollno."',Class='".$class."',Section='".$section."',Academic_Year='".$year."',Gender='".$gender."' where username='".$username['username']."'";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result==true){
        echo "true";
        header("Location: ../profile.php");
    }
    else{
        echo "wrong";
    }
?>