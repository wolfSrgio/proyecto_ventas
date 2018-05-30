<?php
 include ("conexion.php");
 


 $emailogin=$_POST['ema_log'];
 $pswlogin=$_POST['pasw_log'];

$existe=false;

 $conexion=conexion();


 if(!empty($emailogin) && !empty($pswlogin)){  //  COMPROBAR QUE TENGAN CONTENIDO 

  echo $emailogin."<br>";
  echo $pswlogin."<br>";


  //  BUSCANDO  DENTRO DE LA TABLA ADMINISTRADOR

  $sql="SELECT  *  FROM administrador WHERE email='$emailogin' and  pasword='$pswlogin'";
   $consulta=mysqli_query($conexion,$sql) or die(mysqli_error()); ;


  while($fila=mysqli_fetch_array($consulta)){
     
    $existe=true;// para controlar la redireccion por si hay algun error 
    header("location:sesion.php?email=$emailogin&tipo=admin");
     
  }

  //BUSCANDO DENTRO DE LA TABLA CLIENTE 

  $sql2="SELECT  *  FROM cliente  WHERE email_cli='$emailogin' and  pasword_cli='$pswlogin'";
  $consulta2=mysqli_query($conexion,$sql2) or die(mysqli_error()); ;

  while($fila2=mysqli_fetch_array($consulta2)){

    $existe=true;
    header("location:sesion.php?email=$emailogin&tipo=user");// sera un tipo usuario
     
  }


  if(!$existe)//  si existe es = false
  header("location:../index_ito.php?errorLogin=logico");


 }//fin del if
 else{
  //echo "llega aqui 2";
  header("location:../index_ito.php?errorLogin=vacio");
 }

?>