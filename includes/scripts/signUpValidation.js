
    const submit = document.getElementById('signup-form');
    const submitBtn = document.getElementById('signUpBtn');

    if(submit !== null && submitBtn !== null) {
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const inputArr = document.getElementsByClassName('form__input');
        const errArray = document.getElementsByClassName('form__err');
        const username = document.getElementsByName('uname')[0].value;
        const usernameCheck = /^[^0-9][a-zA-Z0-9]{6,15}/gi;
        const password = document.getElementsByName('password')[0].value;
        const rpassword = document.getElementsByName('rpassword')[0].value;
        const fname = document.getElementsByName('fname')[0].value;
        const lname = document.getElementsByName('lname')[0].value;
        const age = document.getElementsByName('age')[0].value;
        console.log('signup');

        if (!usernameCheck.exec(username)) {
            inputArr[0].style = "border: 1px solid red";
            errArray[0].innerHTML = "Username must be between 6 and 15 characters."
            errArray[0].style = "display: block;";
            return;
        } else {
            errArray[0].style = "display: none;";
        }

        if (!(password.length >= 6)) {
            errArray[1].innerHTML = "Passwords must consist of at least 6 symbols.";
            errArray[1].style="display: block";
            return;
        } else if(password !== rpassword){
            errArray[1].innerHTML = "Passwords do not match.";
            errArray[1].style = "display: block";
            return;
        } else {
            errArray[1].style="display: none";
        }

        if (!(fname && lname)) {
            errArray[3].innerHTML = "Names cannot be blank."
            errArray[3].style="display: block";
            return;
        } else {
            errArray[3].style="display: none";
        }

        if(isNaN(age) || age === "") {
            errArray[5].innerHTML = "Not a valid age."
            errArray[5].style="display: block";
            return;
        } else {
            errArray[5].style="display: none";
        }

        submit.submit();
    });
    }