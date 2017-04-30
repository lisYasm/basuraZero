<?php
  include("cabecera.php");
?>

  
   <!--INFORMACION-->
<div id="informacion" class="section scrollspy">
    <div class="container">
    <div class="row">
    <div class="fonfo">
      <div class="denunc">
           <h4 class="tituloD">Publica tu denuncia</h4>
        <form name="miform2" action="guardaDenuncia.php" method="POST"  >
        	<textarea  placeholder="Escribe tu denuncia" name="queja" id="texarea" ></textarea>
        	<input type="file" name="seleccionaUnafoto" id="seleccionaF" data-imagevalidate="yes" data-file-accept="jpg, jpeg, png, gif" data-file-maxsize="1024" data-file-minsize="0" data-file-limit="0" data-component="fileupload">
        
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

