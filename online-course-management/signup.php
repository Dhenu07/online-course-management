<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .input-icons i {
            position: absolute;
        }
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
        .icon {
            padding: 10px;
            color: #eae7e7;
    
        }
        .input-field {
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        </style>
  </head>
  <body>
    <div class="container">
      <section id="content">
      <h1>Sign Up</h1>
      <form action="./functions/signup.inc.php" method="post">
        <div ><div class="input-icons">
                <i class="fa fa-user icon" style='font-size:30px'>
              </i>
          <input type="text" id="username" name="username" placeholder="Username" required>
          </div>
        </div>
        <div>
        <div class="input-icons">
                <i class="fa fa-envelope icon" style='font-size:28px'>
              </i>
          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Email" required>
        </div></div>
        <div>
        <div class="input-icons">
                <i class="fa fa-key icon" style='font-size:30px'></i>
          <label for="password"></label>
          <input type="password" id="password" name="password" placeholder="Password" required>
        </div></div>
        <div><div class="input-icons">
                <i class="fa fa-key icon" style='font-size:30px'></i>
          <label for="pwd2"></label>
          <input type="password" id="pwd2" name="pwd2" placeholder="Confirm Password" required>
        </div></div>
          <input type="submit" name="submit" value='SignUp'>
          <div class="regre">
    <p class='p'>Already have an account? <a href="login.php">Log In</a></p>
    </div>
        </div>
      </form>
    </div>
</section>
<?php
if(isset($_GET["error"])){
  $str=$_GET["error"];
 
  if(strcmp($str,"emptyinput")==0){
    echo "<p>Fill all the fields</p>";
  }
  else if(strcmp($str,"InvalidName")==0){
    echo "<p>Enter a valid name</p>";
  }
  else if(strcmp($str,"InvalidEmail")==0){
    echo "<p>Enter a valid email</p>";
  }
  else if(strcmp($str,"passwordsDontMatch")==0){
    echo "<p>passwords dose'nt match!</p>";
  }
  else if(strcmp($str,"stmtFailed")==0){
    echo "<p>".$_SESSION['er']."</p>";
    echo "<p>something went wrong</p>";
  }
  else if(strcmp($str,"usernameTaken")==0){
    echo "<p>Username already exists</p>";
  }
 else if(strcmp($str,"none")==0){
  echo "<script>alert('you have signed up')</script>";
 }
  
}
?>

  </body>
</html>
