<?php
// Database
class SignUp extends Database {

    protected function checkUser($username, $email)
    {
        $sql = 'SELECT users_username FROM users WHERE users_username = ? OR users_email = ?';
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($username, $email)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0 )
        {
            $resultCheck = true;
        }
        else
        {
            $resultCheck = false;
        }
        return $resultCheck;
    }

    public function setUser($username, $password, $email)
    {
        $sql = 'INSERT INTO users (users_username, users_password, users_email) VALUES (?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        
         if (!$stmt->execute(array($username, $hashedPassword, $email)))
         {
             $stmt = null;
             header("location: ../index.php?error=stmtfailed");
             exit();
         }
         
         $stmt = null;
    }

}