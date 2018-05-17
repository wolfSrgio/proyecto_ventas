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
                 ventanamod.onclick=abrirmod;
                 
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
                <li><a href="#nosotros">Nosotros</a></li>
             </ul>
         </div>
        
        <div id="ven_mod"><!-- ventana modal -->
             
             <h1 style="background:black; color: white;">INTRODUCE  TUS DATOS Y LOGEATE </h1>
            
             <div class="formula">
                 
                 <form id="formu" "action="">
                     <label for="nom">Nombre : </label>
                     <input type="text" class="texto" id="nom"><br>
                       
                     <label for="pass">Contrase&ntildea : </label>
                     <input type="password" class="texto" id="pass"> <br><br>
                      <input type="button" value="enviar" id="btnenvia">      
                 </form>
                <div class="cerrar_mod" style="text-align:right ; margin-right: 40px;" ><span  style="font-size:13px;">cerrar login  </span>X</div>
           </div> <!-- class=formula-->
             
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
