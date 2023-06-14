<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="home.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
  <!-- <link rel="stylesheet" href="carousel.css"/> -->
  <script src=carousel.js></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">INTELLOPIYA</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" onclick="window.open('home.php')" target="_blank"><i class="fas fa-home"></i>Home</a>
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
                <li class="nav-item" >
                   <a class="nav-link" href="javascript:void(0)" onclick="window.open('profile.php')"><i class="far fa-user"></i>Profile</a>
                </li>
            </ul>
        </div>
</nav>
<div id="contentContainer" class="trans3d"> 
	<section id="carouselContainer" class="trans3d">
		<figure id="item1" class="carouselItem trans3d"><div class="carouselItemInner trans3d">1</div></figure>
		<figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d">2</div></figure>
		<figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d">3</div></figure>
		<figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d">4</div></figure>
		<figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d">5</div></figure>
		<figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d">6</div></figure>
		<figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d">7</div></figure>
		<figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d">8</div></figure>
		<figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d">9</div></figure>
		<figure id="item10" class="carouselItem trans3d"><div class="carouselItemInner trans3d">10</div></figure>
		<figure id="item11" class="carouselItem trans3d"><div class="carouselItemInner trans3d">11</div></figure>
		<figure id="item12" class="carouselItem trans3d"><div class="carouselItemInner trans3d">12</div></figure>	
	</section>
	</div>


<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Intellopiya</a>
    </div>
    <ul class="nav navbar-nav">
      <li class='active'><a href="#">Home</a></li>
      <li><a href="/courses/course_home.php">Courses</a></li>
      <li><a href="course.php">Course</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
  </div>
</nav> -->


</body>
</html>
