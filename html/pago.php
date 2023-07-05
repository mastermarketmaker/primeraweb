<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="../estilos/pago.css" />
  </head>
  <body>
  <?php
include "header.php"
?>
    <main style="margin-top: 10%;">
      <form id="formulario">
        <div class="grupo">
          <label for="nombre">Nombre y apellidos completos</label>
          <input type="text" id="nombre" name="nombre" required pattern="^[A-Za-z]+(\s[A-Za-z]+)?\s[A-Za-z]+(\s[A-Za-z]+)?$" />
        </div>
        <div class="grupo">
          <label for="tarjeta">Número de tarjeta</label>
          <input type="text" id="tarjeta" name="tarjeta" maxlength="16" required pattern="^\d{15,16}$" />
        </div>
        <div class="grupo">
          <label for="caducidad">Fecha de caducidad (MM/AA)</label>
          <input type="text" id="caducidad" name="caducidad" required pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" placeholder="MM/AA" maxlength="5" />
        </div>
        </div>
        <div class="grupo">
          <label for="cvv">CVV</label>
          <input type="text" id="cvv" name="cvv" maxlength="3" required pattern="^\d{3}$" />
        </div>
        <div class="grupo">
          <label for="cantidad">Cantidad</label>
          <input type="number" id="cantidad" name="cantidad" required pattern="^1$" />
        </div>
        <div class="grupo">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" />
        </div>
        <button type="submit" id="boton-pago" href="pagoexitoso.html">Realizar pago</button>
      </form>
    </main>
      
    <script src="../javascript/pago.js"></script>
  </body>
</html>
