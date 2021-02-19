<?php
    include 'Autoloader.php';
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <link rel="stylesheet" href="includes/styles/index.css">
    <link rel="stylesheet" href="includes/styles/header/header.css">
    <link rel="stylesheet" href="includes/styles/button.css">
    <link rel="stylesheet" href="includes/styles/hero.css">
    <link rel="stylesheet" href="includes/styles/form/form.css">
    <link rel="stylesheet" href="includes/styles/signup.css">
    <link rel="stylesheet" href="includes/styles/login.css">
    <link rel="stylesheet" href="includes/styles/footer.css">

<div class="header">
    <div class="shell">
        <div class="header__inner">
            <div class="logo">
                <a href="index.php">Kristian G.</a>
            </div>

            <ul class="menu">
                <li><a href="demo.php">Demo page</a></li>
                <li><a href="about.php"">About Page</a></li>
                <?php if(!isset($_SESSION['username'])) { ?>
                <li><a href="signUpForm.php"">Sign Up</a></li>
                <li class="login-dropdown">Login</li>
                <li class="login-form">
                    <div class="login">
                        <div class="login__inner">
                            <div class="form">
                                <div class="form__title">
                                    <h2>Login</h2>
                                </div>

                                <div class="form__body">
                                    <form action="includes/login.php" method="POST" id="login-form">
                                        <div class="form__field">
                                            <div class="form__err"></div>
                                            <label for="uname" class="form__label">Username</label>
                                            <input type="text" name="uname" class="form__input form__input--small" autocomplete="off">
                                        </div>

                                        <div class="form__field">
                                            <div class="form__err"></div>
                                            <label for="password" class="form__label">Password</label>
                                            <input type="password" name="password" class="form__input form__input--small" autocomplete="off">
                                        </div>

                                        <div class="form__btn">
                                            <input type="submit" class="btn" id="loginBtn" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                } else {

                ?>
                <li><a href="../demo.php">Profile</a></li>
                <li><a href="../about.php"">Shop</a></li>
                <li><form method="POST" action="includes/logout.php"><input type="submit" value="Logout"></form></li>

                <?php }?>
            </ul>
        </div>
    </div>
</div>
    <body>