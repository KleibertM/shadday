<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/init.css">
  <link rel="stylesheet" href="../css/books.css">
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!--<title>"" libros</title>-->
</head>

<body>
  <?php include '../procesos/conexion.php';
  $stmt = $conexion->prepare("SELECT categoria, nombre, version, coditem FROM item WHERE categoria = 9002");
  $stmt->execute();?>
  <?php include 'navbar.php'; ?>
  
  <section class="home">
  
    <div class="container-books">
    
      
      <div class="cont-des">
        <h2>Libros Recientes</h2>
        <div class="cont-books-deslist">
          <div class="triple"><?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="box-deslis">
              <a href="#" class="libroA">
                <div class="box-img">
                  <img src="https://g.christianbook.com/dg/product/web/f400/029638.jpg" alt="">
                </div>
                <div class="box-text"><?php echo $row['coditem'];?>
                  <h3><?php echo $row['nombre'];?></h3>
                  <p class="descrip"><?php echo $row['version'];?></p>
                  <div class="datos-extra">
                    <div class="date">
                      <p>190</p>
                      <p>paginas</p>
                    </div>
                    <div class="date">
                      <p>180</p>
                      <p>vistas</p>
                    </div>
                    <div class="date">
                      <p>7.5</p>
                      <p>puntos</p>
                    </div>
                  </div>
                </div>
              </a>
            </div><?php endwhile  ?>
        </div>
        </div>
      </div>
      

      
      <div class="cont-list-books">
        <h2>Libros para niños</h2>
        <div class="cont-books">
          <div class="doble"><?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="libro-portada">
              <a href="#">
              <div class="portada-img">
                <img src="https://g.christianbook.com/dg/product/web/f400/029638.jpg" alt="">
              </div>
              <div class="portada-text"><?php echo $row['coditem'];?>
                <h3><?php echo $row['nombre'];?></h3>
                <p><?php echo $row['version'];?></p>
              </div>
              </a>
            </div><?php endwhile  ?>
          </div>
        </div>
      </div>
      
      
      <div class="cont-des">
        <h2>Libros para Damas</h2>
        <div class="cont-books-deslist">
          <div class="triple">
          <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="box-deslis">
              <a href="#">
                <div class="box-img">
                  <img src="https://g.christianbook.com/dg/product/web/f400/029638.jpg" alt="">
                </div>
                <div class="box-text"><?php echo $row['coditem'];?>
                  <h3><?php echo $row['nombre'];?></h3>
                  <p class="descrip"><?php echo $row['version'];?></p>
                  <div class="datos-extra">
                    <div class="date">
                      <p>190</p>
                      <p>paginas</p>
                    </div>
                    <div class="date">
                      <p>180</p>
                      <p>vistas</p>
                    </div>
                    <div class="date">
                      <p>7.5</p>
                      <p>puntos</p>
                    </div>
                  </div>
                </div>
              </a>
            </div><?php endwhile  ?>
          </div>
        </div>
      </div>
      
      
      <div class="cont-list-books">
        <h2>Libros para Caballeros</h2>
        <div class="cont-books">
          <div class="doble"><?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="libro-portada">
              <div class="portada-img">
                <img src="https://g.christianbook.com/dg/product/web/f400/029638.jpg" alt="">
              </div>
              <div class="portada-text"><?php echo $row['coditem'];?>
                <h3><?php echo $row['nombre'];?></h3>
                <p><?php echo $row['version'];?></p>
              </div>
            </div><?php endwhile  ?>
          </div>
        </div>
      </div>
      
    </div>
    
  </section>
 
  <div id="barra-lateral">
  <i class='bx bx-x cerrar toggle'></i>
        <div class="contenido"></div>
    </div>

    
  <!----===== JS ===== -->
  <script src="../js/navbar.js"></script>
  <script>
    const libros = {
  libroA: {
    titulo: 'Libro C',
    descripcion: 'Esta es la descripción del Libro C.'

  },
  libroB: {
        <?php echo $row['coditem'];?>
        <?php echo $row['nombre'];?>
        <?php echo $row['version'];?>
        <?php echo $row['categoria'];?>
        <?php echo $row['editorial'];?>
        <?php echo $row['fecha'];?>
        <?php echo $row['stock'];?>
        <?php echo $row['categoria'];?>
  },
  libroC: {
    titulo: 'Libro C',
    descripcion: 'Esta es la descripción del Libro C.'
  } 
};

const contenedores = document.querySelectorAll('.libroA, .libroB, .libroC');
const barraLateral = document.querySelector('#barra-lateral');
const contenido = document.querySelector('.contenido');

contenedores.forEach(contenedor => {
  contenedor.addEventListener('click', () => {
    const nombreLibro = contenedor.classList[0];
    const libro = libros[nombreLibro];

    barraLateral.style.width = '470px';
    contenido.innerHTML = `
      <h3>${libro.titulo}</h3>
      <p>${libro.descripcion}</p>
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