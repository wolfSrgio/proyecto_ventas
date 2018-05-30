

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

