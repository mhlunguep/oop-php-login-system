<?php 

if (isset($_POST["submit"]))
{
    //Grabbing the data
    $username = $_POST["username"];
    $password = $_POST["password"];
 
    // Instatiate SignupController class
   
     include_once '..\classes\database.class.php';    
     include_once '..\classes\login.class.php';
     include_once '..\classes\logincontroller.class.php';
       
    $login = new LoginController($username, $password);

    // Running error handlers and user signup
    $login->loginUser();

    // Going back to the front page
    header("Location: ../index.php?error=none");
    
}