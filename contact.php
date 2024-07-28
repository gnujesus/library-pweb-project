<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Librería Dominicana - Contáctanos!</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
</head>
<body>
  <header>
    <?php include "./layout/navbar.php" ?>
  </header>

  <main>
    <div>
      <div class="p-4">
        <h3>¡Estamos aquí para asistirte!</h3>
        <p class="mb-4">¿Tienes alguna pregunta, comentario o sugerencia? No dudes en ponerte en contacto con nosotros. Nos comprometemos a ofrecerte el mejor servicio posible y a responder a tus inquietudes de manera rápida y eficiente.</p>
        <h4 class="text-white">Cómo contactarnos</h4>
        <ul class="mb-4">
          <li><small><strong>Email:</strong> <strong>soporte@libreriadominicana.com</strong></small></li>
          <li><small><strong>Teléfono:</strong> <strong>+1 (999) 999-9999</strong></small></li>
          <li>
            <a class="social-icon" href="https://facebook.com">
              <i class="fab fa-facebook-square"></i> 
            </a>
          </li>
          <li>
            <a class="social-icon" href="https://twitter.com">
              <i class="fab fa-x-twitter"></i> 
            </a>
          </li>
        </ul>

      </div>
      <div class="p-4 container-fluid">
        <form id="contact-form" method="POST">
          <h3 class="mb-3">Contáctanos!</h3>
          <?php
            include "model/connection.php";
            include "controller/contact_register.php";
          ?>
          <div class="fields">
            <input type="text" name="name" placeholder="Nombre/s" required>            
            <input type="text" name="last-name" placeholder="Apellido/s" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="subject" placeholder="Asunto" required>
            <textarea name="comment" placeholder="Comentario" required></textarea>
          </div>
          <button type="submit" class="cta-button" name="submit-contact-form" value="Enviar formulario">Enviar formulario</button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <?php include "./layout/footer.php" ?>
  </footer>
</body>
</html>
