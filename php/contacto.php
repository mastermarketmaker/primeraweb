<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../estilos/contacto.css">
    <script src="../javascript/contacto.js"></script>
</head>
<body>
<?php

include '../headers/header.php';

?>

    <section class="container">
        <div class="map">
            <h2>Encuéntranos</h2>
            <div id="map"></div>
            <p>Nuestra dirección es: Carrer des Port 24, 07580 Capdepera, Islas Baleares, España</p>
        </div>
        <div class="form">
            <h2>Contacta con nosotros</h2>
            <form name= "contactar" action="procesardatos.php" method="get">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone" required>
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address" required>
                <label for="info-type">Tipo de información:</label>
                <select id="info-type" name="info-type" required>
                    <option value="">Seleccione una opción</option>
                    <option value="consulta">Consulta</option>
                    <option value="sugerencia">Sugerencia</option>
                    <option value="queja">Queja</option>
                </select>
                <fieldset>
                    <legend>Género:</legend>
                    <label for="gender-male">Masculino</label>
                    <input type="radio" id="gender-male" name="gender" value="masculino">
                    <label for="gender-female">Femenino</label>
                    <input type="radio" id="gender-female" name="gender" value="femenino">
                </fieldset>
                <label for="comments">Comentarios:</label>
                <textarea id="comments" name="comments" required></textarea>
                <label for="save-data">¿Está de acuerdo con que guardemos sus datos?</label>
                <input type="checkbox" id="save-data" name="save-data">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>

    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAib494qQGSGjhBJ3gvXtL3I33xU5g_6ck&callback=initMap">
    </script>

<?php

include '../footers/footer.php';

?>

</body>
</html>
