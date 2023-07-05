<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="stilos/css.css" rel="stylesheet" type="text/css">
    <script>

        //este codigo javascript es el encargado de ver si los datos introducidos por el usuario son correctos.

        function validarFormulario(){
        let todoOk = true;
           let nombre = document.getElementsByName("nombre")[0];

           if(nombre.value.length < 2){

               todoOk = false;
               nombre.style.backgroundColor = "red";
           }

           if(todoOk){
               document.getElementsByName("altasNaves")[0].submit();
           }else{
               alert("No tienes puesto el nombre!!!!");
           }



        }

        window.onload = function (){

                document.getElementById("botoNave").addEventListener("click", validarFormulario );
        }


    </script>


</head>
<body>

    <div id="contendor">

       <!-- aquí va el header -->
        <?php

            include "includes/headerinclude.php";
            include "includes/nav.php";
        ?>




        <section>
            <h1> DAR DE ALTA UNA NAVE</h1>

            <form  name="altasNaves" action="procesarDatosNave.php" method="post" enctype="multipart/form-data">
                <ul>
                    <li><label>Nombre: </label><input type="text" name="nombre"></li>
                    <li><label>Matricula: </label><input type="text" name="matricula"></li>
                    <li><label>Año de fabricación: </label><input type="text" name="anio"></li>
                    <li><label>Tipo de nave: </label><input type="text" name="tipo"></li>
                    <li><label>DEscripción </label><textarea name="descripcion"></textarea></li>

                    <li><label>Foto:</label><input type="file" name="foto"></li>
                    <li><div id="botoNave">Guardar</div></li>
                </ul>
            </form>

        </section>

        <?php
         include "includes/pie.php";
        ?>

    </div>

</body>
</html>