<!DOCTYPE html>
<html lang="en">
<head>
    <title>inicio carrito</title>
  <link href="img/iconolobo.png" rel="icon" type="image/x-icon"/>
    
    <script>
        /* CUANDO PONGO UN ARCHIVO index.php o index.html EN UNA CARPETA 
        ARRANCA DIRECTO desde ese archivo,NO muestra menu
        */
    </script>

    <?php

    echo "HOLA PROBANDO PHP";
  
    ?>
</head>
<body>
    <p>Recordatorio en tildes el UTF-8 no siempre funciona sobre todo en linux mac, etc<br> por eso mejor usar los actute  & , etc</p>
    <a href="php/login.php">Login</a><br>
    <a href="php/registro.php">Registrar</a><br><br>
   
    
    <?php
    
       $server='localhost';
       $user='id5658721_wolf';
       $passw='wolfprobando';
       $db='id5658721_probando';

       $conex= mysqli_connect($server,$user,$passw) or die(" no se conecto LO SIENTO 2");
       mysqli_select_db($conex,$db) or die (" no se selecciono la base de datos");
      
       echo "TE CONECTASTE ALA BASE DE DATOS";
 
       
      echo "<a href='../index.php'> regresa al inicio </a>";
    
    ?>
    
    
    
</body>
</html>

