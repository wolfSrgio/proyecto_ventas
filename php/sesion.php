<?php

 include ("conexion.php");
 session_start();


 if(isset($_GET["email"]) && isset($_GET["tipo"])){
     
      $correo=$_GET["email"];
      $tipo=$_GET["tipo"];

      $conexion=conexion();


   if($tipo=="admin"){ //  SERA UN ADMINISTRADOR

      $sql3="SELECT * FROM administrador WHERE  email='$correo'";
       $consulta3=mysqli_query($conexion,$sql3) or die(mysqli_error()); ;

      if($fila3=mysqli_fetch_array($consulta3)){// saco una linea de registro

        //  echo $fila3['nombre'];// tambien  $fila3[0]

      $_SESSION['nom_admi']=$fila3[1]; // para sesion administrador
      $_SESSION['email']=$fila3[2];
      $_SESSION['pasword']=$fila3[3];
      $_SESSION['cargo']=$fila3[4];//en registro usare este como identificador
      $_SESSION['imagen']=$fila3[5];
     }
 
     header("location:../administrador.php");

    }// fin del if admin
    else{//CUANDO ES UN USUARIO REGISTRADO
   
      $sql4="SELECT * FROM cliente WHERE  email_cli='$correo'";
      $consulta4=mysqli_query($conexion,$sql4) or die(mysqli_error()); ;

     if($fila4=mysqli_fetch_array($consulta4)){// saco una linea de registro

      

     $_SESSION['nom_cli']=$fila4[1];
     $_SESSION['email_cli']=$fila4[2];
     $_SESSION['pasword_cli']=$fila4[3];
     $_SESSION['sexo_cli']=$fila4[4];
     $_SESSION['tfno_cli']=$fila4[5];
     $_SESSION['img_cli']=$fila4[6];
    }

      header("location:../visitante.php");
    }

 }





function matasesion(){

      $_SESSION = array();/*ponemos a 0 los arrays */
      session_destroy();  
   
}




?>