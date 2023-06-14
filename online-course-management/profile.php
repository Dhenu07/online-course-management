<?php
    session_start();
    if(!$_SESSION['details'])
        header('Location:index.php');
    $details=$_SESSION['details'];
    $val='"/images/'.$details['Image_ID'].'"';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="home.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<link rel='stylesheet' href="profileStyle.css"
<?php include 'meta.php'?>
<!DOCTYPE html>
<html>
    <body>
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">INTELLOPIYA</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.open('home.php')"><i class="fas fa-home" ></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('/courses/course_home.php')" target="_blank"><i class="far fa-clone"></i>Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item active" >
                   <a class="nav-link" href="javascript:void(0)" onclick="window.open('profile.php')"><i class="far fa-user"></i>Profile</a>
                </li>
            </ul>
        </div>
</nav>

        <div class="student-profile py-4">
        <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                <img class="profile_img" src=<?=$val;?>alt="student dp">
                <h3><?=$details['name'];?></h3>
                </div>
                <div class="card-body">
                <p class="mb-0"><strong class="pr-1">Student ID:</strong><?=$details['Roll_No'];?></p>
                <p class="mb-0"><strong class="pr-1">Class:</strong><?=$details['Class'];?></p>
                <p class="mb-0"><strong class="pr-1">Section:</strong><?=$details['Section'];?></p>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                <table class="table table-bordered">
                    <tr>
                    <th width="30%">Academic Year	</th>
                    <td width="2%">:</td>
                    <td><?=$details['Academic_Year'];?></td>
                    </tr>
                    <tr>
                    <th width="30%">Gender</th>
                    <td width="2%">:</td>
                    <td><?=$details['Gender'];?></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        </div>
    <a class="nav-link" href="./functions/function.php?action=logout"><button class='btn-info'>logout</button></a>
    <a class="nav-link" href="./update.php"><button class='btn-info'>update profile</button></a>
    </div>
    </div>
    </body>
</html>