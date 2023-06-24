<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Cursos de Desarrollo Personal</title>
  <link rel="stylesheet" type="text/css" href="../estilos/home.css"/>
  <script src="../javascript/elementos.js"></script>
</head>
<body>
  <?php include "web/html/header.php"; ?>
  <main style="margin-top: 5%;">
    <section id="cursos">
      <div class="curso">
        <img src="../imagenes/OIP.jpg" alt="Curso 1" />
        <h2>Curso de meditación y mindfulness</h2>
        <p>
          En este curso aprenderás técnicas de meditación y mindfulness para
          reducir el estrés y la ansiedad y mejorar tu bienestar emocional.
        </p>
        <p class="precio">$49.99</p>
        <button class="btn-comprar" onclick="window.location.href = 'web/html/pago.php'">Comprar</button>
      </div>
      
      <div class="curso">
        <img src="../imagenes/liderazgo.jpg" alt="Curso 2" />
        <h2>Curso de liderazgo y comunicación efectiva</h2>
        <p>
          Este curso te enseñará las habilidades de liderazgo y comunicación
          necesarias para tener éxito en tu vida personal y profesional.
        </p>
        <p class="precio">$79.99</p>
        <button class="btn-comprar" onclick="window.location.href = 'web/html/pago.php'">Comprar</button>
      </div>
      <div class="curso">
        <img src="../imagenes/inteligencia-emocional.jpg" alt="Curso 3" />
        <h2>Curso de inteligencia emocional</h2>
        <p>
          En este curso aprenderás a identificar y regular tus emociones, así
          como a entender las emociones de los demás y mejorar tus relaciones
          interpersonales.
        </p>
        <p class="precio">$59.99</p>
        <button class="btn-comprar" onclick="window.location.href = 'web/html/pago.php'">Comprar</button>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-wrapper">
      <div class="footer-section">
        <h3>Enlaces útiles</h3>
        <ul>
          <li><a href="home.html">Inicio</a></li>
          <li><a href="elementos.html">descubre nuestros cursos</a></li>
          <li><a href="contacto.html">visítanos físicamente</a></li>
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
        <p>
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
      var btnComprar = document.querySelectorAll(".btn-comprar");

      btnComprar.forEach(function(btn) {
        btn.addEventListener("click", function() {
          // Redireccionar al usuario a la página deseada
          window.location.href = "web/html/pago.php";
        });
      });
    });
  </script>
</body>
</html>
