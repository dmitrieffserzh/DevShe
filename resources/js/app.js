//import './bootstrap';
window.axios = require('axios');
window.$ = require('jquery');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import Swiper, {Autoplay, Thumbs} from 'swiper';
import 'swiper/css';
import 'select2/dist/js/select2.min'

window.onload = function () {
    $('.js-select').select2({width: '100%'});

    const main_slider = new Swiper('.main-slider', {
        modules: [Autoplay], autoplay: {
            delay: 3000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            }
        }
    });

    const new_girls = new Swiper('#new-girls', {
        slidesPerView: 4, loop: true, modules: [Autoplay], autoplay: {
            delay: 3000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 4,
            }
        }
    });

    const top_girls = new Swiper('#top-girls', {
        slidesPerView: 4, loop: true, modules: [Autoplay], autoplay: {
            delay: 3000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 4,
            }
        }
    });

    const profile_thumbs = new Swiper(".thumbs", {
        spaceBetween: 10, slidesPerView: 5, freeMode: true, watchSlidesProgress: true, modules: [Thumbs],
    });
    const profile_images = new Swiper(".images", {
        spaceBetween: 1, modules: [Thumbs], navigation: {
            nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev",
        }, thumbs: {
            swiper: profile_thumbs,
        },
    });
}

document.addEventListener('DOMContentLoaded', function () {
    let modalButtons = document.querySelectorAll('.js-open-modal'), overlay = document.querySelector('#overlay-modal'),
        closeButtons = document.querySelectorAll('.js-modal-close');

    modalButtons.forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            let modalId = this.getAttribute('data-modal'),
                modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');

            modalElem.classList.add('active');
            overlay.classList.add('active');

        });
    });

    closeButtons.forEach(function (item) {
        item.addEventListener('click', function (e) {
            let parentModal = this.closest('.modal');
            parentModal.classList.remove('active');
            overlay.classList.remove('active');
        });
    });

    document.body.addEventListener('keyup', function (e) {
        let key = e.keyCode;

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
            method: 'POST', url: 'login', data: new FormData(logonForm)
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
            method: 'POST', url: 'register', data: new FormData(registerForm)
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
let amount = 0;
let result = document.getElementById('amount');
let rates = document.querySelector('.rates');

if (rates) {
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

    for (let i = 0; i < inputs.length; i++) {
        inputs[i].setAttribute("data-prev", inputs[i].checked);
        inputs[i].addEventListener('click', function (e) {
            let inputsCopy = rates.querySelectorAll('input');
            for (let j = 0; j < inputsCopy.length; j++) {
                if (inputsCopy[j].checked === false) {
                    inputsCopy[j].setAttribute("data-prev", false);
                }
            }
            let prev = e.target.getAttribute("data-prev") === 'true' ? true : false;
            if (prev && e.target.checked) {
                e.target.checked = false;
                e.target.setAttribute("data-prev", false);
            } else {
                e.target.checked = true;
                e.target.setAttribute("data-prev", true);
            }
            calculate();
        })
    }
}

// AJAX SEARCH
let searchInput = document.querySelector('.header-search__input');
let searchResult = document.querySelector('.header-search__result');
if (searchInput) {
    let timeout;
    searchInput.addEventListener('keyup', function (event) {

        if (timeout) {
            clearTimeout(timeout);
        }
        searchResult.innerHTML = '';

        timeout = setTimeout(() => {
            axios({
                method: 'POST', url: '/search', data: {
                    search: searchInput.value
                }
            }).then((response) => {
                if (response.data !== '') {
                    for (let i = 0; i <= response.data.length; i++) {
                        searchResult.insertAdjacentHTML('afterbegin', '' + '<a href="/' + sections[response.data[i].section] + '/id' + response.data[i].id + '" class="item">' + '<span>' + response.data[i].name + '</span>' + '<span>id: ' + response.data[i].id + '</span>' + '</a>');
                    }
                } else {
                    searchResult.insertAdjacentHTML('afterbegin', '' + '<div class="item">По вашму запросу ничего не найдено</div>');
                }
            }).catch((error) => {
                console.log(error);
            });
        }, 1500);
    });
}

// SEARCH GIRL ON METRO STATIONS
let stations = document.getElementsByClassName('label');
if (stations) {
    for (let i = 0; stations.length > i; i++) {
        stations[i].addEventListener('click', () => {

            console.log(stations[i].textContent);
            axios({
                method: 'POST',
                url: '/search/metro',
                data: {station: stations[i].textContent}
            }).then((response) => {
                if (response.data !== '') {
                    window.location.href = '/search/metro/' + response.data
                }
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });
        })
    }
}

// AJAX LOAD MORE
let buttonLoadMore = document.getElementById('load-more');
let resultContainer = document.querySelector('.profiles-list');
if (buttonLoadMore) {
    buttonLoadMore.addEventListener('click', (event) => {
        event.preventDefault();

        let currentPage = parseInt(buttonLoadMore.getAttribute('data-current-page'));
        let totalPage = parseInt(buttonLoadMore.getAttribute('data-total-page'));

        if (currentPage < totalPage) {
            axios({
                method: 'POST', url: window.location.href + '?page=' + ++currentPage,
            }).then((response) => {
                buttonLoadMore.setAttribute('data-current-page', currentPage);
                if (response.data !== '') {
                    resultContainer.insertAdjacentHTML("beforeend", response.data);
                }
                if (currentPage === totalPage) {
                    buttonLoadMore.style.display = 'none';
                }
            }).catch((error) => {
                console.log(error);
            });
        }
    });
}


