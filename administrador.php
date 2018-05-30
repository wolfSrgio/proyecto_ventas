<?php

session_start();

//var_dump($_SESSION);  COMPRUEBO QUE  SE INICIARON BIEN LA SVARIABLES DE SESSION

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative;
      background-color: black;
  }
  
  .libor{ /* ponerle  borde  al menu*/
      border:1px solid white;
  }


 #tabla_consul{  /**/

     /* border:3px solid blue;*/
     
 }


  ul.nav-pills {
      top: 300px;/*separacion del menu*/
      position: fixed;
      left:100px;
      background-color: black;
  }
 
   div.col-8>div{ /* >  : para que solo afecte a los hijos directos, no alos nietos etc.*/
      height: 550px;/*para los div contenedores*/
      border:1px solid red;
  }
  .fondo{ /*  poner imagen de fondo en jumbotron  */
            
            background-image: url("img_paginas/logowolf.png");
             background-repeat:no-repeat;
             background-position: 50% 50%;
             background-size: 100% 100%;
       }

       h3{

         // position:absolute;
         background:#393939;
         color:white;
      /*   top:120px;
         left:40px;*/
       
       }

       table{
       
      width: 80%;
       border: 1px solid #000;
       margin: auto;
       }
    
       th, td {
          width: 25%;
          text-align: center;
          vertical-align: top;
          border: 1px solid #000;
         }
    



        
        /* PARA CENTRAR EL MENU  CUANDO SEA MOVIL*/
         @media (max-width:650px) {/*para movil*/
           ul.ulpos{
               border:1px solid red;
               top: 140px;
               left:0px;
               width:33%;
            }  
         }
    
  </style>

<script>
/* AQUI EMPLEARE EL DOM  PARA REGISTRO , NO JQUERY */

function regis_usuario(){

location.href ="registro.php";

}

function regis_admin(){

location.href ="registro.php?registra=admin";

}


function consultar(op){

//alert("vamos a consultar a "+op);

var aquien=op;

alert(aquien);


 $.ajax({
		type:"POST",
		url:"php/actualizaDatos_s.php",
		data:cadena,
		success:function(r){
			
			if(r==1){*/
				$('#tabla_consul').load('lib_fun/tabla_consultas.php');
			/*	alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});*/



}





window.onload=function(){


var bot_reg_user=document.getElementById("bot_reg_user");
bot_reg_user.addEventListener('click',regis_usuario);

var bot_reg_admi=document.getElementById("bot_reg_admi");
bot_reg_admi.addEventListener('click',regis_admin);


var select = document.getElementById('consultas');
select.addEventListener('change', function(){
    var opcion = this.options[select.selectedIndex];
    opcion=opcion.value;
    consultar(opcion);
  });

//$('#tabla_consul').load('lib_fun/tabla.php');
}



</script>


</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
       <div class="jumbotron fondo">
       </div>
       <?php
          if(isset($_SESSION['nom_admi'])){
          $admi=$_SESSION['nom_admi'];
         
         echo '    <h3 >  BIENVENIDO '.$admi.' </h3> ' ;
        
        }



       ?>
    
<div class="container-fluid">
  <div class="row">
      <!--  color al nav  con bg-dark -->
    <nav class="col-sm-3 col-4  bg-dark" id="myScrollspy">
      <ul class="nav nav-pills flex-column ulpos">
      <?php
       // COMPROBAREMOS QUE TIPO DE ADMIN ES , ASI DARLE O NO PRIVILEGIOS
      if($_SESSION['cargo']=="total"){
        ?>

         <li class="nav-item libor">
          <a class="nav-link active" href="#section1">Artista</a>
        </li>
        <li class="nav-item libor">
          <a class="nav-link" href="#section2">Concierto</a>
        </li>

        <?php
         }// fin del if  que agrupo lo que solo tendra el de tipo total
        ?>
        <li class="nav-item libor">
          <a class="nav-link" href="#section3">Entradas</a>
        </li>
         <li class="nav-item libor">
          <a class="nav-link" href="#section4">Consultas</a>
        </li>
        <li class="nav-item dropdown libor">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Varios</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">Principal</a>
            <a class="dropdown-item" href="#section42">Base Datos</a>
             <a class="dropdown-item" href="index_ito.php?desconectarme=si">Desconectarte</a>
           
          </div>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">

 <?php
       // COMPROBAREMOS QUE TIPO DE ADMIN ES , ASI DARLE O NO PRIVILEGIOS
      if($_SESSION['cargo']=="total"){
         
        ?>
      <div id="section1" class="bg-success ">    
        <h1>Ingresar Datos del artista</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2" class="bg-warning "> 
        <h1>Ingresar Datos del Concierto</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>   
      <?php
      }// fin del if  que agrupo lo que solo tendra el de tipo total
      ?>
      <div id="section3" class="bg-secondary">         
        <h1>Venta de entradas en Taquilla</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
        <div id="section4" class="bg-danger" style="height:800px;">         
        <h1>Consultas  y Registros</h1>
      
        <label for="selecc_simple" ><h3>Elige una consulta de  :</h3></label>
	       	<select name='selecc_simple' id="consultas">
           <option value='cliente' select='selected' ></option>
          <option value='cliente' >Usuario </option>
          <option value='concierto' >Concierto_fechas</option>
          <option value='artista' >Artista</option>

         

        <input type="button" value="registra usuario" class="enviobot" id="bot_reg_user" >
        <input type="button" value="registra administrador" class="enviobot" id="bot_reg_admi" ><br><br>

        <div  id="tabla_consul"></div>
	      

      </div>   <!--fin del di section 4 -->   
      
    </div><!--fin del div  class="col-sm-9 col-8 -->
  </div><!-- fin del div class row -->
</div><!--  fin del dic conteiner fluid -->

</body>
</html>
