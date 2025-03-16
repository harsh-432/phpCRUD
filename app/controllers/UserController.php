<?php
require_once "../app/models/Users.php";

class UserController {
    public function index() {
        $user = new User();
        $users = $user->getAllUsers();
        require "app/views/users/index.php";
    }

    public function create() {
        require "app/views/users/create.php";
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $user = new User();
            $user->createUser($name, $email, $mobile);
            header("Location: /users");
        }
    }

    public function edit($id) {
        $user = new User();
        $userData = $user->getUserById($id);
        require "app/views/users/edit.php";
    }

    public function update($id) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $user = new User();
            $user->updateUser($id, $name, $email, $mobile);
            header("Location: /users");
        }
    }

    public function delete($id) {
        $user = new User();
        $user->deleteUser($id);
        header("Location: /users");
    }
}
?>
