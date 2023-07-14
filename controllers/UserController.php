<?php

require 'modles/UserModule.php';
class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModule();
    }
// insert function
    public function create()
    {
        $this->userModel->insert($_POST);
        header('location:/lists');
    }

    public function edit($data)
    {
//        var_dump($data);
        $statement = $this->userModel->read($data);
        require 'view /edit.php';

    }

    public function delete($id)
    {
//        var_dump($id);
        $this->userModel->deleteOnDB($id);
        header('location:/lists');
    }

    public function listOfAllUser()
    {
        $alluser = $this->userModel->getAllUsers();
//        var_dump($alluser);
        require "view /lists.php";
    }


    public function index()
    {
        require "view /form.php";
    }

    public function updateUser($id)
    {
        $this->userModel->update($_POST);
//        var_dump($_POST);
        header('location:/lists');
    }
}