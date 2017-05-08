
<input class="datosF" type="text" id="nickname" placeholder="Nickname" class="input" name="nickname" <?php $validador -> mostrar_nickname() ?>>
<?php
	$validador -> mostrar_error_nickname();
?>
    	 
<input class="datosF" type="email" id="correo" placeholder="ejemplo@email.com" class="input" name="correo" <?php $validador -> mostrar_correo() ?>>
<?php
	$validador -> mostrar_error_correo();
?>
<input class="datosF" type="password" id="password" placeholder="Password" class="input" name="clave1">

<?php
	$validador -> mostrar_error_clave1();
?>

<input class="datosF" type="password" id="password" placeholder="Repite tu contraseña" class="input" name="clave2">

<?php
	$validador -> mostrar_error_clave2();
?>


<input class="datosF" type="submit" value="REGISTRARSE" class="input" name="enviar" > <input type="reset" value="LIMPIAR" class="input" >