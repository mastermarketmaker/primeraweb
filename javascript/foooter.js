document.addEventListener('DOMContentLoaded', function() {

// Seleccionar elementos del DOM

const btn = document.querySelector('.scroll-to-top-btn');
const footer = document.querySelector('footer');
const html = document.querySelector('html');

// Agregar un controlador de eventos al botón "Volver arriba"
btn.addEventListener('click', () => {
  // Desplazarse suavemente al inicio de la página
  html.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// Verificar si el usuario ha llegado al final de la página
window.addEventListener('scroll', () => {
  // Obtener la altura del footer
  const footerHeight = footer.offsetHeight;
  // Obtener la posición actual del usuario en la página
  const currentPosition = window.pageYOffset + window.innerHeight;
  // Obtener la altura total del documento
  const documentHeight = document.body.scrollHeight;
  // Calcular la distancia desde la parte inferior de la página
  const distanceFromBottom = documentHeight - currentPosition - footerHeight;
  // Ocultar o mostrar el botón "Volver arriba" según corresponda
  if (distanceFromBottom > 0) {
    btn.style.display = 'block';
  } else {
    btn.style.display = 'none';
  }
});
});