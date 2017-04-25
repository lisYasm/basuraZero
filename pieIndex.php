<!--Footer-->
<footer id="registro" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">                   
                    <div class="row">
						<div class="footer-copyright default_color">
							<h5>Iniciar sesi&oacute;n </h5>
						</div>
							<input type="text" id="nick" placeholder="NickName o correo" class="input">                  

							<input type="password" id="password" placeholder="Password" class="input">

							<input type="submit" value="INGRESAR" class="input"> 
                    
                    <br>
                    <br>
                    <br>
                 	<div class="opForm" >
                 	    <h5><a href="#" >¿Olvidaste tu contraseña?</a></h5>
                        <h5><a href="javascript:abrirPagina()">Crear una cuenta nueva</a><h5>

                 	   </div>

                    </div>
                </form>
                
            </div>
            <div class="col l6 s12">
                <div class="frase">Registrate en BASURA ZERO, con tu ayuda lograremos un mundo mejor.
                Al registrarte podras publicar fotos de personas y/o cosas que hacen daño al medio ambiente, podras solicitar
                contenedores de basura o carros basureros, podras publicar eventos que se realizan en para mejorar el medio
                ambiente, como ser eventos de reciclaje.
                </div>        
            </div>
            
 
                
                 
          
            
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
           <!-- Made by <a class="white-text" href="http://materializecss.com/">materializecss</a>-->
           <h5>Hecho para....</h5>
        </div>
        
    </div>
</footer>


    <!-- Para el primer slider, el que aparece al iniciar la pagina-->
    <script src="js/plugin-min.js"></script>
    <script src="js/custom-min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 //cambia la velocidad
    })
    </script>
    <!--Para el segundo slider, que se encuentra en evento-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(window).load(function(){
        $('#slider').nivoSlider({
            effect: 'fade',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            pauseTime: 4000,  //cambia la velocidad
            startSlide: 0,
            directionNav: true,
            controlNav: true,
            controlNavThumbs: false,
            pauseOnHover: true,
            manualAdvance: false,
            prevText: 'Prev',
            nextText: 'Next',
            randomStart: false,
        });
    });
    </script>
    <!--script para abrir la ventana emergente-->
    <script> 
        function abrirPagina() { 
        open('crearCuenta.php','','top=150,left=300,width=400,height=400, resizable=false')
        }    
    </script> 
    </body>
</html>