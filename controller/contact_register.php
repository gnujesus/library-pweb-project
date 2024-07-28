<?php
  if (!empty($_POST["submit-contact-form"])) {
    if (!empty($_POST["name"]) and !empty($_POST["last-name"]) and !empty($_POST["email"]) and !empty($_POST["subject"]) and !empty($_POST["comment"])) {
      
      $name = $_POST["name"];
      $last_name = $_POST["last-name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $comment = $_POST["comment"];

      $sql = $conn -> query("INSERT INTO contacto(nombre, apellido, correo, asunto, comentario) values('$name', '$last_name', '$email', '$subject', '$comment')");
      if ($sql == 1) {
        echo "<div class='custom-alert custom-alert-success'>Mensaje enviado correctamente.</div>";
      } else {
        echo "<div class='custom-alert custom-alert-danger'>El mensaje no se envio correctamente.</div>";
      }
    } else {
      echo "<div class='custom-alert custom-alert-warning'>Alguno de los campos está vacío.</div>";
    }
  }
?>