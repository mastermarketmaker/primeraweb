<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonios</title>
  <link rel="stylesheet" href="../estilos/testimonios.css">
</head>
<body>

<?php

include '../headers/header.php';

?>
  <div class="testimonios">
    <div class="slider">
      <div class="slide active">
        <img src="../imagenes/foto213.jpg" alt="Testimonio 1">

        <h2>Antonio Otero ,25 años, Madrid</h2>
      <p>Estoy muy contento con este curso de desarrollo personal, me ha ayudado a conocerme mejor y a mejorar en muchos aspectos de mi vida. El contenido es muy completo y está explicado de una forma muy clara y amena. Lo recomiendo 100%.</p>

      </div>
      <div class="slide">
        <img src="../imagenes/mujer1.jpg" alt="Testimonio 2">
        <h2>Cristina ,32 años, Madrid.</h2>
      <p>Este curso de desarrollo personal me ha sorprendido muy gratamente, me ha enseñado muchas técnicas y herramientas útiles para aplicar en mi día a día. Me ha resultado muy práctico y los ejercicios propuestos me han ayudado a entender y mejorar muchos aspectos de mi vida. ¡Muy recomendable!</p>

      
      </div>
      <div class="slide">
        <img src="../imagenes/joven3.jpg" alt="Testimonio 3">
        <h2>Juan Gil,30 años, Ciudad Real</h2>
       <p>He realizado varios cursos de desarrollo personal a lo largo de mi vida, pero sin duda este ha sido el mejor de todos. El contenido es muy completo y profundo, y el enfoque práctico es justo lo que estaba buscando. Además, el instructor es un verdadero experto en la materia y se nota que disfruta transmitiendo sus conocimientos. ¡Totalmente recomendado!</p>

       
      </div>
      <a class="prev">&#10094;</a>
      <a class="next">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
  <script src="../javascript/testimonios.js"></script>

  <?php
 
 include '../footers/footer.php';

 ?>


</body>
</html>
