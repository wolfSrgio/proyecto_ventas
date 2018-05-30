
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link  rel="stylesheet" href="css/registro/estiloformu.css">
       
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
              
        <form action="" class="form_contac" id="formula"    enctype="multipart/form-data" >  

                 <p >Introduce d tus  datos</p>
                 <div class="user_info">
                     <label for="nom">Nombre </label>
                     <input type="text" id="nombre" value="" name="nomb" class="texto" autocomplete="off" required >
                     
                     <label for="ema">Email: </label>
                     <input type="email" class="texto"  id="ema" name="emai" required autocomplete="off"> 
                 
                     
                     <label for="pass">Contrase&ntildea : </label>
                     <input type="password" class="texto" id="pass" name="psw" required>
                     
                     <label for="pass">Confirma Contrase&ntildea : </label>
                     <input type="password" class="texto" id="passconfirma"  required >
                     <!--  ah confirma contra no le pongo name, porque no lo necesito pa insertar a BD-->
                 
                    <?php

                    /*   SOLO PARA ADMINISTRADORES , lo que va dentro del if */
                    if(isset($_GET['registra'])){
                    ?>
                   
  
                    <div><label >Cargo : </label> 
                     <input type="radio" id="mas" name="cargo" value="total" checked >Total
                   <input type="radio" id="fem" name="cargo" value="simple" >Simple
                     </div><br>
                     <input type="hidden" id="oculto" value="soy_admin">

                     <?php
                      }else{

                    ?>
                      <label for="tef">Telefono : </label><!--le agregamos una expresion regular
                      que solo deje numeros de 0 a 9  y que deben ser 9 digitos. -->
                     <input type="tel" class="texto" id="tef" name="telef"  required>
                     <!--<input type="tel" class="texto" id="tef" pattern="[0-9]{9}" required>-->
                     
                     <div><label >Sexo : </label> 
                     <input type="radio" id="mas" name="sexo" value="hombre" checked >Hombre
                   <input type="radio" id="fem" name="sexo" value="mujer" >Mujer
                     </div><br>
                     <?php
                      }//cerrando el else
                    ?>
                     <label>Imagen</label><br>
                    <input type="file" id="imag"  name="imagenex"  required  /><br>
                    <!-- los required son importantes por mis restricciones en submit , 
                    hay condiciones que no esten vacios, con esto me aseguro que no lo estean-->
                     <div>
                         <input type="submit" value="registrarse" name="envi" class="enviobot" id="btn" >
                         <!-- le pongo submit y no button , para que mantenga las restricciones html5 -->
                         <input type="button" value="registrarte"  name="envi"  hidden class="enviobot" id="boton" >

                    <!-- este  boton aparecera si el usuario esta registrado correctamente -->
                        <input type="button" value="logeate" hidden class="enviobot" id="boton_log" >

                         <div>
                       
                         <div id="mensaje" style="background:blue;color:white;"></div>
                       
                 </div><BR><BR><!-- fin user_info -->
              </form> 

          </section><!--fin form-wrap-->
        


  
		<footer>
                <p>Este es el pie de pagina</p>
            </footer>
        
        


    </body>
     
</html>
