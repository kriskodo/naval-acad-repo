<?php

    include_once '../classes/Dbh.class.php';
    include_once '../classes/Users.class.php';
    include_once '../classes/UsersController.class.php';
    include_once '../classes/UsersView.class.php';
    $logError = 0;

    session_start();

    $un = $_POST['login-uname'];
    $password = $_POST['login-password'];

    $user = new UsersController();
    $userData = $user->checkUser($un);

    if(!(empty($userData))) {
        $storedHashPassword = $userData[0]['password'];

        if (!password_verify($password, $storedHashPassword) === $storedHashPassword) {
            header('location: ../index.php');
            die();
        }

        $_SESSION['username'] = $un;
        $logError = 0;
    } else {
        $logError = 1;
    }

    header('Location: ../index.php');