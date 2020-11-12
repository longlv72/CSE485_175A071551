const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');  
const password2 = document.getElementById('password2');

form.addEventListener('submit', (e) => {
    // e.preventDefault();

    checkInput();
});

function checkInput() {
    //get value form inputs
    const usernameValue = username.value.trim();
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    // validate username
    if (usernameValue === '') {
        //show error
        //add error class
        setErrorFor(username, 'Username khong duoc de trong');
    } else {
        setSuccessFor(username);
    }

    if (nameValue === '') {
        //show error
        //add error class
        setErrorFor(name, 'Name khong duoc de trong');
    } else {
        setSuccessFor(name);
    }

    // validate email
    if (emailValue === '') {
        //show error
        //add error class
        setErrorFor(email, 'email khong duoc de trong');
    }  else if (!isEmail(emailValue)){
        setErrorFor(email, 'Email không hợp lệ!');
    } else {
        setSuccessFor(email);
    }

    // validate password
    if (passwordValue === '') {
        //show error
        //add error class
        setErrorFor(password, 'Password không được để trống');
    } else {
        setSuccessFor(password);
    }

    // validate email
    if (password2Value === '') {
        //show error
        //add error class
        setErrorFor(password2, 'Confirm password không được để trống');
    } else if(password2Value !== passwordValue) {
        setErrorFor(password2, 'Password chưa đúng');
    } else {
        setSuccessFor(password2);
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
