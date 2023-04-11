

const libros = document.querySelector('body');
const Box = body.querySelector('div');
  const contenedores = body.querySelectorAll('.container ');
  const barraLateral = document.querySelector('#barra-lateral');
  const contenido = document.querySelector('.contenido');
  
  contenedores.forEach(contenedor => {
    contenedor.addEventListener('click', () => {
      const nombreLibro = contenedor.classList[0];
      const libro = libros[nombreLibro];
  
      barraLateral.style.width = '470px';
      contenido.innerHTML = `
        <img src='../../img/BIBLI.png' alt="">
        <h3>${libro.titulo}</h3>
        <p>${libro.descripcion}</p>
        <p>${libro.editorial}</p>
        <p>${libro.categoria}</p>
        <p>${libro.precio}</p>
        <button type="button">AGREGAR AL CARRITO</button>
      `;
    });
  });
  
  const cerrar = document.querySelector('.cerrar');
  cerrar.addEventListener('click', () => {
    barraLateral.style.width = '0';
  });