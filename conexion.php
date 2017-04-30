<?php
	class conexion{
		function conectarse(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db= "bdbasura";

			$cone = mysql_connect($host, $user, $pw) or die("Falla de conexion");
			mysql_select_db($db, $cone) or die ("No se encontro la base de datos");
		}
	} 
?>