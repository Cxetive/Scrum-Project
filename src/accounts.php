<?php

include_once ('database.php');

Class accounts Extends database 
{
    
    private $email;
    private $password;

    public function getAllAccounts()
    {
        $query = "SELECT * FROM accounts";
        return parent::voerQueryUit($query);
    }

    public function getAccount($email)
    {
        $query = "SELECT * FROM accounts WHERE email = '$email'";
        return parent::voerQueryUit($query);
    }

    public function saveAccount()
    {
        if (
            $this->getEmail() == "" || $this->getPassword() == ""
        ) {
            return false;
        }

        $email = $this->getEmail();
        $password = $this->getPassword();
        $hashedpassword = hash('sha256', $password);

        $query = "INSERT INTO accounts (email, password)
        VALUES ('$email', '$hashedpassword')";

        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }

    public function updateAccount($email)
    {
        if (
            $this->getEmail() == "" || $this->getPassword() == ""
        ) {
            return false;
        }

        $email = $this->getEmail();
        $password = $this->getPassword();
        $hashedpassword = hash('sha256', $password);

        $query = "UPDATE accounts SET email = '$email', password = '$hashedpassword' WHERE email = '$email'";

        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }

    public function deleteAccount($email)
    {
        $query = "DELETE FROM accounts WHERE email = '$email'";
        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }


}