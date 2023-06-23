const socialIcons = document.querySelectorAll('.social-icon');

socialIcons.forEach(icon => {
  icon.addEventListener('click', function(event) {
    event.preventDefault();
    const socialType = this.getAttribute('data-social');
    if (socialType === 'facebook') {
      // Acción al hacer clic en el icono de Facebook
      console.log('Has hecho clic en el icono de Facebook');
    } else if (socialType === 'twitter') {
      // Acción al hacer clic en el icono de Twitter
      console.log('Has hecho clic en el icono de Twitter');
    } else if (socialType === 'instagram') {
      // Acción al hacer clic en el icono de Instagram
      console.log('Has hecho clic en el icono de Instagram');
    }
  });
});
