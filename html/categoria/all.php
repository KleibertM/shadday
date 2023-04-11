<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Catálogo de Libros</title>
  <link rel="stylesheet" href="../../css/ctlg.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/init.css">
  
  <link rel="stylesheet" href="../../css/books.css">
  
    <!----===== Boxicons CSS ===== -->
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <?php include 'nav.php'; ?>
  <nav class="main-nav">
    <h1 style = "text-align: center;" >Shaddai</h1>
  </nav>
  <div class="ctlg" >
  <?php include '../../procesos/conexion.php';
  $stmt = $conexion->prepare("SELECT * FROM item");
  $stmt->execute(); 
  ?>
    <div class="titulo-cat" >
      <h1 style = "text-align: center;" >Conociemientos de Dios</h1>
    </div>
    <div class="container" >
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
          <div class="box-book" >
          <img src='<?php echo $row['foto'];?>' alt="<?php echo $row['nombre'];  ?>">
          <div class="book-info">
              <h3 class="book-title" id="<?php echo $row['coditem'];?>" ><?php echo $row['nombre'];?></h3>
              <p class="book-author"><?php echo $row['version'];?></p>
              <p class="book-price">S/ <?php echo $row['precio'];?></p>
          </div>
          </div>
        <?php endwhile  ?>    
    </div>
    <div id="barra-lateral">
  <i class='bx bx-x cerrar toggle'></i>
        <div class="contenido"></div>
    </div>
    <!----===== JS ===== -->
  <script src="../../js/navbar.js"></script>

   <script>
    const libros = {
  container: {
    titulo: 'hola',
    descripcion: 'test',
    editorial: 'sds',
    categoria: 'sds',
    precio: '232'

  }
};

const contenedores = document.querySelectorAll('.container ');
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
</script>
</body>
</html>