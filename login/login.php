
<?php
$usuario = $_POST["txtusuario"];
$clave = $_POST["txtpassword"];

//Conectar a la Base de Datos
$conexion=mysqli_connect("localhost", "root", "", "users");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and password='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0) 
{
	session_start();
	$_SESSION['usuario'] = $usuario;
	echo "<script> alert('BIENVENIDO: $usuario');window.location= '/website/index.php' </script>";
}
else if ($filas == 0)
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('ERROR, EL USUARIO Y/O CONTRASEÑA SON INCORRECTOS');window.location= '/login/index.html' </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>