<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Reestablecer</title>
    <link rel="stylesheet" href="../assets/css/estiloscruds.css">
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="config/change_password.php" method="POST" onsubmit="return validatePassword()">
    <h1>Escribe tu nueva contraseña</h1>
    <h2 class="h3 mb-3 fw-normal">Reestablecer tu contraseña</h2>
    <div class="form-floating my-3">
      <input type="password" class="form-control" id="passwordInput" name="new_password" required>
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <label for="passwordInput">Nueva contraseña</label>
      <span class="password-toggle" onclick="togglePasswordVisibility()">&#128065;</span>
    </div>
    <p class="text-danger" id="passwordRequirement">La contraseña debe tener al menos 8 caracteres, una letra y un número.</p>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Reestablecer contraseña</button>
  </form>
</main>

<script>
function validatePassword() {
    const password = document.querySelector('#passwordInput').value;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    const passwordRequirement = document.querySelector('#passwordRequirement');

    if (!passwordRegex.test(password)) {
        passwordRequirement.style.display = 'block';
        return false;
    } else {
        passwordRequirement.style.display = 'none';
    }

    return true;
}

function togglePasswordVisibility() {
    const passwordInput = document.querySelector('#passwordInput');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}
</script>
    
</body>
</html>