//import './bootstrap';
window.axios = require('axios');
window.$ = require('jquery');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import Swiper, {Autoplay, Thumbs} from 'swiper';
import 'swiper/css';
import 'select2/dist/js/select2.min';
import Panzoom from '@panzoom/panzoom/dist/panzoom';
import Sortable from 'sortablejs';
import Inputmask from "inputmask";

window.onload = function () {

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


    $('.js-select').select2({width: '100%'}).trigger("change");

    $('.js-select-price').on('select2:open', function () {
        let priceBox = document.getElementById('price');
        let selectBox = document.querySelector('.select2-container--open');

        if (!selectBox.querySelector('#price')) {
            let sp = undefined;
            selectBox.insertBefore(priceBox, sp);
            priceBox.style.display = 'block';
            let slider = document.querySelector('.min-max-slider');
            init(slider);
        } else {
            priceBox.style.display = 'block'
        }
    })
    $('.js-select-price').on('select2:close', function () {
        let priceBox = document.getElementById('price');
        priceBox.style.display = 'none'
    });


    const formFilter = document.getElementById('filter');
    if (formFilter) {
        let inputFilter = formFilter.querySelectorAll('input');

        inputFilter.forEach(function (elem) {
            elem.addEventListener('input', function () {
                getResult(formFilter);
            });
        });
    }

    $('.js-select').on('select2:close', function () {
        getResult(formFilter);
    })


    function getResult(formFilter) {
        let timeout;
        let data = new FormData(formFilter);
        let cont = document.querySelector('.profiles-list');

        if (timeout) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(() => {
            axios({
                method: "POST",
                url: '/filter',
                data: data,
            }).then((response) => {
                cont.innerHTML = '';
                cont.insertAdjacentHTML('beforeend', response.data);
                //console.log(response);
            });
        }, 1500);
    }
}
let phoneInput = document.querySelector('input[name="profile[phone]"]');
if(phoneInput) {
    var im = new Inputmask("+7 (999) 999-99-99");
    im.mask(phoneInput);
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
            method: 'POST', url: '/login', data: new FormData(logonForm)
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
            method: 'POST', url: '/register', data: new FormData(registerForm)
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
        searchResult.innerHTML = '';

        if (timeout) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(() => {
            axios({
                method: 'POST', url: '/search', data: {
                    search: searchInput.value
                }
            }).then((response) => {
                if (response.data !== '') {
                    for (let i = 0; i <= response.data.length; i++) {
                        if (i < 5) {
                            searchResult.insertAdjacentHTML('afterbegin', '' + '<a href="/' + sections[response.data[i].section] + '/' + response.data[i].slug + '" class="item"><span>' + response.data[i].name + '</span><span>id: ' + response.data[i].id + '</span></a>');
                        } else {
                            searchResult.insertAdjacentHTML('beforeend', '' + '<a href="/search?search=' + searchInput.value + '" class="item"><span>Смотреть все результаты</span></a>');
                            break;
                        }
                    }
                } else {
                    searchResult.insertAdjacentHTML('afterbegin', '' + '<div class="item">По вашму запросу ничего не найдено</div>');
                }
            }).catch((error) => {
                console.log(error);
            });
        }, 500);
    });
}

// METRO MAP ZOOM
if (window.window.innerWidth < 991) {
    const metroMap = document.getElementById('map');
    const buttonZoomIn = document.getElementById('zoomIn');
    const buttonZoomOut = document.getElementById('zoomOut');
    if (metroMap) {
        const panzoom = Panzoom(metroMap, {
            maxScale: 5,
            minScale: 1
        });
        panzoom.zoom(1, {
            animate: true
        });
        panzoom.pan(100, 100);

        buttonZoomIn.addEventListener('click', panzoom.zoomIn);
        buttonZoomOut.addEventListener('click', panzoom.zoomOut);

        metroMap.addEventListener('wheel', function (event) {
            if (!event.shiftKey) return
            panzoom.zoomWithWheel(event)
        });
    }
}


