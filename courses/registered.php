<?php
session_start();
$uname=$_SESSION['details']['username'];
include_once "../functions/dbconnection.php";
require_once "../functions/dbconnection.php";
$val=$_SESSION['course_data'][-1];
$sql="insert into course_registration(username,course_name) values('".$uname."','".rtrim($_SESSION['course_data'],$val)."')";
$result=mysqli_query($conn,$sql);

echo "
<!DOCTYPE html>
<html>
  <meta charset='UTF-8'>
  <head>
  <title>Registration Successful</title>
  <style>
    /* Center the dialog box horizontally and vertically */
    .dialog-box {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      height: 200px;
      border: 1px solid black;
      background-color: white;
      text-align: center;
      line-height: 200px;
      font-size: 24px;
      border-radius: 10px;
      border-color:darkgreen
    }
  </style>
</head>
<body>
    <div class='dialog-box'>
      <p>Successfully Registered!</p>
    </div>
</body>
</html>";
?>
