<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css\main.css">
  
  <title>Login System</title>
</head>
<body>
  <header>
    <nav class="nav justify-content-center">

      <?php 
        if (isset($_SESSION["userid"]))
        {
      ?>
        <a class="nav-link" href="includes/logout.inc.php">LOGOUT</a>
        <a class="nav-link active" href="home.php"><?php echo ucfirst($_SESSION["username"]); ?></a>
  
      <?php
        }
        else 
        {
      ?>
          <a class="nav-link active" href="#">SIGN UP</a>
          <a class="nav-link" href="#">LOGIN</a>
      <?php
        }
      ?>
        
    </nav>
  </header>
      
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <a href="includes/signupform.inc.php" class="inactive underlineHover"> Sig Up </a>  

      <!-- Icon -->
      <div class="fadeIn first">
        <i class="fa fa-user-circle fa-4x" aria-hidden="true" id="icon" alt="User Icon"></i>
        
      </div>

      <!-- Login Form -->
      <form action="includes/login.inc.php" method="post">
        <input type="text" class="fadeIn second" name="username" placeholder="Username">
        <input type="password" class="fadeIn third" name="password" placeholder="password">
        <button type="submit" name="submit" class="fadeIn fourth">LOGIN </button>
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign Up </h2>
      <a href="" class="inactive underlineHover"> Sig In </a>  

      <!-- Icon -->
      <div class="fadeIn first">
        <i class="fa fa-user-circle fa-4x" aria-hidden="true" id="icon" alt="User Icon"></i>
        
      </div>

      <!-- Sign up Form -->
      <form action="includes/signup.inc.php" method="post">
        <input type="text"  class="fadeIn second" name="username" placeholder="Username">
        <input type="password"  class="fadeIn third" name="password" placeholder="Password">
        <input type="password"  class="fadeIn third" name="passwordrepeat" placeholder="Repeat Password">
        <input type="text"  class="fadeIn third" name="email" placeholder="Email">
        <button type="submit" name="submit" class="fadeIn fourth">SIGN UP </button>
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>


  
</body>
</html>