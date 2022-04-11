<?php

include("../config/connect.php");

class Model{


    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }


    public function fetch(){
        $data = null;

        $query = "SELECT * FROM `users`";
        if($sql = $this->conn->query($query)){
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id)
    {
        $query = "DELETE FROM `users` WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function edit($id){

        $data = null;

        $query = "SELECT * FROM `users` WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){

        $query = "UPDATE `users` SET firstname='$data[firstname]', 
        lastname='$data[lastname]', username ='$data[username]', email='$data[email]', password='$data[password]', dob='$data[dob]',gender='$data[gender]' WHERE id='$data[id]'";

        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }
}

?>
