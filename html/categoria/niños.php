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

  <div class="ctlg" >
  <?php include '../../procesos/conexion.php';
  $stmt = $conexion->prepare("SELECT * FROM item WHERE categoria = 9003");
  $stmt->execute();?>
  <?php include 'nav.php'; ?>
    <div class="titulo-cat" >
      <h1 style = "text-align: center;" >Conocimiento par Niños</h1>
    </div>
    <div class="container" >
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="box-book" >
        <img src="<?php echo $row['foto'];?>" alt="<?php echo $row['nombre'];?>">
        <div class="book-info">
            <h3 class="book-title"><?php echo $row['nombre'];?></h3>
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
  </div>
</body>
</html>