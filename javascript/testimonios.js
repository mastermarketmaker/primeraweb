document.addEventListener('DOMContentLoaded', function() {

  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const dots = document.querySelectorAll('.dot');

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
      dots[i].classList.remove('active-dot');
    }
    slides[slideIndex - 1].classList.add('active');
    dots[slideIndex - 1].classList.add('active-dot');
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
});
