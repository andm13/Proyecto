<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Icons link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <!--Css link-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/viewport.css">
  </head>
  <body>
   
    <!--Jquery, popper.js and JS link-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$servidor = 'localhost:3306';
$usuario = 'root';
$clave = '';
$bd = 'hcl';
$link = mysqli_connect($servidor,$usuario,$clave,$bd) or die('Error al conectar a la base de datos');

if (isset($_POST['email']) && isset($_POST['mensaje']) && isset($_POST['asunto'])){
    $email = $_POST['email'] ;
    $asunto = $_POST['mensaje'];
    $mensaje = $_POST['asunto'];

    $sql = "INSERT INTO mensaje(email,asunto,mensaje) VALUES ('$email','$asunto','$mensaje') ";
    $res = @mysqli_query($link,$sql) or die ('No se pudo enviar el mensaje');
    if ($res) {
        echo ' <div class="jumbotron">
        <h1 class="display-4">Se a enviado correctamente el mensaje</h1>
        <p class="lead">Gracias por contactarse con nosotros. Nos pondremos en contacto muy pronto.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="../HTML/main.html" role="button">Regresar a Inicio</a>
    </div>';
    }
}
   
?>