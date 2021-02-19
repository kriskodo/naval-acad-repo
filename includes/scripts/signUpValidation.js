
    const submit = document.getElementById('signup-form');
    console.log('signup');
    if(submit !== null) {
    submit.addEventListener('submit', function(e) {
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
        let valid = true;
        console.log('signup');

        if (!usernameCheck.exec(username)) {
            console.log(inputArr);
            valid = false;
            inputArr[0].style = "border: 1px solid red";
            errArray[0].innerHTML = "Username must be between 6 and 15 characters."
            errArray[0].style = "display: block;";
        } else {
            errArray[0].style = "display: none;";
            inputArr[0].style = "border: 1px solid green";
        }

        if (!(password.length >= 6 && password === rpassword)) {
            valid = false;
            errArray[1].innerHTML = "Please."
            errArray[1].style="display: block";
        } else {
            errArray[1].style="display: none";
        }

        if (!(fname && lname && age)) {
            valid = false;
            errArray[3].innerHTML = "Names cannot be blank."
            errArray[3].style="display: block";
        }

        if(isNaN(age) || age === "") {
            valid = false;
            errArray[5].innerHTML = "Not a valid age."
            errArray[5].style="display: block";
        } else {
            errArray[5].style="display: none";
        }

        if(valid) {
            e.submit();
        }
    });
    }