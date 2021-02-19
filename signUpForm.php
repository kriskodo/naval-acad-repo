<?php
    include_once 'includes/header.php';
?>

    <div class="signup">
        <div class="shell">
            <div class="signup__inner">
                <div class="ico signup__ico">
                    <img src="includes/svg/brush.svg">
                </div>

                <div class="form">
                    <div class="form__title">
                        <h1>Sign up</h1>
                    </div>

                    <div class="form__body">
                        <form action="includes/signup.php" method="POST" id="signup-form">
                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="uname" class="form__label">Username</label>
                                <input type="text" name="uname" class="form__input" autocomplete="off">
                            </div>

                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="password" class="form__label">Password</label>
                                <input type="password" name="password" class="form__input">
                            </div>

                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="rpassword" class="form__label">Repeat Password</label>
                                <input type="password" name="rpassword" class="form__input">
                            </div>

                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="fname" class="form__label">First name</label>
                                <input type="text" name="fname" class="form__input" autocomplete="off">
                            </div>

                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="lname" class="form__label">Last name</label>
                                <input type="text" name="lname" class="form__input" autocomplete="off">
                            </div>

                            <div class="form__field">
                                <div class="form__err"></div>
                                <label for="age" class="form__label">Age:</label>
                                <input type="text" name="age" class="form__input" autocomplete="off">
                            </div>
                            <div class="form__btn">
                                <input type="submit" class="btn" id="signUpBtn" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once 'includes/footer.php';
?>