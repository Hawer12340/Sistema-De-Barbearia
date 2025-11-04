let btn = document.querySelector('.lnr-eye');

btn.addEventListener('click', function() {

    let input = document.querySelector('#Senha');

    if(input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }

});