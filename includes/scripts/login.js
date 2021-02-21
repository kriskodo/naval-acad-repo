
    const triggerLogin = document.getElementsByClassName('login-dropdown')[0];
    const loginFormDiv = document.getElementsByClassName('login-form')[0];
    let entered = false;

    if(triggerLogin && loginFormDiv)
    {
        triggerLogin.addEventListener('mouseover', function () {
            loginFormDiv.classList.add('showing');
            entered = true;
        });


        loginFormDiv.addEventListener('mouseover', function () {
            entered = true;
            loginFormDiv.classList.add('showing');
        })

        loginFormDiv.addEventListener('mouseleave', function () {
            entered = false;
            setTimeout(function () {
                if (!entered) {
                    loginFormDiv.classList.remove('showing');
                }
            }, 1000);
        });
    }

    const formLogin = document.getElementById('form-login');
    const formLoginBtn = document.getElementById('loginBtn');
    const loginError = document.getElementsByClassName('header__login-error')[0];

    if(formLoginBtn) {
    formLoginBtn.addEventListener('click', function(e) {
        e.preventDefault();
        formLoginBtn.classList.add('disabled');
        const usernameVal = document.getElementsByName('login-uname')[0].value;
        const passwordVal = document.getElementsByName('login-password')[0].value;

        if(usernameVal.length === 0 && passwordVal.length === 0) {
            loginError.innerHTML = 'The input fields cannot be empty.';
            loginError.classList.add('error-effect');
            setTimeout(function() {
                loginError.classList.remove('error-effect');
            }, 3000);
        } else if(usernameVal.length < 6 || passwordVal.length < 6) {
            loginError.innerHTML = 'The input does not match the requirements. Please check again';
            loginError.classList.add('error-effect');
        } else {
            formLogin.submit();
            setTimeout(function() {
                const IsNull = '@Session["username"]'!= null;
                if(IsNull) {
                    loginError.innerHTML = 'The username or password is incorrect.';
                    loginError.classList.add('error-effect');
                }
            }, 2000);
        }

        setTimeout(function() {
            formLoginBtn.classList.remove('disabled');
        }, 3000);
    })
    }