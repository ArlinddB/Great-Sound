<?php

class LoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function userLogin($email, $password)
    {
        $checkLogin = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            if($data['email'] === $email && $data['password'] === $password){
                $_SESSION['email'] = $data['email'];

                $_SESSION['name'] = $data['firstname'];

                $_SESSION['id'] = $data['id'];

                return true;
            }
        }
        else{
            return false;
        }
    }
}

?>