// SEARCH GIRL ON METRO STATIONS
let stations = document.getElementsByClassName('label');
let modal = document.querySelector('.modal[data-modal="metrosearch"]');
let overlay = document.querySelector('.overlay');
if (stations) {
    for (let i = 0; stations.length > i; i++) {
        stations[i].addEventListener('click', () => {
            axios({
                method: 'POST',
                url: '/search-metro',
                data: {station: stations[i].textContent}
            }).then((response) => {
                if (response.data.slug != '') {
                    modal.querySelector('.modal__title').innerHTML = response.data.name;
                    modal.querySelector('.modal__content').innerHTML = '' +
                        '<p style="padding: 0 0 1rem">Найдено девушек: ' + response.data.count + '</p>' +
                        '<a href="/search-metro/devushki-na-stancii-metro-' + response.data.slug + '" class="button" style="display: inline-block">Показать</a>';
                    modal.classList.add('active');
                    overlay.classList.add('active');
                } else {
                    modal.querySelector('.modal__title').innerHTML = 'Дувушки не найдены';
                    modal.querySelector('.modal__content').innerHTML = '' +
                        '<p style="padding: 0 0 1rem">Девушки не найдены! Попробуйте выбрать другую станцию метро.</p>';
                    modal.classList.add('active');
                    overlay.classList.add('active');
                }
                //console.log(response);
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

function deleteFile() {
    let deleteButtons = document.querySelectorAll('.delete');
    for (let i = 0; deleteButtons.length > i; i++) {
        deleteButtons[i].addEventListener('click', () => {
            axios({
                method: "POST",
                url: '/profile/delete',
                data: {delete: {id: deleteButtons[i].parentElement.getAttribute('data-id')}},
            }).then((response) => {
                deleteButtons[i].parentElement.remove();
                //console.log(response);
            });
        })
    }
}

// UPLOAD PHOTOS
let inputFile = document.getElementById('file-input');
let thumbContainer = document.querySelector('.uploader__thumbs');
if (inputFile) {
    inputFile.addEventListener('change', (event) => {
        if (event.target.files.length) {
            let data = new FormData();

            for (let i = 0; i < event.target.files.length; i++) {
                let file = event.target.files[i];
                data.append('files[' + i + ']', file);
            }

            axios({
                method: "POST",
                url: '/profile/upload',
                data: data,
                headers: {
                    "Content-Type": "multipart/form-data; boundary=something",
                }
            }).then((response) => {
                if (inputFile.classList.contains('man'))
                    thumbContainer.innerHTML = '';
                for (let i = 0; response.data.length > i; i++) {
                    thumbContainer.insertAdjacentHTML("beforeend", '' +
                        '<div class="uploader__thumbs-item" data-id="' + response.data[i].id + '" data-sort="' + response.data[i].sort + '" style="background-image: url(' + response.data[i].relativeUrl + ')"><span class="delete"></span></div>');
                }
                //console.log(response);
            });
        }
    });
}

// SORT FILES
let sortableThumbs = document.querySelector('.uploader__thumbs');
if (sortableThumbs && sortableThumbs.children.length > 0) {
    Sortable.create(sortableThumbs, {
            sort: true,
            dataIdAttr: 'data-id',
            animation: 500,
            filter: '.delete',
            onFilter: function () {
                deleteFile();
            },
            onEnd: function (event) {
                for (let i = 0; event.from.children.length > i; i++) {
                    event.from.children[i].setAttribute('data-sort', i);
                }

                let arrSortable = [];
                for (let i = 0; sortableThumbs.children.length > i; i++) {
                    arrSortable.push({
                        id: sortableThumbs.children[i].getAttribute('data-id'),
                        sort: sortableThumbs.children[i].getAttribute('data-sort')
                    });
                }

                axios({
                    method: "POST",
                    url: '/profile/sort',
                    data: arrSortable
                }).then((response) => {
                    console.log(response);
                });
            },
        }
    );
}


// SAVE PROFILE
let profileForm = document.getElementById('profile-form');
let modalSave = document.querySelector('.modal[data-modal="profile-save"]');
if (profileForm) {
    profileForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let data = new FormData(profileForm);

        axios({
            method: "POST",
            url: '/profile/save',
            data: data,
        }).then((response) => {

            modalSave.querySelector('.modal__content').innerHTML = '' +
                '<div class="modal__alert">' + response.data.success + '</div>';
            modalSave.classList.add('active');
            overlay.classList.add('active');

            //console.log(response);
        });
    })
}


// ADD TESTIMONIAL
let testimonialForm = document.getElementById('testimonial-form');
let modalAddTestimonial = document.querySelector('.modal[data-modal="add-testimonial"]');
if (testimonialForm) {
    testimonialForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let data = new FormData(testimonialForm);

        axios({
            method: "POST",
            url: '/add-testimonial',
            data: data,
        }).then((response) => {
            modalAddTestimonial.innerHTML = '';

            modalAddTestimonial.querySelector('.modal__content').innerHTML = '' +
                '<div class="modal__alert">' + response.data.success + '</div>';
            modalAddTestimonial.classList.add('active');
            overlay.classList.add('active');
            setTimeout(() => {
                window.location.reload();
            }, 3000)
            //console.log(response);
        });
    })
}


var thumbsize = 20;

function draw(slider, splitvalue) {

    /* set function vars */
    var min = slider.querySelector('.min');
    var max = slider.querySelector('.max');
    var lower = slider.querySelector('.lower');
    var upper = slider.querySelector('.upper');
    var legend = slider.querySelector('.legend');
    var thumbsize = parseInt(slider.getAttribute('data-thumbsize'));
    var rangewidth = parseInt(slider.getAttribute('data-rangewidth'));
    var rangemin = parseInt(slider.getAttribute('data-rangemin'));
    var rangemax = parseInt(slider.getAttribute('data-rangemax'));

    /* set min and max attributes */
    min.setAttribute('max', splitvalue);
    max.setAttribute('min', splitvalue);

    /* set css */
    min.style.width = parseInt(thumbsize + ((splitvalue - rangemin) / (rangemax - rangemin)) * (rangewidth - (2 * thumbsize))) + 'px';
    max.style.width = parseInt(thumbsize + ((rangemax - splitvalue) / (rangemax - rangemin)) * (rangewidth - (2 * thumbsize))) + 'px';
    min.style.left = '0px';
    max.style.left = parseInt(min.style.width) + 'px';
    min.style.top = lower.offsetHeight + 'px';
    max.style.top = lower.offsetHeight + 'px';
    legend.style.marginTop = min.offsetHeight + 'px';
    slider.style.height = (lower.offsetHeight + min.offsetHeight + legend.offsetHeight) + 'px';

    /* correct for 1 off at the end */
    if (max.value > (rangemax - 1)) max.setAttribute('data-value', rangemax);

    /* write value and labels */
    max.value = max.getAttribute('data-value');
    min.value = min.getAttribute('data-value');
    lower.innerHTML = min.getAttribute('data-value');
    upper.innerHTML = max.getAttribute('data-value');

}

function init(slider) {
    /* set function vars */
    var min = slider.querySelector('.min');
    var max = slider.querySelector('.max');
    var rangemin = parseInt(min.getAttribute('min'));
    var rangemax = parseInt(max.getAttribute('max'));
    var avgvalue = (rangemin + rangemax) / 2;
    var legendnum = slider.getAttribute('data-legendnum');

    /* set data-values */
    min.setAttribute('data-value', rangemin);
    max.setAttribute('data-value', rangemax);

    /* set data vars */
    slider.setAttribute('data-rangemin', rangemin);
    slider.setAttribute('data-rangemax', rangemax);
    slider.setAttribute('data-thumbsize', thumbsize);
    slider.setAttribute('data-rangewidth', slider.offsetWidth);

    /* write labels */
    var lower = document.createElement('span');
    var upper = document.createElement('span');
    lower.classList.add('lower', 'value');
    upper.classList.add('upper', 'value');
    lower.appendChild(document.createTextNode(rangemin));
    upper.appendChild(document.createTextNode(rangemax));
    slider.insertBefore(lower, min.previousElementSibling);
    slider.insertBefore(upper, min.previousElementSibling);

    /* write legend */
    var legend = document.createElement('div');
    legend.classList.add('legend');
    var legendvalues = [];
    for (var i = 0; i < legendnum; i++) {
        legendvalues[i] = document.createElement('div');
        var val = Math.round(rangemin + (i / (legendnum - 1)) * (rangemax - rangemin));
        legendvalues[i].appendChild(document.createTextNode(val));
        legend.appendChild(legendvalues[i]);

    }
    slider.appendChild(legend);

    /* draw */
    draw(slider, avgvalue);

    /* events */
    min.addEventListener("input", function () {
        update(min);
    });
    max.addEventListener("input", function () {
        update(max);
    });
}

function update(el) {
    /* set function vars */
    var slider = el.parentElement;
    var min = slider.querySelector('#min');
    var max = slider.querySelector('#max');
    var minvalue = Math.floor(min.value);
    var maxvalue = Math.floor(max.value);

    /* set inactive values before draw */
    min.setAttribute('data-value', minvalue);
    max.setAttribute('data-value', maxvalue);

    var avgvalue = (minvalue + maxvalue) / 2;

    /* draw */
    draw(slider, avgvalue);
}

