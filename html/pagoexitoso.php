<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmación de Pago</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }

      header {
        background-color: #000000;
        color: white;
        padding: 10px;
      }

      .imagen-logo {
        position: relative;
        background-color: black;
        overflow: hidden;
        display: flex;
        justify-content: center; /* Modificado a 'center' */
        align-items: center;
      }

      .imagen-logo img {
        display: block;
      }

      .imagen-logo ul {
        
        margin: 0;
        padding: 0;
        list-style: none;
      }

      .imagen-logo li {
        display: inline-block;
        margin-right: 20px;
      }

      .imagen-logo a {
        color: white;
        text-decoration: none;
      }

      .logotipo {
        display: flex;
        align-items: center;
        margin-right: auto;
      }

      #logo-container {
        width: 100px;
        margin-right: 20px;
      }

      #logo {
        display: block;
      }

      #logo img {
        width: 100%;
        height: auto;
      }

      main {
        text-align: center;
        margin-top: 50px;
      }

      h1 {
        font-size: 24px;
        margin-bottom: 20px;
      }

      .fade-in {
        animation: fadeIn 1s;
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      .imagen-logo nav {
        width: 100%; /* Añadido para asegurar que el elemento nav tenga un ancho del 100% */
      }

      .imagen-logo ul {
        font-size: larger;
        /* Se eliminó el margen a la derecha en la etiqueta ul */
      }
    </style>
<script>
window.addEventListener('DOMContentLoaded', function () {
const mensaje = document.getElementById('mensaje');
mensaje.classList.add('fade-in');
});
</script>
</head>
<body>

<?php
include "header.php"
?>
    

      
      
    
    <main>
      <h1>¡Pago exitoso!</h1>
      <p id="mensaje">Gracias por tu pago. Se ha procesado correctamente.<br>Un correo electrónico ha sido enviado a la dirección proporcionada con las instrucciones de acceso al aula virtual. Te recomendamos revisar tu bandeja de entrada y spam.</p>
      <!-- Puedes agregar más contenido aquí si lo deseas -->
    </main>
    <footer>
      <!-- Tu pie de página si lo tienes -->
    </footer>
  </body>
</html>
