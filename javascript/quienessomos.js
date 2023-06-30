const team = document.querySelector('.team');

// Array con información de los miembros del equipo
const members = [
  { name: 'John Doe', position: 'John Doe es un coach certificado en meditación y mindfulness con más de 10 años de experiencia. Ofrece cursos prácticos y adaptables a cualquier nivel de experiencia, enfocados en la gestión del estrés, la ansiedad y la mejora de la concentración. También ofrece sesiones individuales de coaching en meditación y mindfulness. Su enfoque se basa en la combinación de técnicas tradicionales con investigaciones científicas actuales. Su objetivo es ayudar a las personas a encontrar la paz interior y la claridad mental que necesitan para alcanzar sus objetivos.', image: '../imagenes/testimonio1.jpg' },
  { name: 'Jane Smith', position: 'Jane Smith es una coach certificada en liderazgo y comunicación efectiva con amplia experiencia en enseñar habilidades de liderazgo y comunicación a nivel individual y empresarial. Su enfoque combina técnicas de coaching con las últimas investigaciones en liderazgo y comunicación efectiva. Jane ofrece cursos prácticos y personalizados adaptados a las necesidades de cada cliente, y también ofrece sesiones individuales de coaching. Si buscas mejorar tus habilidades de liderazgo y comunicación, no dudes en contactar a Jane.', image: './imagenes/testimonio2.jpg' },
  { name: 'Bob Johnson', position: 'Bob Johnson es un coach certificado en inteligencia emocional con amplia experiencia en ayudar a personas de diferentes edades y entornos a entender y regular sus emociones para mejorar su calidad de vida. Bob utiliza una combinación de técnicas de coaching y las últimas investigaciones en inteligencia emocional para enseñar habilidades como la autoconciencia, la regulación emocional, la empatía y las habilidades sociales.', image: 'testimonio3.jpg' },
];

// Función para agregar miembros del equipo al HTML
function addMembers() {
  let membersHTML = '';
  for (let i = 0; i < members.length; i++) {
    membersHTML += `
      <div class="member">
        <img src="${members[i].image}">
        <h3 style="padding-top: 10px">${members[i].name}</h3>
        <p style="padding-top: 10px; font-size:large">${members[i].position}</p>
      </div>
    `;
  }
  team.innerHTML = membersHTML;
}

// Llama la función para agregar miembros del equipo al cargar la página
window.addEventListener('DOMContentLoaded', addMembers);
