<!DOCTYPE html>
<html>
    <head>
        <title>Artista po</title>
        <meta charset="UTF-8">
         
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link href="img_paginas/iconolobo.png" rel="icon" type="image/x-icon"/><!-- icono de ventana--> 
           <link rel="stylesheet" href="css/bootstrap.min.css">
           <link rel="stylesheet" href="css/artista/estiloartista.css">
           
               <script src="js/jquery-3.3.1.js"></script>
            <script src="js/bootstrap.min.js"></script>
            
            <script src="js/modal.js"></script>
           
            <script>
                
                    
         window.onload=function(){
                 
                var ventanamod=document.getElementById("log");
                
               ventanamod.onclick=abrirmod;
                 
                       };
       
           </script>
        
          
    </head>
    <body>
        <section class="almacenador"> 
            <div class="fijo"> <!-- que sea fijo con css-->
                
              <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
            <a class="navbar-brand" href="#">
                <img src="img_paginas/logowolf.png"  width="190px" height="45px" class="d-inline-block align-top" alt="imeg">
          </a><!--siempre al lado derecho-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" 
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                   aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
        
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav ml-auto">  
          <a id="log" class="nav-item nav-link active" href="#">logeate <span class="sr-only">(current)</span></a>
         <a class="nav-item nav-link" href="#">registrate</a>
         <a class="nav-item nav-link  mr-md-4" href="#">Contacto</a>
           <!--  mr-4 (margin right de 4px )  ml-auto(margin left total)-->
       
        <form class="form-inline  my-2 my-lg-0">
          <input class="form-inline   mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
          <button class=" btn  btn-outline-info my-2 my-sm-0 ml-auto " type="submit">Buscador</button>
        </form>
        </div>
     </div>
    </nav>
         </div>   <!-- final del div class fijo del menu -->    
         
         <div id="ven_mod"><!-- ventana modal -->
             
             <h1 style="background:black;">INTRODUCE  TUS DATOS Y LOGEATE </h1>
            
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
            
            <section class="main" style="margin-top:90px;" >
                <img src="img_paginas/artista/cloud.jpg" height="500px;" alt="foto de artista">
            </section>
            <aside class="artista"><!--por si el contenido se sobrepasa-->
                <h1>Artista</h1>
                <p>
                   Estos artista estan consagrados  y  tendran una gira espectacular
                    Estos artista estan consagrados  y  tendran una gira espectacular
                   
                    
                </p>
                
            </aside>
              <aside class="venta"><!--siempre mantengo la ventana a esta alturaa-->
                <p>
                   Apartado para  hacer la compra de entradas
                     Apartado para  hacer la compra de entradas
                       Apartado para  hacer la compra de entradas
                         Apartado para  hacer la compra de entradas 
                         Apartado para  hacer la compra de entradas
                         Apartado para  hacer la compra de entradas
                           Apartado para  hacer la compra de entradas
                         
                         
                </p>
                
            </aside>
            <footer>
                <p>Este es el pie de pagina</p>
                
            </footer>
        
        </section><!--fin del section alamacenadores-->
        
    </body>
</html>
