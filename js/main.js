document.addEventListener("DOMContentLoaded", function() {
    const passwordForm = document.getElementById("passwordForm");
    const passwordlogInput = document.getElementById("passwordlog");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const showPasswordBtn = document.getElementById("showPassword");
    const showPasswordlogBtn = document.getElementById("showPasswordlog");
    const showConfirmPasswordBtn = document.getElementById("showConfirmPassword");

    passwordForm.addEventListener("submit", function(e) {
        if (!validatePassword(passwordInput.value)) {
            e.preventDefault();
            showHint("passwordHint", "La contraseña debe tener al menos 8 caracteres y contener al menos una letra y un número.");
        } else if (passwordInput.value !== confirmPasswordInput.value) {
            e.preventDefault();
            showHint("confirmPasswordHint", "Las contraseñas no coinciden.");
        }
    });

    showPasswordBtn.addEventListener("click", function() {
        togglePasswordVisibility(passwordInput, showPasswordBtn);
    });

    showPasswordlogBtn.addEventListener("click", function() {
        togglePasswordVisibility(passwordlogInput, showPasswordlogBtn);
    });

    showConfirmPasswordBtn.addEventListener("click", function() {
        togglePasswordVisibility(confirmPasswordInput, showConfirmPasswordBtn);
    });

    passwordInput.addEventListener("input", function() {
        validatePasswordHint(passwordInput);
    });

    confirmPasswordInput.addEventListener("input", function() {
        validateConfirmPasswordHint(confirmPasswordInput);
    });

    function togglePasswordVisibility(inputField, showBtn) {
        if (inputField.type === "password") {
            inputField.type = "text";
            showBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            inputField.type = "password";
            showBtn.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }

    function showHint(id, message) {
        const hint = document.getElementById(id);
        hint.textContent = message;
        hint.style.color = "red";
    }

    function hideHint(id) {
        const hint = document.getElementById(id);
        hint.textContent = "";
    }

    function validatePasswordHint(input) {
        const hint = document.getElementById("passwordHint");
        if (validatePassword(input.value)) {
            hideHint("passwordHint");
        } else {
            showHint("passwordHint", "La contraseña debe tener al menos 8 caracteres y contener al menos una letra y un número.");
        }
    }

    function validateConfirmPasswordHint(input) {
        const hint = document.getElementById("confirmPasswordHint");
        if (passwordInput.value === input.value) {
            hideHint("confirmPasswordHint");
        } else {
            showHint("confirmPasswordHint", "Las contraseñas no coinciden.");
        }
    }

    function validatePassword(password) {
        return /^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/.test(password);
    }
});