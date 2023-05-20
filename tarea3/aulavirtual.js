
    function login() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      
      // Aquí puedes agregar la lógica para validar el nombre de usuario y la contraseña
      // y redirigir al usuario a la página principal si son válidos.
    }
  
    function forgotPassword() {
      var email = prompt("Por favor, introduce tu dirección de correo electrónico:");
      
      // Aquí puedes agregar la lógica para verificar si el correo electrónico está en la base de datos
      // y enviar un método de recuperación de usuario y contraseña al correo proporcionado.
      
      if (email) {
        alert("Si el correo electrónico consta en nuestra base de datos, te enviaremos un método de recuperación de usuario y contraseña.");
      }
    }