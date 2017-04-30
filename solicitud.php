<?php
  include("cabecera.php");
?>
  
   <!--INFORMACION-->
<div id="informacion" class="section scrollspy">
    <div class="container">
    <div class="row">
    <div class="fonfo">
       

       <div class="denunc">
           <h4 class="tituloD">Realiza tu Solicitud</h4>
        <form name="miform2" action="guardaSolicitud.php" method="POST"  >
        	<textarea  placeholder="Escribe su Solicitud" name="solicitud" id="texarea" ></textarea>
     
        	<input  id="Benvia" type="submit" value="Enviar">
        	
        	
		 </form>
           
           
       </div>

      </div>


  </div> 
</div>
</div>
<?php
  include("pie.php");
?>