<?php
session_start();
if ($_GET['action']=='logout') {
	session_destroy();
	echo "<script>swal({title:'logged out',text:''})</script>";
    header('Location:../index.php');
}
?>