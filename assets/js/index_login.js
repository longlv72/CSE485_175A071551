const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');  

form.addEventListener('submit', (e) => {
    // e.preventDefault();

    checkInput();
});

function checkInput() {
    //get value form inputs
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    // validate email
    if (emailValue === '') {
        //show error
        //add error class
        setErrorFor(email, 'Please! Email cant be null');
    }  else if (!isEmail(emailValue)){
        setErrorFor(email, 'Email is invalid!');
    } else {
        setSuccessFor(email);
    }

    // validate password
    if (passwordValue === '') {
        //show error
        //add error class
        setErrorFor(password, 'Please! Password cant be null');
    } else {
        setSuccessFor(password);
    }

}

function setErrorFor(input, message){
    const formControl = input.parentElement; //tra ve form-control
    const small = formControl.querySelector('small');

    // add error message inside small
    small.innerText = message;

    // add error class
    formControl.className = 'form-control error';
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}   

function isEmail (email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
