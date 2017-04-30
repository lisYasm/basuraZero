<?php

/*obetnemos las variables del fromulario*/
 	$queja=$_REQUEST['queja'];
	$img=$_REQUEST['seleccionaUnafoto'];
	



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

if($queja != null and $img!=null ){

				
	$sqlP="insert into publicacion values (null,'2017-04-25 08:39:00','$queja',1,3 )";
	$sqlD="insert into denuncia values(null)";
	
		/*INSERT INTO `imagen` (`idImagen`, `imagen`, `tipoImagen`, `tipoImagen2`, `idPublicacionDen`, `idInformacion`) VALUES
(1,000, 'avatar', 'image', NULL, NULL),
*/
	/*INSERT INTO `publicacion` (`idPublicacion`, `horaFecha`, `texto`, `estado`, `idUbicacion`) VALUES
(1, '2017-03-01 22:15:00', 'Vi a esta persona botando varias bolsas de basura en una plaza ', 1, 3),*/
	
	/*INSERT INTO `denuncia` (`idPublicacionDen`) VALUES
(1),*/
	
			$res1=mysql_query($sqlP) or die ("Error en la consulta Publicacion");
			$res2=mysql_query($sqlD) or die ("Error en la consulta Denuncia");
			//$res3=mysql_query($sqlI) or die ("Error en la consulta Imagen");
	
			$reg1=mysql_fetch_row($res1);
			$reg2=mysql_fetch_row($res2);
			//$reg3=mysql_fetch_row($res3);
		echo "<script> alert('Datos Guardados !!'); window.location='perfil.php'</script>";
	
	

	
}else{ echo "<script> alert('Espacios Vacios !! intente otra vez '); window.location='denuncia.php'</script>";}	

?>