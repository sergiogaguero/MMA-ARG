<HTML> 
<HEAD> 
<TITLE>Producto.php</TITLE> 
</HEAD> 
<BODY> 
<?php 
include "Abrir_conexion.php";
$nombre=$_POST['First']; 
$apellido=$_POST['Last']; 
$apodo=$_POST['Apodo']; 
$categoria=$_POST['Categoria']; 
$peso=$_POST['Peso']; 
$altura=$_POST['Altura'];
$dia=$_POST['dia']; 
$mes=$_POST['mes']; 
$anio=$_POST['anio']; 
$academia=$_POST['Academia'];
$pais=$_POST['Pais']; 
$provincia=$_POST['Provincia']; 
$email=$_POST['Email'];

echo "('$nombre','$apellido','$apodo','$categoria','$peso','$altura','$anio'-'$mes'-'$dia ','$academia','$pais','$provincia')"; 
 
 $fechaNac = $anio."-".$mes."-".$dia;
 
$guardar = mysql_query("INSERT INTO `M_Peleadores`(`M_apellido`, `M_nombre`, `M_apodo`, `M_categoria`, `M_peso`, `M_altura`, `M_fechaNacimiento`, `M_Academia1`, `M_Pais`, `M_Prov`) VALUES ('$apellido','$nombre','$apodo','$categoria','$peso','$altura','$fechaNac','$academia','$pais','$provincia');"); 


$result=mysql_query("SELECT M_idPeleadores FROM M_Peleadores WHERE M_apellido ='$apellido' and M_nombre = '$nombre' and M_apodo = '$apodo' ",
							$conexion);

$row=mysql_fetch_row($result);

include "Cerrar_conexion.php";

$status = "";
if ($_POST["action"] == "upload" ) {

	$tamano = $_FILES["foto"]['size'];
	$tipo = $_FILES["foto"]['type'];
	$archivo = $_FILES["foto"]['name'];
	//$prefijo = substr(md5(uniqid(rand())),0,6);
	$data = getimagesize($_FILES['foto']['tmp_name']);
	
	echo "<h1>" .$tamano. " - " . $tipo. "-".$archivo ."  </h1>" . "  - - " .$data[0]." X ".$data[1];
	
	if ( 270 > $data[0] || 200> $data[1] ) 
	{
	
		echo "<h1>" .$tamano. " - " . $tipo. "-".$archivo ."  </h1>";
		if ($archivo != "" || $tipo == "image/gif" || $tipo == "image/jpeg" || $tipo == "image/jpg") {
		
			$destino =  "images/Peleadores/".$row[0].".jpg";
			if (copy($_FILES['foto']['tmp_name'],$destino)) {
				$status = "Archivo subido: <b>".$archivo."</b> con el nombre <b>" .$destino. "</b>";}
			else{
				$status = "Error al subir el archivo 3";
			}
		}else{
		
		$status = "Error al subir el archivo 21";
		}
	}else
	{$status = "Error la imagen debe ser de 270x200 o menor";
	}
echo "<h1>$status </h1>";
}


?> 
<h1><div align="center">Registro Insertado</div></h1> 
<div align="center"><a href="IngresoPeleador.php">Ingresar otro registro</a></div> 
</BODY> 
</HTML> 