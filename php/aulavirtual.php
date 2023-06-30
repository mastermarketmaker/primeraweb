<!DOCTYPE html>
<html>
<head>
<title>Inicio de sesión</title>
<link rel="stylesheet" href="../estilos/aulavirtual.css">
</head>
<body>
<?php

include '../headers/header.php';

?>
  <div class="container">
      <h2>Inicio de sesión</h2>
      <form id="login-form" onsubmit="return false;">
          <div class="form-group">
              <label for="username">Nombre de usuario:</label>
              <input type="text" id="username" required aria-label="Nombre de usuario">
          </div>
          <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" id="password" required aria-label="Contraseña">
          </div>
          <button class="btn" onclick="login()" aria-label="Iniciar sesión">Iniciar sesión</button>
          <div class="forgot-password">
            <a href="#" onclick="forgotPassword()">¿Olvidaste tu contraseña?</a>
          </div>
          
      </form>
  </div>

  <script src="../javascript/aulavirtual.js"></script>

  <?php

 include '../footers/footer.php';

 ?>
  
</body>
</html>
