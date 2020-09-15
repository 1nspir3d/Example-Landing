var button = document.getElementById('form-button');

button.addEventListener('click', function (event) {
    event.preventDefault();
    $('.modal-overlay').toggleClass('modal-overlay--show-modal')
});

