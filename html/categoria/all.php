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
  
    <div class="titulo-cat" >
      <h1 style = "text-align: center;" >Conociemientos de Dios</h1>
    </div>
    <div class="container" >
        <?php foreach ($items as $item): ?>
            <div class="box-book" data-id="<?php echo $item['coditem'];?>" >
            <img src='<?php echo $item['foto'];?>' alt="<?php echo $item['nombre'];  ?>">
            <div class="book-info">
                <h3 class="book-title"  ><?php echo $item['nombre'];?></h3>
                <p class="book-author"><?php echo $item['version'];?></p>
                <p class="book-price">S/ <?php echo $item['precio'];?></p>
            </div>
            </div>
        <?php endforeach; ?>    
      </div>
      <div id="libro-details">
        <!-- Aquí se mostrarán los detalles de la película seleccionada -->
    </div>
    
    <script>
        const itemList = document.querySelectorAll('.box-book');
        const itemDetails = document.querySelector('#libro-details');

        itemList.forEach((item) => {
            item.addEventListener('click',
                (e) => {
                    const itemId = e.target.closest('.box-book').dataset.coditem;
                    fetch(`jestt.php?coditem=${itemId}`)
                        .then(response => response.json())
                        .then(data => {
                            itemDetails.innerHTML = `
                                <h2>${data.nombre}</h2>
                                <img src="${data.foto}" alt="${data.nombre}">
                                <p>Año: ${data.version}</p>
                                <p>editorial: ${data.editorial}</p>
                                <p>Género: ${data.precio}</p>
                                <p>Descripción: ${data.descripcion}</p>
                            `;
                            itemDetails.classList.add('active');
                        });
                }
            );
        });
    </script>

<script>
    fetch(`jestt.php?coditem=${itemId}`)
</script>
</body>
</html>