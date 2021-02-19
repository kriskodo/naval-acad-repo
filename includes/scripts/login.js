
    const triggerLogin = document.getElementsByClassName('login-dropdown')[0];
    const loginFormDiv = document.getElementsByClassName('login-form')[0];
    let entered = false;
    console.log('login');

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

    const formId = document.getElementById('form-login');
    const loginError = document.getElementsByClassName('header__login-error')[0];

    formId.addEventListener('submit', function(e) {
        e.preventDefault();
        const usernameVal = document.getElementsByName('login-uname')[0].value;
        const passwordVal = document.getElementsByName('login-password')[0].value;
        console.log(usernameVal);
        console.log(passwordVal);

        if (usernameVal.length >= 6 && passwordVal.length >= 6) {
            this.submit();
        } else {
            loginError.innerHTML = "The username and password do not meet the requirements.";
        }
    })