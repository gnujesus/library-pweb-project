<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand navbar-size" href="./index.php">Librería Dominicana</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="./books.php">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./authors.php">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contáctanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar {
    background: transparent;
    border-bottom: 1px solid #ccc;
  }
  .navbar-brand {
    font-weight: bold;
    font-size: 1.5rem;
  }
  .navbar-nav .nav-link {
    color: #000;
  }
  .navbar-nav .nav-link:hover {
    color: #555;
  }
  .navbar-toggler-icon {
    color: #000;
  }
  .navbar-nav .btn {
    border: 1px solid #000;
  }
  .container-fluid {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .navbar-collapse {
    flex-grow: 0;
  }
</style>
