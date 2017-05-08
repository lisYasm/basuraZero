<!--Footer-->
<footer id="registro" class="page-footer default_color scrollspy">

    <div class="footer-copyright default_color">
        <div class="container">
           <!-- Made by <a class="white-text" href="http://materializecss.com/">materializecss</a>-->
           <h5>Hecho por y para...</h5>
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