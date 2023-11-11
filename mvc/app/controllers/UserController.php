<?php
namespace co;
class UserController {
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function index() {
        $users = $this->model->getUsers();
        include 'app/views/usertab.php';
    }
    public function addUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username= $_POST['username'];
        $data = Array ("email" => $email,
                       "password" => $password,
                       "user_name" => $username
        );
        if ($this->model->addUser($data)) {
            echo "User added successfully!";
            header("refresh: 1; url =/darrbeni/mvc/");
        } else {
            echo "Failed to add user.";
        }
    }
    public function UpdataUser (){
        $users = $this->model->getUsers($_GET['id']);
        foreach ($users as $user ) {
            $email = $user['email'];
            $password = $user['password'];
            $username = $user['user_name'];
        }

        
        if (isset($_POST['edit'])) {
        $data = Array ( 
                        "email" => $_POST['email'],
                        "password" => $_POST['password'],
                        'type' => 'user',
                        "user_name" => $_POST['username']); 
                        
            if ($this->model->UpdataUser($data,$_GET['id'])) {
                echo "User upadtaed successfully!";
                header("refresh: 1; url = /darrbeni/mvc/");
            } 
            else {
                echo "Failed to updata user.";
            }
        }
        else {
            require "app/views/edituser.php";
        }    
    }
    public function deleteUser(){
            if ($this->model->deleteuser($_GET['id'])) {
                echo "User deleted successfully!";
                header("refresh: 1; url = /darrbeni/mvc/");
            } 
            else {
                echo "Failed to delete user.";
                }
            
    }
}

?>