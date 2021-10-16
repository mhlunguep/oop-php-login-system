<?php

class Login extends Database {

    public function getUser($username, $password)
    {
        $sql = 'SELECT users_password FROM users WHERE users_username = ? or users_email = ?';
        $stmt = $this->connect()->prepare($sql);

               
         if (!$stmt->execute(array($username, $password)))
         {
             $stmt = null;
             header("location: ../index.php?error=stmtfailed");
             exit();
         }

         if ($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        
         $passwordHashed = $stmt->fetchAll();
         $checkPassword = password_verify($password, $passwordHashed[0]["users_password"]);

         if ($checkPassword == false)
         {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
         }
         else if ($checkPassword == true)
         {
            $sql = 'SELECT * FROM users WHERE users_username = ? 
            OR users_email = ? AND users_password = ?';
            $stmt = $this->connect()->prepare($sql);

            
            if (!$stmt->execute(array($username, $username, $password)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll();

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["username"] = $user[0]["users_username"];

         }

         $stmt = null;
    }
    

}