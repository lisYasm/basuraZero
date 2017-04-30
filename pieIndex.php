<!--Footer-->
<footer id="registro" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="autentificausuario.php" method="post" name="formu">                   
                    <div class="row">
                        <div class="footer-copyright default_color">
                            <h5>Iniciar sesi&oacute;n </h5>
                        </div>
                            <input type="text" id="nick" placeholder="NickName o correo" class="input" name="correonick" >                  

                            <input type="password" id="password" placeholder="Password" class="input" name="password">

                            <input type="submit" value="Ingresar" class="input"> 
                    
                    <br>
                    <br>
                    <br>
                 	<div class="opForm" >
                 	    <h5><a href="#" >¿Olvidaste tu contraseña?</a></h5>
                        <h5><a href="#popup" class="popup-link">Crear una cuenta nueva</a></h5>
    <div class="modal-wrapper" id="popup">

        <div class="popup-contenedor">
            
            <form class="col s12" action="#" method="post" name="#">
                <h4>CREA UNA CUENTA NUEVA</h4>
                <input class="datosF" type="text" id="nickname" placeholder="Nickname" class="input">
                <input class="datosF" type="text" id="correo" placeholder="ejemplo@gmail.com" class="input">
                <input class="datosF" type="password" id="password" placeholder="Password" class="input">
                <input class="datosF" type="submit" value="REGISTRARSE" class="input"> 
            </form>
           <a class="popup-cerrar" href="#">X</a>
        </div>
    </div>
                 	   </div>

                    </div>
                </form>
                
            </div>
            <div class="col l6 s12">
                <div class="frase">
                
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
   
    </body>
</html>