<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Cursos de Desarrollo Personal</title>
    <link rel="stylesheet" href="../estilos/elementos.css" />
    <script src="../javascript/elementos.js"></script>
  </head>
  <body>
  <?php

include '../headers/header.php';

?>
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
          <button class="btn-comprar">Comprar</button>
        </div>
        
        <div class="curso">
          <img src="../imagenes/liderazgo.jpg" alt="Curso 2" />
          <h2>Curso de liderazgo y comunicación efectiva</h2>
          <p>
            Este curso te enseñará las habilidades de liderazgo y comunicación
            necesarias para tener éxito en tu vida personal y profesional.
          </p>
          <p class="precio">$79.99</p>
          <button class="btn-comprar">Comprar</button>
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
          <button class="btn-comprar">Comprar</button>
        </div>
      </section>
    </main>

    

    <?php

 include '../footers/footer.php';

 ?>
    
  </body>
</html>
