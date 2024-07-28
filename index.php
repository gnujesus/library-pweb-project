<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Librería Dominicana - Home</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <script src="https://kit.fontawesome.com/4a2b2e0d5d.js" crossorigin="anonymous"></script>
  
  <!-- CSS -->
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/breakpoints.css">

  <!-- JS -->
  <script src="./src/index.js"></script>
</head>
<body>
  <header>
    <?php include "./layout/navbar.php" ?>
  </header>

  <article id="home-image">
    <div></div>

    <div>
      <h1>Bienvenidos a nuestra librería digital</h1>
      <p>Descubre nuestra selección de libros y encuentra nuevos escritores</p>
    </div>

    <div></div>
  </article>
  
  <article id="books-section" class="home-container">
    <div class="left-column">
      <h1>Encuentra tu próxima lectura</h1>
      <p>Revisa nuestra colección de libros y elige tus próximos favoritos. Puedes buscar por género, título o autor para encontrar justo lo que deseas. Nuestra amplia gama de obras literarias te llevará a aventuras increíbles y experiencias enriquecedoras. ¡Disfruta de una nueva experiencia de lectura!</p>
      <a href="./books.php"><button class="cta-button">Explorar Libros</button></a>
    </div>
    <div class="right-column">
      <img class="img" src="./assets/bookshelf.jpg" alt="Book section image" />
    </div>
  </article>

  <article id="authors-section" class="home-container">
    <div class="right-column">
      <img class="img" src="./assets/author_section.jpg" alt="Writer Image" />
    </div>
    <div class="left-column">
      <h1>Conoce a los autores</h1>
      <p>Adéntrate en el fascinante universo de los autores y descubre las mentes creativas detrás de tus libros preferidos. Aquí encontrarás información sobre escritores famosos, sus obras más notables y su influencia en la literatura. Desde clásicos eternos hasta autores modernos, explora la diversidad y riqueza de la escritura.</p>
      <a href="./authors.php"><button class="cta-button">Saber más</button></a>
    </div>
  </article>

  <article id="contact-section" class="home-container">
    <div class="left-column">
      <h1>¡Comunícate con nosotros!</h1>
      <p>Estamos aquí para ayudarte. Si tienes alguna pregunta, comentario o sugerencia, por favor ponte en contacto con nuestro equipo. Apreciamos tus opiniones y nos esforzamos por brindarte la mejor experiencia posible. Completa el formulario a continuación y nos pondremos en contacto contigo a la brevedad.</p>
      <a href="./contact.php"><button class="cta-button">Contáctanos!</button></a>
    </div>
    <div class="right-column">
      <img class="img" src="./assets/contact_us.jpg" alt="Contact section image" />
    </div>
  </article>

  <footer>
    <?php include "layout/footer.php" ?>
  </footer>
</body>
</html>
