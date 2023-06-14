<?php
session_start();
$details=$_SESSION['details'];
$roll=$details['Roll_No'];
$class=$details['Class'];
$section=$details['Section'];
$academic=$details['Academic_Year'];
$gender=$details['Gender'];
?>
<!DOCTYPE html>
<head>
    <style>
 body{
    background-image: url("https://i.pinimg.com/originals/f1/44/d4/f144d43dd8e7d3fa429cd6ef4a8e9e31.jpg");
background-repeat: no-repeat;
background-size: cover;}
h2{ font-family: 'Brush Script MT', cursive;}
  </style>
    <title>update details</title>
</head>
<body>
    <h2><centre>Update Profile</centre></h2>
    <form method="post" text-align="centre" action="./profile_ops/update_actions.php">
    <table style="font-size:22" align="center" border="0" cellspacing="10">
        <tr><td>Enter roll no:</td>
        <td><input type="text" name='rollno' value=<?=$roll?>></td></tr>
        <tr><td>Enter class:</td>
        <td><input type="text" name='class' value=<?=$class?>></td></tr>
        <tr><td>Enter section:</td>
        <td><input type="text" name='section' value=<?=$section?>></td></tr>
        <tr><td>Enter academic year:</td>
        <td><input type="text" name='year' value=<?=$academic?>></td></tr>
        <tr><td>Enter gender :</td>
        <td><input type="radio" name="gender" id="contact_email" value="male" />
        <label for="contact_email">male</label>
        <input type="radio" name="gender" id="contact_phone" value="female" />
        <label for="contact_phone">female</label>
        </td></tr>
        <tr><td><input type="submit"></td></tr>
    </table>
    </form>
</body>