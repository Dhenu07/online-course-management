
<?php
session_start();
?>

<?php
if(isset($_POST["submit"])){
   
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $rpwd = $_POST['pwd2'];

    include './dbconnection.php';
    require_once './functions.inc.php';

   if(emptyInputSignup($name,$email,$pwd,$rpwd)!==false){
    header("location:../signup.php?error=emptyinput");
    exit();
    }

    if(InvalidUname($name)!==false){
        header("location:../signup.php?error=InvalidName");
        exit();
        }

    if(InvalidEmail($email)!==false){
        header("location:../signup.php?error=InvalidEmail");
        exit();
        }

    if(pwdMatch($pwd,$rpwd)!==false){
        header("location:../signup.php?error=passwordsDontMatch");
        exit();
    }

    if(UnameExists($conn,$name)==false){
        
        header("location:../signup.php?error=usernameTaken");
        exit();
    }

    createUser($conn,$name,$email,$pwd);
}
   

else{
   header("location:../signup.php");
   exit();
}
?>