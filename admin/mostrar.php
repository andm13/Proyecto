<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>

    <?php
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $clave = '';
    $bd = 'hcl';
    $link = mysqli_connect($servidor,$usuario,$clave,$bd) or die('Error al conectar a la base de datos');

    $sql="SELECT * FROM mensaje";
    $res = @mysqli_query($link,$sql) or die("Error al obtener los mensajes");
     print "   <h1 class='text-center m-3'> Mensajes</h1>";
        while ($fila =mysqli_fetch_object($res)) {
          $asunto= $fila->asunto;
          $correo= $fila->email;
          $mensaje= $fila->mensaje;
          echo "    <div class='jumbotron container'>
                        <div class='container'>
                            <h1 class='display-4'>$asunto</h1>
                            <p class='lead'>$mensaje</p>
                            <small>De: $correo</small>
                        </div>
                    </div>
                    ";
        }
    ?>
    
  </head>
  <body>
 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</hmtl>