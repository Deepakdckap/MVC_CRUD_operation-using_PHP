<?php

require 'connection.php';
class UserModule extends DB
{
    public function insert($datas)
    {
//        var_dump($datas);
        $name = $datas['username'];
        $email = $datas['email'];
        $pass = $datas['password'];

        $this->db->query("INSERT INTO users (name,email,password) VALUES('$name','$email','$pass')");

    }

    public function read($id)
    {
       $statement = $this->db->query("SELECT * FROM users WHERE id = '$id'");
       $stmt = $statement->fetchAll(PDO::FETCH_OBJ);

       return$stmt;
    }

    public function update($id)
    {
    $updatedId = $id["update"]; 
        $newName = $id['username'];
        $newEmail = $id['email'];
        $newPass = $id['password'];
        $this->db->query("UPDATE users SET name = '$newName',email = '$newEmail',password = '$newPass' WHERE id = '$updatedId'");
    }

    public function deleteOnDB($id)
    {
        $this->db->query("DELETE FROM users WHERE id = '$id'");
    }

    public function getAllUsers()
    {
        $allUsers = $this->db->query("SELECT * FROM users");
        $fetch  = $allUsers->fetchAll(PDO::FETCH_OBJ);

        return $fetch;

    }

}