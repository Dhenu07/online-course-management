<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="style.css">
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
<title> CSS Login Screen Tutorial </title>
</head>
<body>
  <body>
    <div class="container">
       <section id="content">
        <form class="login-form" method="post" action="login.php">
        <h1>Log in</h1>
        <div>
        <div class="input-icons">
                <i class="fa fa-user icon" style='font-size:30px'>
              </i>
          <input type="text" class='fas fa-user' placeholder="Username" id="username" name="username"/>
      </div>
        </div>
        <div>
          <div class="input-icons">
                <i class="fa fa-key icon" style='font-size:30px'></i>
          <input type="password" placeholder="Password" id="password" name="password"/>
        </div>  
        </div>
        <div>
          <input type="submit" value="Log in" />
          <p class="message"><a href="./signup.php">Sign In</a></p>
         </div> 
        </form>
       </section>
    </div>
</body>
</body>
</html>

