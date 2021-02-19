<?php

    include_once '../classes/Dbh.class.php';
    include_once '../classes/Users.class.php';
    include_once '../classes/UsersController.class.php';
    include_once '../classes/UsersView.class.php';

    session_start();

    if (isset($_POST['uname']) &&
        isset($_POST['password'])) {
        $un = $_POST['uname'];
        $password = $_POST['password'];
        $user = new UsersController();
        $userData = $user->checkUser($un, $password);

        // Afer js validation. I will handle it in the front end.
        if(isset($_SESSION['username'])) {
            $_SESSION['username'] = $un;
            header('location: ../index.php');
        }
    }