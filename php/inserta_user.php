<?php

session_start();

include ("conexion.php");
$conexion=conexion();

    if(isset($_SESSION['nom_admi'])){ /* identificador cargo, que refiere ala variable de sesion del administrador */

      $no=$_POST['nomb'];
      $em=$_POST['emai'];
      $ps=$_POST['psw'];
      $car=$_POST['cargo'];

      $existe=false;


    /*COMPRUEBO QUE EL USUARIO NO ESTE REGISTRADO EN MI BASE DE DATOS */
    $sqlx="SELECT  *  FROM administrador WHERE email='$em'";
    $consultax=mysqli_query($conexion,$sqlx) or die(mysqli_error()); ;
  
    while($filax=mysqli_fetch_array($consultax)){
  
      $existe=true;
       
    }// fin del while

    if($existe==false){

      $im=imagen($no);

      $squil="INSERT INTO administrador(nombre,email,pasword,cargo,imagen)
      VALUES('$no','$em','$ps','$car','$im')";

      $result=mysqli_query($conexion,$squil)or die("error result");

        if($result){

            echo 1;
         }else{
           echo 0;
          }



      } // fin del if

      else{
      
        echo 3; //devolvera 3 que significara que se repite el usuario

      }
    
// fin del if , por si es administrador
 }else{

        /*   USUARIOOOOOO */
  
    $no=$_POST['nomb'];
    $em=$_POST['emai'];
    $ps=$_POST['psw'];
    $se=$_POST['sexo'];
    $te=$_POST['telef'];
  
    $existe=false;
   


    /*COMPRUEBO QUE EL USUARIO NO ESTE REGISTRADO EN MI BASE DE DATOS */
    $sql2="SELECT  *  FROM cliente  WHERE email_cli='$em'";
    $consultaw=mysqli_query($conexion,$sql2) or die(mysqli_error()); ;
  
    while($fila2=mysqli_fetch_array($consultaw)){
  
      $existe=true;

    }//fin del while

      if($existe==false){

        $im=imagen($no);
        $sequel="INSERT INTO cliente(nombre_cli,email_cli,pasword_cli,sexo,telefono,imagen)
        VALUES('$no','$em','$ps','$se','$te','$im')";

        $result=mysqli_query($conexion,$sequel)or die("error result");


        if($result){
          echo 1;
         }else{
       echo 0;
        }


        } // fin del if

        else{
        
          echo 3; //devolvera 3 que significara que se repite el usuario

        }
       
    }// fin del else, usuario


  // COMPROBAREMos si los result se ejecutaron correctamente tanto en el administra , como en ele usuario


          


  

function imagen($no){ //  falta controlar , que el nombre d eimagen que se guarda se puede repetir.

    /*LLEVAMOS LA IMAGEN AL SERVIDOR ,lo pongo en funcion porque sera compartida
     tanto para servidor , como para usuario*/

    $ruta_serv='C:\xampp\htdocs\venta_entradas\img_paginas';
    $ruta_temp=$_FILES['imagenex']['tmp_name'];//ponerse  una ruta temporal
   // $nom_img=$_FILES['imagen']['name'];
     $nom_img=$no.".jpg"; // para que se guarde con el nombre del usuario
    $ruta_destino=$ruta_serv."\usuarios\\".$nom_img;  // y luego a una ruta original que se guarda en la base de datos
     // Ahora quue se mueva desde donde esta el usuario en su pc hasta aqui : 
    move_uploaded_file($ruta_temp,$ruta_destino)or die("no se subio la imagen");
    $im="img_paginas/usuarios/".$no.".jpg";

     return $im;

   }//fin de la funcion imagen





?>


