<?php

class LoginController extends Login {

    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    private function emptyInput()   
    {
        $result; 

        if (empty($this->username) || empty($this->password))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }
    public function loginUser()    
    {

        if (!$this->emptyInput() == false)
        {
            // echo "Empty input!"
            header("Location: ../index.php?error=emptyinput");
            exit();
        }       
            $this->getUser($this->username, $this->password);
    }
    

}