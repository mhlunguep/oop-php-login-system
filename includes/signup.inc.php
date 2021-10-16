<?php 

if (isset($_POST["submit"]))
{
    //Grabbing the data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];
    $email = $_POST["email"];

    // Instatiate SignupController class
   
     include_once '..\classes\database.class.php';    
     include_once '..\classes\signup.class.php';
     include_once '..\classes\signupcontroller.class.php';
       
    $signup = new SignUpController($username, $password, $passwordrepeat, $email);

    // Running error handlers and user signup
    $signup->signUpUser();

    // Going back to the front page
    header("Location: ../index.php?error=none");
    
}