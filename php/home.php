
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Elementos</title>
  <link rel="stylesheet" type="text/css" href="../estilos/home.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <script src="../javascript/sliderhome.js"></script>
  
</head>
<body>

<div class="contenedor"> 

 <?php

 include '../headers/header.php';

 ?>
  <div class="testimonios">
    <div class="slider">
      <div class="slide active">
        <img src="../imagenes/seminario4.jpg" alt="cueva">

      </div>
      <div class="slide">
        <img src="../imagenes/seminario4.jpg" alt="Testimonio 2">
        

      
      </div>
      <div class="slide">
        <img src="../imagenes/seminario5.jpg" alt="Testimonio 3">
        

       
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

  
  <main style="margin-top: 10%;">
    
    <div class="contenedor-imagenes">
        <img src="../imagenes/foto-en-una-llave-oscura-de-un-hombre-escalando-montaña-iluminado-por-detrás-el-sol-sube-la-160933381.jpg" alt="Imagen 1"style="width: 25%; height: 25%; padding-right: 5%">
        <img src="../imagenes/millonario.jpg" alt="Imagen 2"style="width: 25%; height: 25%; padding-right: 5%">
        <img src="../imagenes/fitness.jpg.jpg" alt="Imagen 3" style="width: 25%; height: 25%; padding-right: 3%;">
    </div>
    <div class="contenedor-parrafos">
      <div class="parrafo1">

        <p style="align-content: center; width: 100%; padding-left: 30%; font-size: x-large;">
          ¡Bienvenido al maravilloso mundo del desarrollo personal! El desarrollo personal se trata de crecer y mejorar en todos los aspectos de nuestra vida, desde nuestras habilidades y conocimientos hasta nuestra salud mental y física. Si estás buscando mejorar en cualquier área de tu vida, el desarrollo personal es el camino a seguir.
        </p>

      </div>

       <div class="parrafo2" style="padding-left: 5%;">

        <p style="width:fit-content; font-size: x-large;">
          Si estás interesado en el desarrollo personal, estás en el camino correcto para convertirte en la mejor versión de ti mismo. El desarrollo personal se trata de trabajar en uno mismo para alcanzar todo nuestro potencial, lograr nuestros objetivos y vivir una vida plena y satisfactoria.
        </p>


       </div>

       <div class="parrafo3" style="padding-right: 9%;">

        <p style="width:100%;font-size: x-large">
          El desarrollo personal es un viaje fascinante y transformador que nos permite alcanzar nuestro máximo potencial y vivir una vida plena y satisfactoria. En este camino de autodescubrimiento, exploramos nuestros talentos, habilidades y creencias para crecer y evolucionar como individuos.
        </p>


       </div>
    </div>
  
  </main>
  
 <?php

 include '../footers/footer.php';

 ?>
  
 </body>
</div>
</html>
