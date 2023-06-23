document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const dots = document.querySelectorAll('.dot');
  const logo = document.querySelector('#logo'); // Agrega esta línea para seleccionar el logotipo
  
  let slideIndex = 1;
  const totalSlides = slides.length;
  
  function showSlide(n) {
    if (n > totalSlides) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = totalSlides;
    }
    for (let i = 0; i < totalSlides; i++) {
      slides[i].classList.remove('active');
    }
    slides[slideIndex - 1].classList.add('active');
  }
  
  function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
  }
  
  function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
  }
  
  function currentSlide(n) {
    slideIndex = n;
    showSlide(slideIndex);
  }
  
  prevBtn.addEventListener('click', prevSlide);
  nextBtn.addEventListener('click', nextSlide);
  
  for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener('click', function() {
      currentSlide(i + 1);
    });
  }
  
  // Agrega el evento click al logotipo para volver a la página de inicio
  logo.addEventListener('click', function() {
    window.location.href = 'home.html'; // Reemplaza 'ruta-a-tu-pagina-home' con la ruta adecuada a tu página de inicio
  });
});
