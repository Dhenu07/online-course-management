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
    $sql="update login_details set  Roll_No='$rollno',Class='".$class."',Section='".$section."',Academic_Year='".$year."',Gender='".$gender."' where username='".$username['username']."'";
    $result=mysqli_query($conn,$sql);
    $sel="select * from login_details";
    $resup=mysqli_query($conn,$sel);
    $result_set=mysqli_fetch_array($resup);
    if($result){
        while($result_set){

            echo "true";
            $_SESSION['details']=$result_set;
            header("Location: ../profile.php");
        }
    }
    else{
        echo "wrong";
    }
?>