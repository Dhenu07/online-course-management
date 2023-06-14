<?php
session_start();
$_SESSION['cid']=0;
function getId($id){
  $_SESSION['cid']=$id;
}
?>
<!DOCTYPE html>
<head>
    <link rel='stylesheet' href='course_home_style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../home.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../home.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<body>
<?php include '../meta.php'?> 
<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Intellopiya</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../home.php">Home</a></li>
      <li class='active'><a href="#">Courses</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="../profile.php">Profile</a></li>
    </ul>
  </div>
</nav> -->
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">INTELLOPIYA</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.open('../home.php','_self')" target="_self"><i class="fas fa-home"></i>Home</a>
                </li>
                <!-- <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('/courses/course_home.php','_self')" target="_self"><i class="far fa-clone"></i>Course</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li> -->
                <li class="nav-item" >
                   <a class="nav-link" href="javascript:void(0)" onclick="window.open('../profile.php','_self')"target="_self"><i class="far fa-user"></i>Profile</a>
                </li>
            </ul>
        </div>
</nav>

<div class="grid-container">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="./course_images/1.png" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Front end development</h1> 
        <p>Architect & Engineer</p>
        <form method='post' action='../functions/functions.inc.php?action=btn_course'> 
          <button name="btn_course" value="front end development1">register now</button>
        </form>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="./course_images/1.png" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>ui and ux design</h1> 
        <p>Architect & Engineer</p> 
        <form method='post' action='../functions/functions.inc.php?action=btn_course'> 
          <button name="btn_course" value='ui ux design2'>register now</button>
        </form>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="./course_images/1.png" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>full stack development</h1> 
        <p>Architect & Engineer</p> 
        <form method='post' action='../functions/functions.inc.php?action=btn_course'> 
          <button name="btn_course" value="full stack development3">register now</button>
        </form>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="./course_images/1.png" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>android app dev</h1> 
        <p>Architect & Engineer</p> 
        <form method='post' action='../functions/functions.inc.php?action=btn_course'> 
          <button name="btn_course" value='android app dev4'>register now</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>