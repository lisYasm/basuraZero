<?php
  include("cabecera.php");
?>

<!--INFORMACION-->
<div id="informacion" class="section scrollspy">
    <div class="container">
    <div class="row">
    <div class="fonfo">
       <div class="foto">
           <div class="nick"> NICK NAME</div>

           <div class="fotoPerfil"></div>
           <div class="boton1">Cambiar</div>
           
       </div>

       <div class="datos">
           
        <form name="miform2" action="guarda.php" method="POST"  >
        
        <!--   
        
        <div class="datos1"></div>
        <div class="datos1"></div>
        	<label for="nombre" class="labell">Nick</label>
			<input id="texto1" type="text" name="nick" size="30" placeholder="Nick" class="imput">

			<label for="nombre" class="labell">Nombre:</label>
			<input id="texto2" type="text" name="nombre" size="30" placeholder="Nombre" class="imput">

			<label for="nombre" class="labell">Apellidos:</label>
			<input id="texto3" type="text" name="apellido" size="30" placeholder="Apellidos" class="imput">

			<label for="nombre" class="labell">Pasword:</label>
			<input id="texto4" type="password" name="usuario" size="30" placeholder="Password" class="imput">

			<label for="nombre" class="labell">Correo:</label>
			<input id="texto5" type="text" name="usuario" size="30" placeholder="Correo" class="imput">

			<label for="nombre" class="labell">Fecha Nacimiento:</label>
			<input id="texto6" type="text" name="usuario" size="30" placeholder="Fecha Nacimiento" class="imput">

			<label for="nombre" class="labell">Sexo:</label>
			<input id="texto7" type="text" name="usuario" size="30" placeholder="Sexo" class="imput">

			<label for="nombre" class="labell">Direccion</label>
			<input id="texto8" type="text" name="usuario" size="30" placeholder="direccion" class="Bimput">

			 <input type="submit" value"Guardar"> 
        -->
			<input id="texto1" type="text" name="nick"  placeholder="Nick" class="imput">
			<input id="texto2" type="text" name="nombre"  placeholder="Nombre" class="imput">
			<input id="texto3" type="text" name="apellido"  placeholder="Apellidos" class="imput">
			<!--<input id="texto4" type="password" name="password" placeholder="Password" class="imput">-->
			<input id="texto5" type="text" name="correo"  placeholder="Correo" class="imput">
			<input id="texto7" type="text" name="sexo"  placeholder="Sexo" class="imput">
			 <input type="submit" value"Guardar" class="Bimput">  
		 </form>
           
           
       </div>

      </div>


  </div> 
</div>
</div>
<?php
  include("pie.php");
?>

