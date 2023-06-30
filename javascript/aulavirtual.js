  var usuario = {
  nombre: 'Antonio Otero',
  email: 'luisuper@hotmail.com',
  usuario: 'antonio',
  contraseña: 'antonio123'
};

function login() {
  var usernameInput = document.getElementById("username").value;
  var passwordInput = document.getElementById("password").value;

  // Verificar si el nombre de usuario y la contraseña ingresados coinciden con los del 'usuario'
  if (usernameInput === usuario.usuario && passwordInput === usuario.contraseña) {
    // Si coinciden, redirigir al usuario a la página del aula virtual
    alert("Inicio de sesión exitoso!");
    window.location.href = "contacto.html";
  } else {
    // Si no coinciden, mostrar un mensaje de error
    alert("El nombre de usuario o la contraseña son incorrectos. Por favor, inténtalo de nuevo.");
  }
}

function forgotPassword() {
  var email = prompt("Por favor, introduce tu dirección de correo electrónico:");

  // Verificar si el correo electrónico ingresado coincide con el correo electrónico del usuario
  if (email === usuario.email) {
    alert("Se han enviado instrucciones a tu correo electrónico " + email);
  } else {
    alert("Lo siento, el correo electrónico no existe. Por favor, inténtalo de nuevo.");
  }
}
