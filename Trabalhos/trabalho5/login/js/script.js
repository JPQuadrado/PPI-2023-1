
window.addEventListener('DOMContentLoaded', () => {

    const nodeButton = document.getElementById("entrar");

    nodeButton.addEventListener("click", check);
})


function check(e) {
    // Definindo campos de interesse:

    const campoUser = document.forms.login.user;
    const campoSenha = document.forms.login.senha;

    const valueUser = campoUser.value;
    const valeuSenha = campoSenha.value;

    const avisoUser = document.getElementById("aviso-user");
    const avisoSenha = document.getElementById("aviso-senha");

    if (valueUser == "") {
        e.preventDefault()
        avisoUser.style.visibility = 'visible';
    } else {
        avisoUser.style.visibility = 'hidden';
    }

    if (valeuSenha == "") {
        e.preventDefault()
        avisoSenha.style.visibility = 'visible';
    } else {
        avisoSenha.style.visibility = 'hidden';
    }

}