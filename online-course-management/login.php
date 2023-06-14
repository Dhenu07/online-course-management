<?php

    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    require("../online-course-management/functions/dbconnection.php");
    $logged=0;
    $query="SELECT * FROM login_details WHERE username LIKE '%".$username."%';";
    $res=mysqli_query($conn,$query);
    if($res){
        $result_set=mysqli_fetch_array($res);
        if($result_set){
            while($result_set){
                if($password==$result_set['password']){
                    $logged=1;
                    $_SESSION['details']=$result_set;
                    echo "<script>alert('logged in');</script>";
                    header("Location:home.php");
                    break;
                }
                else{
                    echo "<script>alert('no');</script>";
                    header("Location:../index.php");
                }
            }
        }
    }
    else{
        echo "<script>alert('invalild username or password');</script>";
        echo "<script>console.log('no');</script>";
        header("Location:../index.php");
    }
?>