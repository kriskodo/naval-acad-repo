<?php

    include_once '../classes/Dbh.class.php';
    include_once '../classes/Users.class.php';
    include_once '../classes/UsersController.class.php';
    include_once '../classes/UsersView.class.php';
    $logError = 0;

    session_start();

    if (isset($_POST['login-uname']) &&
        isset($_POST['login-password'])) {
        $un = $_POST['login-uname'];
        $password = $_POST['login-password'];
        $user = new UsersController();
        $userData = $user->checkUser($un, $password);

        // Afer js validation. I will handle it in the front end.
        if(!(empty($userData))) {
            $_SESSION['username'] = $un;

        }
    }

    header('Location: ../index.php');