<?php

/*obetnemos las variables del fromulario*/
 $correonick=$_REQUEST['correonick'];
 $password=$_REQUEST['password'];
  /*conectamos con la BD*/

 $conecta= mysql_connect("localhost","root") or die("Err Mysql");// abre una coneccion al servidoer Mysql
 mysql_select_db("bdbasura") or die("Error en DataBase"); //selecciona labase de datos


if($correonick != null and $password !=null ){
		
			$sql1="Select nickname from persona where nickname='$correonick'";
			$sql1c="Select correo from persona where correo='$correonick'";			
			//$sql2="Select password from persona where password = md5('$password')";
			$sql2="Select password from persona where password = '$password'";

			$res1=mysql_query($sql1) or die ("Error en la consulta");
			$res1c=mysql_query($sql1c) or die ("Error en la consulta");
			$res2=mysql_query($sql2) or die ("Error en la consulta");
			
			$reg1=mysql_fetch_row($res1);
			$reg1c=mysql_fetch_row($res1c);
			$reg2=mysql_fetch_row($res2);

			//if( ($reg1[0] == $correonick or $reg1c[0]=$correonick) and $reg2[0] == md5($password)) {
			if( ($reg1[0] == $correonick or $reg1c[0]=$correonick) and ($reg2[0] == $password) ) {				
				echo "<script> alert('Bienvenido'); window.location='perfil.php'</script>";			
			 }

			 else{
			 echo "<script> alert('Error de Autentificacion'); window.location='index.html'</script>";
			 
			}
		
	}else{ echo "<script> alert('Espacios Vacios !! intente otra vez '); window.location='index.html'</script>";}	


?>