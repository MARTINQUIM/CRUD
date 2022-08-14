<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO tarea(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'TAREA GUARDADA CORRECTAMENTE';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
