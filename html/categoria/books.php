<link rel="stylesheet" href="../../css/books.css">
<?php

// Conectar a la base de datos
require_once '../../procesos/conexion.php';
// Obtener el ID del producto
$coditem = $_GET["coditem"];

// Hacer la consulta a la base de datos
$resultado = $conexion->prepare("SELECT * FROM item WHERE coditem = $coditem");

// Obtener los datos del producto
$resultado->fetch(PDO::FETCH_ASSOC);

// Devolver la información en formato JSON
header("Content-Type: application/json");
echo json_encode($producto);

?>
  
<script>
    const libros = {
  libroA: {
    titulo: 'Libro A',
    descripcion: 'Esta es la descripción del Libro A.'
  }
};

const contenedores = document.querySelectorAll('.libroA ');
const barraLateral = document.querySelector('#barra-lateral');
const contenido = document.querySelector('.contenido');

contenedores.forEach(contenedor => {
  contenedor.addEventListener('click', () => {
    const coditem = contenedor.dataset.coditem;
    fetch(`books.php?id=${coditem}`)
      .then(respuesta => respuesta.json())
      .then(producto => {
        barraLateral.style.width = '470px';
        contenido.innerHTML = `
          <h3>${producto.nombre}</h3>
          <p>${producto.version}</p>
          <p>Precio: $${producto.precio}</p>
        `;
      });
  });
});


const cerrar = document.querySelector('.cerrar');
cerrar.addEventListener('click', () => {
  barraLateral.style.width = '0';
});

  </script>
