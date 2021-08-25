let email = document.querySelector('#email');
let password = document.querySelector('#password');
let btnSubmit = document.querySelector('button[type=submit]');
let alertContainer = document.querySelector('.alert-container');

function showAlert() {
    alertContainer.innerHTML = '<div class="alert alert-danger">Email atau Password Salah</div>';
}

function removeAlert() {
    alertContainer.innerHTML = '';
}

function validate() {
    if (email.value !== "ridho@gmail.com" || password.value !== "ridho123") {
        showAlert();
        console.log('Email/password salah');
    } else {
        removeAlert();
        alert('Anda Berhasil Login');
    }
}

btnSubmit.addEventListener('click', validate);