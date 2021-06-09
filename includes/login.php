<?php

    include_once '../classes/Dbh.class.php';
    include_once '../classes/Users.class.php';
    include_once '../classes/UsersController.class.php';
    include_once '../classes/UsersView.class.php';

    session_start();

    $un = $_POST['login-uname'];
    $password = $_POST['login-password'];

    $user = new UsersController();
    $userData = $user->checkUser($un);

    if(!(empty($userData))) {
        $storedHashPassword = $userData[0]['password'];
        if (password_verify($password, $storedHashPassword)) {
            $_SESSION['username'] = $un;
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php');
            return;
        }
    } else {
        header('Location: ../index.php');
    }