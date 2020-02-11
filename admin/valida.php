<?php
$servidor = 'localhost:3306';
$usuario = 'root';
$clave = '';
$bd = 'hcl';
$link = mysqli_connect($servidor,$usuario,$clave,$bd) or die('Error al conectar a la base de datos');

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
  $usuario = $_POST['usuario'];
  $clave = $_POST['contrasena'];
  if ($usuario == "" || $clave == "") {
    print ("Los datos son requeridos");
    print ("<br>");
    print ("<a href = 'login.php' title='Datos requeridos'>Regresar</a>");
  }else {
    $sql = "SELECT * FROM administradores WHERE usuario='$usuario' and contrasena='$clave'";
    $r = mysqli_query($link,$sql);
    $n = mysqli_num_rows($r);
    $obj = mysqli_fetch_object($r);
    if ($n == 1) {
        session_start();
        $_SESSION['username'] = $usuario;

        header("Location: mostrar.php");
    }else {
      print ("Los datos son incorrectos <br>");
      print ("<a href = 'login.php' title='Datos requeridos'>Regresar</a>");
    }
  }
}
 ?>
