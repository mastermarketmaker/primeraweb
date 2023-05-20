document.addEventListener("DOMContentLoaded", function() {
  var btnComprarList = document.querySelectorAll(".btn-comprar");

  btnComprarList.forEach(function(btnComprar) {
    btnComprar.addEventListener("click", function() {
      var precioElement = this.parentElement.querySelector(".precio");
      var precio = precioElement.textContent.trim().replace("$", "");
      var url = "pago.html?precio=" + encodeURIComponent(precio);
      window.location.href = url;

      // Cambiar el texto del botón a "Procesando" después de hacer clic
      btnComprar.textContent = "Procesando...";
      btnComprar.disabled = true;

      // Simular un retraso antes de cambiar el texto del botón nuevamente
      setTimeout(function() {
        btnComprar.textContent = "Comprado";
        btnComprar.disabled = true;
      }, 2000); // Cambiar el tiempo (en milisegundos) según tus necesidades
    });
  });
});