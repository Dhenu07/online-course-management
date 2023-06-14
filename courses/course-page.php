<?php
session_start();
include_once "../functions/dbconnection.php";
$val=$_SESSION['course_data'][-1];
$sql="select * from course_details where course_id=".$val;
$res=mysqli_query($conn,$sql);
$result_set=mysqli_fetch_array($res);
include_once "../meta.php";
?>
<html>
    <body>
        <div class="container">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent test-center">
                        <h3><?=$result_set['course_name']?>
                    </div>
                    <div class="card-body">
                    <p class="mb-0"><strong class="pr-1">instructor:</strong><?=$result_set['instructor'];?></p>
                    <p class="mb-0"><strong class="pr-1">offered by:</strong><?=$result_set['offered by'];?></p>
                    <p class="mb-0"><strong class="pr-1">course duration:</strong><?=$result_set['course_duration'];?></p>
                    <p class="mb-0"><strong class="pr-1">course modules:</strong><?=$result_set['course_modules'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                    <p class="mb-0"><strong class="pr-1">course detail:</strong><?=$result_set['course_description'];?></p>
                    </div>
                </div>
            </div>
            <a href="ajax-page.html"><button class='bth btn-info'>register now</button></a>
        </div>
    </body>
</html>