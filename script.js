document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.onsubmit = function(event) {
        const username = document.getElementById("Username").value;
        const password = document.getElementById("Password").value;
        const confirmPasswordInput = document.getElementById("Confirmar-Password");
        const confirmPassword = confirmPasswordInput ? confirmPasswordInput.value : null;

        // Valida o username
        if (!validateUsername(username)) {
            alert("O nome de utilizador é inválido. Tem de ter 4-12 caracteres e conter apenas letras e números.");
            event.preventDefault();
            return false;
        }

        // Valida a password
        if (!validatePassword(password)) {
            alert("A palavra-passe é inválida. Tem de ter pelo menos 8 caracteres, conter pelo menos uma letra maiúscula, uma letra minúscula e um número.");
            event.preventDefault();
            return false;
        }

        // Verifica se a password de confirmação é igual à password
        if (confirmPasswordInput && password !== confirmPassword) {
            alert("As passwords não coincidem.");
            event.preventDefault();
            return false;
        }

        // Se tudo for validado, o formulário é submetido
        return true;
    };
});

function validateUsername(username) {
    const usernameRegex = /^[a-zA-Z0-9]{4,12}$/;
    return usernameRegex.test(username);
}

function validatePassword(password) {
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$/;
    return passwordRegex.test(password);
}

function togglePasswordVisibility1(){
    var passwordInput = document.getElementById("Password");
    var toggleButton = passwordInput.nextElementSibling;

    if(passwordInput.type === "password"){
        passwordInput.type = "text";
        toggleButton.textContent = "Esconder";
    }else{
        passwordInput.type = "password";
        toggleButton.textContent = "Mostrar";
    }
}

function togglePasswordVisibility2(){
    var passwordInput = document.getElementById("Confirmar-Password");
    var toggleButton = passwordInput.nextElementSibling;
    
    if(passwordInput.type === "password"){
        passwordInput.type = "text";
        toggleButton.textContent = "Esconder";
    }else{
        passwordInput.type = "password";
        toggleButton.textContent = "Mostrar";
    }
}
