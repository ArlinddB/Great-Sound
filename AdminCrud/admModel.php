<?php

include("../config/connect.php");

class admModel{


    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }


    public function fetchAdmins(){
        $data = null;

        $query = "SELECT * FROM `admins`";
        if($sql = $this->conn->query($query)){
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id)
    {
        $query = "DELETE FROM `admins` WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM `admins` WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE `admins` SET username ='$data[username]', password='$data[password]' WHERE id='$data[id]'";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

    public function addAdmin($username,$password){
        $register_query = "INSERT INTO `admins`(username,password)
        VALUES ('$username', '$password')";
        
        $result = $this->conn->query($register_query);
        return $result;
    }
}

?>
