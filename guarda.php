<?php

/*obetnemos las variables del fromulario*/
 	$nick=$_REQUEST['nick'];
	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$correo=$_REQUEST['correo'];
	$sexo=$_REQUEST['sexo'];



/*	ECHO  "<br> daTOS" . "<BR>";
	
	// tutor 
	echo $nick . "<BR>";
	echo $nombre . "<BR>";
	echo $apellido . "<BR>";
	echo $correo . "<BR>";
	echo $sexo . "<BR>";
*/
 /*conectamos con la BD*/

 $conecta= mysql_connect("localhost","root") or die("Err Mysql");// abre una coneccion al servidoer Mysql
 mysql_select_db("bdbasura") or die("Error en DataBase"); //selecciona labase de datos

if($nick != null and $nombre!=null and $apellido !=null and $correo!=null and $sexo!=null){

				
	$sqlP="insert into persona values ('$nick','$nombre','$apellido','2000-10-10', '$sexo','$correo','password','0','3')";
	
			$res1=mysql_query($sqlP) or die ("Error en la consulta");
			$reg1=mysql_fetch_row($res1);
		echo "<script> alert('Datos Guardados !!'); window.location='perfil.php'</script>";
	
	
	/*INSERT INTO `persona` (`nickname`, `nombre`, `apellido`, `fechanac`, `sexo`, `correo`, `password`, `estado`, `idUbicacion`) VALUES
('alquimia', 'Julian Albert', 'Vargas Rodriguez', '1997-10-04', 'Masculino', 'vargasjuly@yahoo.com', 'july456', 0, 3),*/
	
}else{ echo "<script> alert('Espacios Vacios !! intente otra vez '); window.location='perfil.php'</script>";}	

?>