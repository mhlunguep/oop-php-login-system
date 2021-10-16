<?php
// Controller
class SignUpController extends SignUp {

    private $username;
    private $password;
    private $passwordrepeat;
    private $email;

    public function __construct($username, $password, $passwordrepeat, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->passwordrepeat = $passwordrepeat;
        $this->email = $email;
    }

    public function signUpUser()   
    {

        if ($this->emptyInput() == true)
        {
            // echo "Empty input!"
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUsername() == true)
        {
            // echo "Invalid Usename!"
            header("Location: ../index.php?error=invalidusername");
            exit();
        }
        if ($this->invalidEmail() == true)
        {
            // echo "Invalid Email!"
            header("Location: ../index.php?error=invalidemail");
            exit();
        }
        if ($this->passwordNotMatch() == true)
        {
            // echo "Password do not match!"
            header("Location: ../index.php?error=passwordnotmatch");
            exit();
        }
        if ($this->usernameTakenCheck() == true)
        {
            // echo "Username Taken!"
            header("Location: ../index.php?error=usernameoremailtaken");
            exit();
        }

            $this->setUser($this->username, $this->password, $this->email);
        
    }
    private function emptyInput()   
    {
        $result; 

        if (empty($this->username) || 
            empty($this->password) ||
            empty($this->passwordrepeat) || 
            empty($this->email))
         {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    private function passwordNotMatch()
    {
        $result;
        if ($this->password !== $this->passwordrepeat)
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    private function usernameTakenCheck()
    {
        $result;
        if ($this->checkUser($this->username, $this->email))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

}