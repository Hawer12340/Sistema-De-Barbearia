let btn = document.querySelector('.lnr-eye');

btn.addEventListener('click', function() {

    let input = document.querySelector('#Senha');

    if(input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }

});

// Trocar Modo Escuro
const toggle = document.getElementById("toggleDark");
const body = document.body;

// Carregar tema salvo
if (localStorage.getItem("darkmode") === "true") {
  body.classList.add("dark-mode");
  toggle.checked = true;
}

// Evento do botão
toggle.addEventListener("change", () => {
  body.classList.toggle("dark-mode");
  localStorage.setItem("darkmode", body.classList.contains("dark-mode"));
});
