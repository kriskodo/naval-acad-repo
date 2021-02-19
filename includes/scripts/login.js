window.onload = function() {
    const triggerLogin = document.getElementsByClassName('login-dropdown')[0];
    const loginForm = document.getElementsByClassName('login-form')[0];
    let entered = false;

    if(triggerLogin && loginForm)
    {
        triggerLogin.addEventListener('mouseover', function () {
            loginForm.classList.add('showing');
        });


        loginForm.addEventListener('mouseover', function () {
            entered = true;
            loginForm.classList.add('showing');
        })

        loginForm.addEventListener('mouseleave', function () {
            entered = false;
            setTimeout(function () {
                if (!entered) {
                    loginForm.classList.remove('showing');
                }
            }, 1000);
        });

        // Validate
    }

}