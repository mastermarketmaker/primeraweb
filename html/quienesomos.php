<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuestro Equipo</title>
  <link rel="stylesheet" href="../estilos/quienesomos.css">
</head>
<body>
<?php
include "header.php"
?>
  <main>
    <div class="team" style="margin-top: 5%;">
      <div class="member">
        <img src="../imagenes/testimonio1.jpg" alt="imagen1">  
      </div>
      <div class="member">

          <img src="../imagenes/testimonio2.jpg" alt="imagen2">
          
      </div>
      <div class="member">

       <img src="../imagenes/testimonio3.jpg" alt="imagen3">

      </div>
    </div>
         
  </main>
  <script src="../javascript/quienessomos.js"></script>
</body>
<footer style="margin-top: 5%;">
  <div class="footer-wrapper">
    <div class="footer-section">
      <h3>Enlaces útiles</h3>
      <ul>
        <li><a href="home.html">Inicio</a></li>
        <li><a href="elementos.html">descubre nuestros cursos</a></li>
        <li><a href="contacto.html">visitanos fisicamente</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Redes Sociales</h3>
      <ul>
        <li><a href="https://www.facebook.com/luiseduardo.salaspanchano">Facebook</a></li>
        <li><a href="https://twitter.com/elonmusk">Twitter</a></li>
        <li><a href="https://www.instagram.com/leomessi/">Instagram</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3>Contáctanos</h3>
      <p>
        <a href="https://www.google.com/maps?q=39.702160,3.436060" target="_blank">
          Carrer des Port 24, 07580 Capdepera, Islas Baleares, España
        </a>
      </p>
      <p>
        Teléfono: 
        <a href="tel:+34971819003">+34 971819003</a>
      </p>
        Correo: 
        <a href="mailto:elevate_yourself@gmail.com">elevate_yourself@gmail.com</a>
      </p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2023 Todos los derechos reservados - Ejemplo</p>
  </div>
  
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
var footerLinks = document.querySelectorAll(".footer-section ul li a");

footerLinks.forEach(function(link) {
  link.addEventListener("mouseover", function() {
    this.style.color = "red";
  });

  link.addEventListener("mouseout", function() {
    this.style.color = "";
  });
});
});
</script>

<script>

document.addEventListener("DOMContentLoaded", function () {
  var footerTitles = document.querySelectorAll(".footer-section h3");

  footerTitles.forEach(function (title) {
    title.addEventListener("click", function () {
      var sectionContent = this.nextElementSibling;
      var isHidden = sectionContent.style.display === "none";

      if (isHidden) {
        sectionContent.style.display = "block";
      } else {
        sectionContent.style.display = "none";
      }
    });
  });
  

});
</script>
</html>
