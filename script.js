function validarFormulario() {
    var add_nombreInput = document.getElementById("add_nombre");
    var add_nombre = add_nombreInput.value;
    var add_usuarioInput = document.getElementById("add_usuario");
    var add_usuario = add_usuarioInput.value;

    if (!/^[a-zA-Z\s]+$/.test(add_nombre)) { // Se permite también el espacio (\s)
        alert("El nombre solo puede contener letras y espacios.");
        add_nombreInput.focus();
        return false;
    }

    if (!/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-])/.test(add_usuario)) {
        alert("El usuario debe contener una combinación de letras, números y símbolos.");
        add_usuarioInput.focus();
        return false;
    }
    return true;
}

function validarLetras(event) {
    var input = event.target;
    var valor = input.value;
    var mensajeError = document.getElementById("mensaje-error");

    if (!/^[a-zA-Z\s]+$/.test(valor)) { // Se permite también el espacio (\s)
        mensajeError.textContent = "Solo se permiten letras y espacios.";
        input.style.borderColor = "red";
    } else {
        mensajeError.textContent = "";
        input.style.borderColor = "";
    }
}


function validarUsuario(event) {
    var input = event.target;
    var valor = input.value;
    var mensajeError = document.getElementById("mensaje-de-error");

    if (/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-])/.test(valor)) {
        mensajeError.textContent = "";
        input.style.borderColor = "";
    } else {
        mensajeError.textContent = "Debe contener una combinación de letras, números y símbolos.";
        input.style.borderColor = "red";
    }
}