<?php
require '../../procesos/conexion.php';

$sql = "SELECT * FROM item";
$result = $conexion->query($sql);

if ($result->rowCount() > 0) {
    // Crear un array vacío para almacenar los datos de las películas
    $items = array();

    // Recorrer los resultados de la consulta y almacenar los datos de las películas en el array
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $items[] = $row;
    }
} else {
    echo "No se encontraron películas";
}
// Cerrar la conexión con la base de datos
$pdo = null;
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Catálogo de Libros</title>
    <link rel="stylesheet" href="../../css/ctlg.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/init.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include 'nav.php'; ?>
    <script src="../../js/navbar.js"></script>
    <section class="home">
  <div class="ctlg">
    <div class="titulo-cat">
      <h1>Conociemientos de Dios</h1>
    </div>
    <div class="container">
      <?php foreach ($items as $item) : ?>
        <div class="box-book" data-id="<?php echo $item['coditem']; ?>">
          <img src='<?php echo $item['foto']; ?>' alt="<?php echo $item['nombre']; ?>">
          <div class="book-info">
            <h3 class="book-title"><?php echo $item['nombre']; ?></h3>
            <p class="book-author"><?php echo $item['version']; ?></p>
            <p class="book-price">S/ <?php echo $item['precio']; ?></p>
          </div>
          <div class="btn-buy">
              <a class="a-buy" href="carrito/AccionCarta.php?action=addToCart&coditem=<?php echo $item["coditem"]; ?>">comprar</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div id="libro-details">
  <i class='bx bx-x cerrar toggle'></i>
  <div class="contenido"></div>
  <!-- Aquí se mostrarán los detalles del libro seleccionado -->
</div>

<script>
  const itemList = document.querySelectorAll('.box-book');
  const itemDetails = document.querySelector('#libro-details');
  const contenido = document.querySelector('.contenido');
  const closeButton = document.querySelector('.cerrar');
  const searchForm = document.querySelector('#search-form');
  const searchInput = document.querySelector('#search-input');

  itemList.forEach((item) => {
    item.addEventListener('click', (e) => {
      const itemId = e.target.closest('.box-book').dataset.id;
      fetch(`jestt.php?coditem=${itemId}`)
        .then(response => response.json())
        .then(data => {
          contenido.innerHTML = `
            <h4>${data.nombre}</h4>
            <img src="${data.foto}" alt="${data.nombre}">
            <p>Version: ${data.version}</p>
            <p>Letra: ${data.letra}</p>
            <p>N. Paginas: ${data.npag}</p>
            <p>Descripción: ${data.descripcion}</p>
            <p><b> S/ ${data.precio}</B></p>
          `;
          itemDetails.classList.add('active');
        });
    });
  });

  closeButton.addEventListener('click', () => {
    itemDetails.classList.remove('active');
  });

  searchForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const searchTerm = searchInput.value.toLowerCase();
  itemList.forEach((item) => {
    const bookTitle = item.querySelector('.book-title').textContent.toLowerCase();
    const bookAuthor = item.querySelector('.book-author').textContent.toLowerCase();
    const bookPrice = item.querySelector('.book-price').textContent.toLowerCase();
    if (bookTitle.includes(searchTerm) || bookAuthor.includes(searchTerm) || bookPrice.includes(searchTerm)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
});

</script>

    <script>
        fetch(`jestt.php?coditem=${item['coditem']}`)
    </script>
</body>

</html>
