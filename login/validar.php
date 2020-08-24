<center>
<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "", "formulario");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and  clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:../Admin/index.html");
}

else {
	echo "intentelo de nuevo";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?> 
<br>

<a href="index.php"><button>atras</button></a>
</center>