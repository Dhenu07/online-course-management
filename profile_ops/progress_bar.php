<?php
session_start();
if(!$_SESSION['details'])
    header('Location:index.php');
$details=$_SESSION['details'];
$val='"/images/'.$details['Image_ID'].'"';
require_once "./functions/dbconnection.php";
    $sqlc="select * from course_registration where username ='".$details['username']."'";
    $resultCourse=mysqli_query($conn,$sqlc);
    $arr=array();
    $arrayProgress=array();
    while($result_set=mysqli_fetch_assoc($resultCourse)){
        array_push($arr,$result_set['course_name']);
        if($result_set['course_completion']==null){
            array_push($arrayProgress,0);
        }
        else
            array_push($arrayProgress,$result_set['course_completion']);
    }
?>