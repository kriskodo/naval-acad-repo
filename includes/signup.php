<?php
    include_once '../classes/Dbh.class.php';
    include_once '../classes/Users.class.php';
    include_once '../classes/UsersController.class.php';
    include_once '../classes/UsersView.class.php';

    if(isset($_POST['uname']) &&
        isset($_POST['password']) &&
        isset($_POST['fname']) &&
        isset($_POST['lname']) &&
        isset($_POST['age'])) {

        $un = $_POST['uname'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $age = $_POST['age'];

        $newUser = new UsersController();
        $newUser->createUser($un, $hash, $firstname, $lastname, $age);
        header('location: ../index.php');
    }