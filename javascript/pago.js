document.addEventListener('DOMContentLoaded', function() {
  const formulario = document.querySelector('#formulario');
  const inputCaducidad = document.querySelector('#caducidad');

  inputCaducidad.addEventListener('input', function() {
    if (this.value.length === 2 && !this.value.includes('/')) {
      this.value += '/';
    }
  });

  formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    const nombre = document.querySelector('#nombre').value;
    const tarjeta = document.querySelector('#tarjeta').value;
    const caducidad = document.querySelector('#caducidad').value;
    const cvv = document.querySelector('#cvv').value;
    const cantidad = document.querySelector('#cantidad').value;
    const correo = document.querySelector('#correo').value;

    // Validar el campo de Nombre y Apellidos
    const nombreRegex = /^([A-Za-z]+\s)+[A-Za-z]+$/;
    if (!nombreRegex.test(nombre)) {
      alert('Por favor, ingrese un nombre válido (primer nombre, segundo nombre opcional, primer apellido y segundo apellido opcional).');
      return;
    }

    // Validar el campo de Número de Tarjeta
    const tarjetaRegex = /^\d{15,16}$/;
    if (!tarjetaRegex.test(tarjeta)) {
      alert('Por favor, ingrese un número de tarjeta válido con 15 o 16 dígitos numéricos.');
      return;
    }

    // Validar el campo de Fecha de Caducidad
    const fechaActual = new Date();
    const mesAnio = caducidad.split('/');
    const caducidadDate = new Date(parseInt('20' + mesAnio[1], 10), parseInt(mesAnio[0], 10) - 1);

    if (caducidadDate <= fechaActual) {
      alert('Por favor, ingrese una fecha de caducidad válida posterior a la fecha actual.');
      return;
    }

    // Validar el campo de CVV
    const cvvRegex = /^\d{3}$/;
    if (!cvvRegex.test(cvv)) {
      alert('Por favor, ingrese un CVV válido de 3 dígitos numéricos.');
      return;
    }

    // Validar el campo de Cantidad
    if (cantidad !== '1') {
      alert('Por favor, ingrese una cantidad válida de 1.');
      return;
    }

    // Validar el campo de Correo Electrónico
    const correoRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!correoRegex.test(correo)) {
      alert('Por favor, ingrese un correo electrónico válido.');
      return;
    }

    // Si todas las validaciones pasan, redirigir al usuario a la página de pago exitoso
    window.location.replace('pagoexitoso.html');
  });
});
