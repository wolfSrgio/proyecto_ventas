<?php
 include ("lib/conexion.php");
 include ("lib/sesion.php");
 include "lib/funciones.php";


 session_start();

 $emailogin=$_POST['emalog'];
 $pswlogin=$_POST['pswlog'];


//echo  "El email es :   ".$emailogin;


//if($emailogin!=null && $pswlogin!=null){// comprobar que  no esten vacios
if(!empty($emailogin) && !empty($pswlogin)){// otra manera 
    //echo " BIEN   TIENE CONTENIDO LOS DOS";
    $pswloginmd5=md5($pswlogin);
    echo " original:".$pswloginmd5."<br>";
    /*OJO: las cadenas que genera md5 , son kjuy largas y hay que acortarlas
    son de 32 caracteres  , tambien podemos solucionarlo modificando el campo en la BD*/
    $pswloginmd5 = substr($pswloginmd5, 0, -12);
 echo " des`pues :".$pswlogin."<br>";
    $userlog=new Usuario();// creamos un usuario
   $respu= $userlog->validaLogin($emailogin,$pswloginmd5,$pswlogin);//validamos el correo y contraseña con md5
                                                         // y otra sin md5 si existe o no
   
   echo "****".$respu."****";
   if($respu!==0 ){// si existe ese correo
    //puse !== para compara el tipo de objeto con!= no salia

    $autolog=new Sesion();// aqui crearemos la sesion, para que se quede grabado en el navegador 
    $autolog->creaVariableSesion($emailogin);// llamamos ala funcion 

    echo ' <script>
    alert(" TE LOGEASTE MUY BIEN");
    //window.location.href="../principal.php?";
    </script>';
   }
   else{
    echo "llega aqui 2";
    header("location:login.php?errorLogin=si");
   }


}else{

    echo "OJO  NO PUEDE IR NINGUN CAMPO VACIO";
}

 /* 
  /* 
    }*/

  /*  VALORES DE USUARIOS CLAVES 
  
    alex --> 123;
    pepe ---->pepe
    hans ---->hansito
  
  */


?>