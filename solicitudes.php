<?php
	include("cabecera.php");
?>
<!--INFORMACION-->
<div id="informacion" class="section scrollspy">
    <div class="container">
        <div class="row">
            
            
            <!--SOLICITUDES-->
            <div class="x_panel">
                <h3>SOLICITUDES</h3>
                <!-- Contenedor Principal -->
                <div class="comments-container">
                    <ul id="comments-list" class="comments-list">
                                    <?php
                                        include("conexion.php");
                                        $con = new conexion();
                                        $con->conectarse();
                                        $q = "SELECT pu.texto, ca.nombre, r.nicknameUsu, pu.horaFecha
                                            FROM publicacion pu, solicitud s, ubicacion u, calleavenida ca, realiza2 r
                                            WHERE pu.idPublicacion = s.idPublicacionSol AND pu.idUbicacion = u.idUbicacion and u.idCalle = ca.idCalle AND r.idPublicacion = pu.idPublicacion
                                            ORDER BY pu.horaFecha DESC";
                                        $resultado = mysql_query($q);
                                        while ($fila = mysql_fetch_array($resultado)) {
                                    ?>
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="img/avatar1.jpg" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a>
                                        <?php
                                            echo "$fila[nicknameUsu]";
                                        ?>
                                        </a></h6>
                                        <span>
                                        Fecha y Hora de Publicacion: 
                                        <?php
                                            echo "$fila[horaFecha]";
                                        ?>
                                        </span>
                                    </div>
                                    <div class="comment-content">
                                    <?php
                                            echo "$fila[texto] <br><br>";
                                            
                                    ?>    
                                    <img src="img/ubicacion.jpg" alt="" width=20px><strong>Lugar de Solicitud: </strong>
                                    <?php
                                            echo "$fila[nombre]";
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>   
                        </li>
                    </ul>   
                </div>
            </div>
          
        </div>
    </div>
</div>
<?php
	include("pie.php");
?>