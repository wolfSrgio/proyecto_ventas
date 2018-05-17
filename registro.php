<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link  rel="stylesheet" href="css/registro/estiloformu.css">
         <link  rel="stylesheet" href="css/registro/fontawesome.css">
        <script src="js/jquery-3.3.1.js"></script>
         <script src="js/registro_formuscript.js"></script>
      
       
    </head>
    <body>
        
		<div class="superior"></div>
        <section class="form_wrap">
           <section class="contact_infor">
               <div class="img"></div> 
               <section class="info_title">
                   <span > icono</span><!--sacara  el icono de gente --> 
                   <h1>REGISTRATE <br> AQUI </h1>
               </section> <!-- fin info_title-->
               <section class="info_items">
                   <p><span class="fa fa-envelope">wolfevents@gmail.com</span></p><!-- icono correo-->
                   <p><span class="fa fa-envelope">657579600</span></p><!--icono tfno-->
               </section><!-- fin info_items -->
              
             </section><!-- fin contact_inform-->
              
             <form action="" class="form_contac">
                 <p >Introduce  tus  datos</p>
                 <div class="user_info">
                     <label for="nom">Nombre : </label>
                     <input type="text" class="texto" id="nom">
                     
                     <label for="ema">Email: </label>
                     <input type="email" class="texto" id="ema">
                     
                     <label for="pass">Contrase&ntildea : </label>
                     <input type="password" class="texto" id="pass">
                     
                      <label for="tef">Telefono : </label>
                     <input type="text"  class="texto" id="tef">
                     
                     <div><label >Sexo : </label> 
                     <input type="radio" id="mas" name="sexo" value="hombre" >Hombre
                   <input type="radio" id="fem" name="sexo" value="mujer" >Mujer
                 
                     </div>
                     <label for="imag">Imagen : </label>
                     <input type="text" id="imag">
                     <div>
                         <input type="button" value="enviar" id="btnenvia" onclick="envia();">
                     <div>
                 </div><!-- fin user_info -->
              </form> 
        
          </section><!--fin form-wrap-->
        
		<footer>
                <p>Este es el pie de pagina</p>
            </footer>
        
    </body>
     
</html>
