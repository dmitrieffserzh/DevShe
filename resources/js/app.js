import './bootstrap';

// MODAL WINDOW
document.addEventListener('DOMContentLoaded', function () {
    var modalButtons = document.querySelectorAll('.js-open-modal'),
        overlay = document.querySelector('#overlay-modal'),
        closeButtons = document.querySelectorAll('.js-modal-close');

    modalButtons.forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            var modalId = this.getAttribute('data-modal'),
                modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');

            modalElem.classList.add('active');
            overlay.classList.add('active');

        });
    });

    closeButtons.forEach(function (item) {
        item.addEventListener('click', function (e) {
            var parentModal = this.closest('.modal');
            parentModal.classList.remove('active');
            overlay.classList.remove('active');
        });
    });

    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;

        if (key == 27) {
            document.querySelector('.modal.active').classList.remove('active');
            document.querySelector('.overlay.active').classList.remove('active');
        }
    }, false);

    overlay.addEventListener('click', function () {
        document.querySelector('.modal.active').classList.remove('active');
        this.classList.remove('active');
    });
});


// SHOW PASSWORD
let showPassIcons = document.querySelectorAll('.show-password');

showPassIcons.forEach(function (item) {
    item.addEventListener('click', function (e) {
        if (item.previousElementSibling.getAttribute('type') === 'password') {
            item.previousElementSibling.setAttribute('type', 'text');
            item.classList.add('active');
        } else {
            item.previousElementSibling.setAttribute('type', 'password');
            item.classList.remove('active');
        }
    });
});

// LOGIN
let logonForm = document.querySelector('.form-login');
if (logonForm) {
    logonForm.addEventListener('submit', function (event) {
        event.preventDefault();
        axios({
            method: 'POST',
            url: 'login',
            data: new FormData(logonForm)
        }).then((response) => {
            document.querySelector('.form-login__alert').innerText = '';
            document.querySelector('.form-login__alert').innerText = response.data.message;
            document.querySelector('.form-login__alert').style.color = '#22b21b';
            setTimeout(() => {
                location.reload();
            }, 3000);

        }).catch((error) => {
            console.log(error.response.data.message);
            document.querySelector('.form-login__alert').innerText = '';
            document.querySelector('.form-login__alert').innerText = error.response.data.message;
            document.querySelector('.form-login__alert').style.color = '#ea1c1c';
        });
    });
}

// REGISTER
let registerForm = document.querySelector('.form-register');
if (registerForm) {
    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();
        axios({
            method: 'POST',
            url: 'register',
            data: new FormData(registerForm)
        }).then((response) => {
            document.querySelector('.form-register__alert').innerText = '';
            document.querySelector('.form-register__alert').innerText = response.data.message;
            document.querySelector('.form-register__alert').style.color = '#22b21b';
            setTimeout(() => {
                location.href = '/profile';
            }, 3000);

        }).catch((error) => {
            console.log(error.response.data.message);
            document.querySelector('.form-register__alert').innerText = '';
            document.querySelector('.form-register__alert').innerText = error.response.data.message;
            document.querySelector('.form-register__alert').style.color = '#ea1c1c';
        });
    });
}

// RATE CALCULATOR
let buffer = [];
let amount = 0;
let result = document.getElementById('amount');
let rates = document.querySelector('.rates');
let inputs = rates.querySelectorAll('input');

function calculate() {
    amount = 0;
    for (let i = 0; inputs.length > i; i++) {
        if (inputs[i].checked) {
            amount += parseInt(inputs[i].value);
        }
    }
    result.innerText = amount;
}

for (let i = 0; inputs.length > i; i++) {
    inputs[i].addEventListener('click', (event) => {
        if (buffer[inputs[i].name]) {
            inputs[i].checked = false;
            delete (buffer[inputs[i].name]);
        } else {
            buffer[inputs[i].name] = true;
        }

        calculate();

        console.log(buffer);
    });
}
