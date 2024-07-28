<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Librería Dominicana - Catálogo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4a2b2e0d5d.js" crossorigin="anonymous"></script>
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/breakpoints.css">

  <!-- Scripts -->
  <script src="./src/index.js"></script>

  <style>
    .book-card {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      max-width: 70%;
    }

    .book-card img {
      max-width: 150px;
      margin: 0 auto 1rem;
    }

    .book-card-title {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }
    .book-card-text {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }
    .book-card-price {
      font-size: 1.5rem;
      color: #28a745;
      margin-top: auto;
    }
    .card-button {
      background-color: #0f0f0f;
      color: #fff;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 0.25rem;
      cursor: pointer;
      margin-top: 0.5rem;
    }
    .card-button:hover {
      background-color: #292929;
    }
  </style>
</head>

<body>
  <header>
    <?php include "./layout/navbar.php" ?>
  </header>

  <main class="container my-4">
    <h1 class="title text-center mb-4">Explora nuestro catálogo!</h1>

    <?php
    include "model/connection.php";
    include "model/PaginationModel.php";

    $paginationModel = new PaginationModel($conn);

    $table = "titulos";
    $itemsPerPage = 4;
    $currentPage = $paginationModel->get_current_page();
    $startingIndex = $paginationModel->get_starting_index($currentPage, $itemsPerPage);
    $sql = "SELECT titulo, tipo, precio, notas, fecha_pub FROM titulos ORDER BY titulo ASC LIMIT $startingIndex, $itemsPerPage;";
    $pageCount = $paginationModel->get_page_count($table ,$itemsPerPage);
    $currentPageItems = $paginationModel->get_current_page_items($sql);
    ?>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php foreach ($currentPageItems as $row): ?>
        <?php
          setlocale(LC_TIME, 'es_ES.UTF-8');
          $fecha_pub_formateada = strftime("%d de %B de %Y", strtotime($row['fecha_pub']));
        ?>
        <div class="col d-flex justify-content-center">
          <div class="card h-100 book-card">
            <div class="card-body">
              <div class="container-fluid flex">
                <img src="./assets/book.png" alt="Book picture" />
              </div>
              <h2 class="card-title book-card-title text-white"><?php echo $row['titulo']; ?></h2>
              <p class="card-text book-card-text"><?php echo $row['notas']; ?></p>
              <p class="card-text book-card-text"><strong>Género:</strong> <?php echo $row['tipo']; ?></p>
              <p class="card-text book-card-text"><strong>Fecha de Publicación:</strong> <?php echo $fecha_pub_formateada; ?></p>
            </div>
            <div class="card-footer container-fluid flex">
              <h2 class="book-card-price text-white">$<?php echo $row['precio']; ?></h2>
              <button class="card-button">Detalles</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="page-navigator-container">
      <div class="page-navigator">
        <?php
        // Enlace a la página anterior
        $previousPageNumber = $currentPage - 1;
        $previousPage = ($currentPage > 1) ? "./books.php?p=$previousPageNumber" : "./books.php?p=1";
        echo "<a class='page-navigator-item page-navigator-prev' href='$previousPage'><</a>";
        ?>

        <?php
        // Enlaces a las páginas
        for ($i = 1; $i <= $pageCount; $i++) {
          echo "<a class='page-navigator-item' href='./books.php?p=$i'>$i</a>";
        }
        ?>

        <?php
        // Enlace a la página siguiente
        $nextPageNumber = $currentPage + 1;
        $nextPage = ($currentPage < $pageCount) ? "./books.php?p=$nextPageNumber" : "./books.php?p=$pageCount";
        echo "<a class='page-navigator-item page-navigator-next' href='$nextPage'>></a>";
        ?>
      </div>
    </div>
  </main>

  <footer>
    <?php include "./layout/footer.php" ?>
  </footer>
</body>

</html>
