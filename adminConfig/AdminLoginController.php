<?php

include("../config/connect.php");

class AdminLoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function AdminLogin($username, $password)
    {
        $checkLogin = "SELECT * FROM `admins` WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = $this->conn->query($checkLogin);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            if($data['username'] === $username && $data['password'] === $password){
                $_SESSION['username'] = $data['username'];

                $_SESSION['id'] = $data['id'];

                return true;
            }
        }
        else{
            return false;
        }
    }

    public function fetch(){
        $data = null;

        $query = "SELECT * FROM `admins`";
        if($sql = $this->conn->query($query)){
            while ($row = mysqli_fetch_assoc($sql)) {
                $data = $row['username'];
            }
        }
        return $data;
    }
}

?>