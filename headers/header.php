

<head>
    <style>
        header{
 height: 200px;
 margin-top: 10px;
 margin-left: 10px;
 margin-right: 10px;
 

 }
 .imagen-logo {
  position: relative;
  background-color: black;
  overflow: hidden;
}

.imagen-logo img {
  display: block;
}

.imagen-logo ul {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 0;
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

.imagen-logo {
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* Otros estilos para el contenedor imagen-logo */
}

.logotipo {
  display: flex;
  align-items: center;
  margin-right: auto; /* Agrega esta línea para mover el logotipo a la izquierda */

}

#logo-container {
  width: 100px; /* Ajusta el ancho según tus necesidades */
  margin-right: 20px; /* Ajusta el margen según tus necesidades */
}


#logo {
  display: block;
}

#logo img {
  width: 100%;
  height: auto;
}
.logotipo img {
  animation: bounce 1s ease infinite;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

    </style>
</head>


<header>
    <div class="imagen-logo" style="font-size: large;">   
      
      <nav>
       <ul style="margin-right: 20%; font-size: large;">
        <li><a href="elementos.php">cursos de desarollo personal</a></li>
        <li><a href="contacto.php">contacto</a></li>
        <li><a href="testimonios.php">testimonios</a></li>
        <li><a href="quienesomos.php">nuestros coaches</a></li>
        <li><a href="aulavirtual.php">acceso alumnos</a></li>
       </ul>
      </nav> 
      
    <div class="logotipo">

      <div class="logo-container">
        <a id="logo" href="home.php">
          <img src="../imagenes/logo2.png" alt="Logo de mi sitio">
        </a>

      </div>
     

    </div>
      
    </div>
    

  </header> 