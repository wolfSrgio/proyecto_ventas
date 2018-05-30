
<?php

session_start();

//var_dump($_SESSION); // COMPRUEBO QUE  SE INICIARON BIEN LA SVARIABLES DE SESSION



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Wolf Events</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="css/visitante/modal.css">
          <link rel="stylesheet" href="css/visitante/fontello.css">
         <link rel="stylesheet" href="css/visitante/inicio.css">
        <link rel="stylesheet" href="css/visitante/menu.css">



         <link href="img_paginas/iconolobo.png" rel="icon" type="image/x-icon"/><!-- icono de ventana--> 

  <script src="js/jquery-3.3.1.js"></script>
         <script src="js/modal.js"></script>


<script>
                 
                 window.onload=function(){
                     
                    var ventanamod=document.getElementById("logea");
                     ventanamod.onclick=abrirmod;/* esta funcion esta en modal.js */
                     
                     var  cerrarmodal=document.getElementById("cerrar_mod");
                     cerrarmodal.onclick=cerrarmod;
                    
                     };
                      </script>




    </head>
    <body>
        <header>
            <div class="contenedor">
               <img src="img_paginas/logowolf.png" class="logo">
                <input type="checkbox" id="inpumenubar">
                <label for="inpumenubar" class="icon-menu"></label>
                <nav class="menu">
                    <?php
                       if(isset($_SESSION['nom_cli'])){ /* ES MEJOR QUE PONER SOLO :   if(isset($_SESSION)))*/
                           
                         
                           $usuari=$_SESSION['nom_cli'];//SI YA SOMOS USUARIOS REGISTRADOS
                         
                         
                        echo '<span>BIENVENIDO '.$usuari.'</span>
                              <a href="areapersonal.php">Tu perfil</a>
                              <a href="index_ito.php?desconectarme=si">Cerrar Sesion</a>';
                         }
                       else{
                    ?>
                     <a  id="logea">logeate</a>
                    <a href="registro.php">registrate</a>
                     
                   
                    <?php
                       }// fin del else
                    ?>
                  <a href="nosotros.php">Contacto</a>
                   

                  </nav>
            </div> 
        </header>
        <main>
       
        <div id="ven_mod"><!-- ventana modal -->
             
             <h1 style="background:black; color: white;">INTRODUCE  TUS DATOS Y LOGEATE </h1>
            
             <div class="formula">
                 
                 <form id="formu" action="php/valida_login.php" method="POST">
                     <label for="nom">email : </label>
                     <input type="email" class="texto" id="ema" name="ema_log"><br>
                       
                     <label for="pass">Contrase&ntildea : </label>
                     <input type="password" class="texto" id="pass" name="pasw_log"> <br><br>

                      <input type="submit" value="enviar" id="btnenvia">  <!-- empleo un submit-->    
                 </form>
                 <?php   /*PARA COMPROBAR SI HAY ERROR*/
                  if(isset($_GET['errorLogin']) ){
                   
                    if($_GET['errorLogin']=="vacio")
                    echo "<span style='color:red'><strong>LOS CAMPOS  NO DEBEN QUEDAR VACIOS</strong></span>";
                    else
                    echo "<span style='color:red'><strong>ESE EMAIL NO ESTA REGISTRADO o contraseña incorrecta</strong></span>";
               
               
                    echo '
                     <script>
                           abrirmod();// si tenemos un error abrira automaticamente el modal
                     </script>
                     
                     ';
                  } /*  FIND E COMPROBACION DE ERRORES */

              ?>

              
                <div class="cerrar_mod" style="text-align:right ; margin-right: 40px;" ><span id="cerrar_mod"  style="font-size:13px;">cerrar login  </span>X</div>
           </div> <!-- class=formula-->
             
           <h3 style="background:black; color: white;" >Si no tienes cuenta aun  <strong>Registrate</strong>  por favor</h3>
      
         </div><!-- fin de la ventana modal-->
        
        


            <section id="banner">
                
                <img src="img_paginas/baner.jpg">
                
            </section>
         
            <section id="info">
                <h2><FONT FACE="times new roman">ESTAS SON LAS PRESENTACIONES DE TUS ARTISTAS  EN MAYO</FONT></h2>
                <h3> click en el nombre del artista para  comprar entrada</h3>
                <div class="contenedor">
                    <div class="informa">
                        <img src="img_paginas/artista/cloud.jpg" alt="">  
                        <h4 ><a href="artista.php">Cloud Covers</a></h4>
                    </div>
                     <div class="informa">
                        <img src="img_paginas/artista/inf2.jpg" alt="">  
                        <h4>hige</h4>
                    </div>  
                     <div class="informa">
                        <img src="img_paginas/artista/inf3.jpg" alt="">  
                        <h4>Toboe</h4>
                    </div>  
                     <div class="informa">
                        <img src="img_paginas/artista/inf4.jpg" alt="">  
                        <h4>Tsume</h4>
                    </div>  
                    
                   
                </div> 
            </section>
            
               
            <section id="bienvenidos">
                 <div class="contenedor">
                 <h2>BIENVENIDO/A  CONSULTA NUESTROS PROXIMOS EVENTOS</h2>
                 <p> Cada mes  nuevos  conciertos  de artista  que esperas, <br> Recuerda que puedes contar con nosotros  para sacar  ala estrella que <br>
                     llevas dentro , no te limites , solo preguntanos , te brindaremos encantados informacion</p>
            </section>
            </div>
            <section id="blog">
                 
                       <div class="contenedor">
                         <article>
                              <img src="img_paginas/proximoseventos.jpg">
                    
                         </article>
                          <article><h4>Calendario 2018</h4>
                              <img src="img_paginas/blog2.jpg">
                         </article>
                         <article>
                              <img src="img_paginas/blog3.jpg">
                             <h4>Lobo  spirit  libre wolf </h4>
                         </article>
                   </div>
            </section>
            
            
            
            
            
        </main>
        <footer>
            <div class="contenedor">
                <!--  simbolo de copyright &copy-->
                <p class="copy">The Wolfs &copy; 2018</p>
                <div class="sociales">
                    <a class="icon-face" href="#"></a>
                    <a class="icon-insta" href="#"></a>
                    <a class="icon-gplus" href="#"></a>
                    <a class="icon-music" href="#"></a>
                </div>
            
            </div>  
        </footer>    
    </body>
</html>

