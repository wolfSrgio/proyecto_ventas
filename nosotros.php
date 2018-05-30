<!DOCTYPE html>
<html>
    <head>
        <title>Nosotros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/nosotros/fontello.css">
      
         <link rel="stylesheet" href="css/nosotros/inicio.css">
        <link rel="stylesheet" href="css/nosotros/menu2.css">
         <link href="img_paginas/iconolobo.png" rel="icon" type="image/x-icon"/><!-- icono de ventana--> 
   
           <script src="js/jquery-3.3.1.js"></script>
    
    
    </head>
    <body>
        
         <header>
            <div class="contenedor">
            
            <input type="checkbox" id="inpumenubar">
              <label for="inpumenubar" class="icon-menu"></label>
                <nav class="menu">
                    <a href="">logeate</a>
                    <a href="">registrate</a>
                    <a href="">inicio</a>
                    <a href="">xxxxxx</a>
                </nav>
            </div> 
        </header>
        
          <div class="contenedor banner_nos">
           </div>
        
        <main>
            <section  class="contenedor contenido">
                
                <div class="contenido1">
                    <h1> ENVIANOS UN CORREO CON TUS INQUIETUDES</h1>
                    
                    
                    <form  name="contacto" id="contacto" method="post">
                    <fieldset>
                    <legend>Datos personales</legend>
                    
                    <label for="nombre">Nombre</label>
                    <input name="nombre" id="nombre" size="30"/><br>
                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" id="apellidos" size="30"/><br>
                    <label for="email">Email</label>
                    <input name="email" id="email" size="45"/><br>
                   
                    
                    <label for="comentario">Comentario</label>
                    <textarea name="comentario" id="comentario" cols="40" rows="10"></textarea> <br>
                  
                    <label>¿Te gusta la pagina ? 
                    <input type="radio" name="boletin" value="si" />Si 
                    <input type="radio" name="boletin" value="no" />No
                    </label><br><br>
                    <button class="submit" disabled>Enviar</button>
                    </fieldset>
                    </form>
                 </div>
         
           
                 <div class="contenido2">
                   
                 <h2> ESTAMOS  UBICADOS  EN</h2>
                 <p>
                     <b>direccion : </b> Av. de la Onu, 81, 28936 Mostoles, Madrid <br>
                     <b>telefono : </b> 915648993 <br>
                       <b>Correo: </b> contacto@wolfevents.com 
                 </p>
                 <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.3394184144136!2d-3.854168685532984!3d40.31262406989009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418c3a1f62d9e5%3A0xaefd32a6415e67c1!2sIES+El+Ca%C3%B1averal!5e0!3m2!1ses!2ses!4v1526816838760"
                         width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            
              </section> <!-- contenedor -->
              
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

