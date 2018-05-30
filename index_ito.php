
<?php

include ("php/sesion.php");

if(isset($_GET['desconectarme']))
   {
  
    matasesion();
   }

  
   if(isset($_SESSION['cargo']))// SI TIENE SESSION[ cargo], es que es un administrador
   {                               // por lo tanto lo redirijo ala pagina de administrador
  
    header("location:administrador.php");
   }else if(isset($_SESSION['nom_cli'])){ // si tiene esta sesion esque  ya estaba registrado como cliente
        
             header("location:visitante.php");
             }



?>


<html>
    <head>
        <title>Wolf Events</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="css/inicio/fontello.css">
        <link rel="stylesheet" href="css/inicio/estilos.css">
        <link rel="stylesheet" href="css/inicio/slide.css">
        
        <script src="js/jquery-3.3.1.js"></script>
         <script src="js/modal.js"></script>
         
         
         
           <script>
                 
             window.onload=function(){
                 
                var ventanamod=document.getElementById("log");
                 ventanamod.onclick=abrirmod;/* esta funcion esta en modal.js */
                 
                 var  cerrarmodal=document.getElementById("cerrar_mod");
                 cerrarmodal.onclick=cerrarmod;
                
                 };
                  </script>
        
    </head>
    <body>
       <div class="contenedor">
        <!-- <audio src="audio/audimezcla.mp3" type="audio/mp3; codecs=MP3" autoplay  ></audio>-->
                 <header class="cabeza">
                  <img src="img_index/wolfevent.gif">
                  </header>
        
            <div class="menu">
            <ul>
                <li><a  id="log"  href="#">Logeate</a></li>
                <li><a href="registro.php">Registrate</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
             </ul>
         </div>
        
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
        
        
        
           <section class="logo">
               <img src="img_index/logo.jpg" >
           </section>
           <section class="linea">
               <a href="visitante.php"><marquee class="marque" behavior="alternate"><b>CLICK ---AQUI--- PARA ENTRAR</marquee>
               
                               </a>
                    </section>
           
           <section  class="sli">
                <div class="slider img-circle"  > </div><!-- usamos la class=" img-circle "
                                                 para un contorno ovalado , que pertenece a bootstrap -->
           </section>
          
         <footer>© 2018 Impulsa Eventos Desarrollado by  SrgioCh IES EL CAÑAVERAL
         </footer>
       </div>
    </body>
</html>
