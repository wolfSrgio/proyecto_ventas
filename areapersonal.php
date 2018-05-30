
<?php

session_start();

//var_dump($_SESSION); // COMPRUEBO QUE  SE INICIARON BIEN LA SVARIABLES DE SESSION

$nom=$_SESSION['nom_cli'];
$emai=$_SESSION['email_cli'];
$imag=$_SESSION['img_cli'];


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Area personaliti</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
         <link href="img_paginas/iconolobo.png" rel="icon" type="image/x-icon"/><!-- icono de ventana--> 
          
         <link rel="stylesheet" href="css/personal/estilopersonal.css">
         
         <script src="js/jquery-3.3.1.js"></script>
        
         <script>
          /* sacado del manual ww3schol*/
             $(document).ready(function(){
                   $("#presiona").click(function(){
                      $(".menu").slideToggle("slow");
                       
                   
                    });
             });/*fin de ready*/
   
             </script>
   
        
    </head>
    <body>
        <div class="contenedor"><!--encierra todo-->
            <header>
                 <div class="logolobo"></div> 
            </header>
            <section class="main">
                
                <h1>BIENVENIDO  <?php echo $nom  ?> a tu AREA PERSONAL</h1><BR>
                
                <div id="presiona" >MOSTRAR EL MENU Y OCULTAR EL MENU</div>
            
                <div class="menu">
               <ul id="navigation">
                <li ><a href=""><span class="presiona">Entradas compradas</span></a></li>
                <li ><a href=""><span class="presiona">Modificar mis datos</span></a></li>
                <li ><a href="visitante.php"><span class="presiona">Volver a conciertos</span></a></li>
                <li ><a href="index_ito.php?desconectarme=si"><span class="presiona">Cerrar sesions</span></a></li>
                </ul>
                </div>
                <div class="resulmenu"> aqui se mostrara lo que se presiona en el menu
                    <br><br><br><br><br><br><br><br><br>
                
                </div>
                
                 <br><br>
            </section><!--  fin de la clase main -->
            
            
            <aside class="contieneimagen">
             
                <?php
                // COLOCAMOS LA FOTO
                      echo '   
                          <img src="'.$imag.'"> 
                              ';
                ?>
                 
              
                
            </aside>
            <footer>
                <p>Este es el pie de pagina</p>
            </footer>
        
        </div><!--fin del div contenedor-->
    </body>
</html>
