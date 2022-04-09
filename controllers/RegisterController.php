<?php

include('./config/connect.php');


class RegisterController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($firstname,$lastname,$username,$email,$password,$dob,$gender){
        $register_query = "INSERT INTO `users`(firstname,lastname,username,email,password,dob,gender)
        VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$dob','$gender')";
        
        $result = $this->conn->query($register_query);
        return $result;
    }

    function UsernameExists ($username)
    {
        $check_username = "SELECT username FROM `users` WHERE username = '$username' LIMIT 1";
        $resultU = $this->conn->query($check_username);

        if($resultU->num_rows > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function EmailExists($email){
        $check_email = "SELECT email FROM `users` WHERE email = '$email' LIMIT 1";
        $resultE = $this->conn->query($check_email);

        if($resultE->num_rows > 0){
            return true;
        }
        else{
            return false;
        }
    }

}

?>