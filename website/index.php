<?php
     session_start();
     $varsession = $_SESSION['usuario'];
?>

<?php
     
     if($varsession == null || $varsession = ''){
        echo "<script> alert('ACCESO DENEGADO, NO HAS INICIADO SESION');window.location= '/login/index.html' </script>";
         die();
     }
     
?>

<html>
<head>
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="icon/png" href="https://images.vexels.com/media/users/3/153156/isolated/lists/9ce84f06c10bdd87608f48fc2e599661-icono-de-computadora-de-juegos.png">
<link rel="stylesheet" href="test.css">
<title> SISTEMA DE CONTROL DE CORTE Y CONEXION. </title>
</head>

       <body>
        
       <h1 class="title">SISTEMA DE CONTROL DE CORTE Y CONEXION</h1>
       
       <div class="control">
           <div class="control1">
       <h1>CONTROL DE SERVICIO MEDIDOR # 080201</h1>
        <form method="get" action="index.php">
            <input class="btn1apagar" style="border-radius: 10px;" type="submit" style = "font-size: 16 pt" value="Apagar" name="off-1">
            <input class="btn1encender" style="border-radius: 10px;" type="submit" style = "font-size: 16 pt" value="Encender" name="on-1">
        </form>
        

<?php
    shell_exec("/usr/local/bin/gpio -g mode 17 out");
    if(isset($_GET['off-1']))
        {
                        echo "CLIENTE 080201 NO ACTIVO";
			shell_exec("/usr/local/bin/gpio -g write 17 0");
        }
            else if(isset($_GET['on-1']))
            {
                        echo "CLIENTE 080201 ACTIVO";
                        shell_exec("/usr/local/bin/gpio -g write 17 1");
            }
?>

</div>

  
        
        <div class="control2">
        <h1>CONTROL DE SERVICIO MEDIDOR # 080202</h1>
         <form method="get" action="index.php">
            <input class="btn1apagar" style="border-radius: 10px;" type="submit" style = "font-size: 16 pt" value="Apagar" name="off-2">
            <input class="btn1encender" style="border-radius: 10px;" type="submit" style = "font-size: 16 pt" value="Encender" name="on-2">
         </form>
         

<?php
    shell_exec("/usr/local/bin/gpio -g mode 22 out");
    if(isset($_GET['off-2']))
        {
                        echo "CLIENTE 080202 NO ACTIVO";
                        shell_exec("/usr/local/bin/gpio -g write 22 0");
        }
            else if(isset($_GET['on-2']))
            {
                        echo "CLIENTE 080202 ACTIVO";
                        shell_exec("/usr/local/bin/gpio -g write 22 1");           
 }

?>

</div>       




  
  <div class="control3">
  <h1>CONTROL DE SERVICIO MEDIDOR # 080203</h1>
         <form method="get" action="index.php">
            <input class="btn1apagar" style="border-radius: 10px;" type="submit" style = "font-size: 16px" value="Apagar" name="off-3">
            <input class="btn1encender" style="border-radius: 10px;" type="submit" style = "font-size: 16px" value="Encender" name="on-3">
         </form>
         
         
<?php
    shell_exec("/usr/local/bin/gpio -g mode 27 out");
    if(isset($_GET['off-3']))
        {
            
                        echo "CLIENTE 080203 NO ACTIVO";
                       shell_exec("/usr/local/bin/gpio -g write 27 0");
        }
            else if(isset($_GET['on-3']))
{
		echo "CLIENTE 080203 ACTIVO";
			shell_exec("/usr/local/bin/gpio -g write 27 1");
}
?>
</div>
         </div>
         <div class="botoncerrar">
         <form method="get" action="salir.php">
       <input class="btnsalir" style="border-radius: 10px;" type="submit" style = "font-size: 16 pt" value="Cerrar Sesion" name="session-off">
       </form>
       </div>

   </body>
</html>
