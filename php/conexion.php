

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="venta_entradas";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

     
//  ESTO NOS SIRVE  PARA SABER SI NOS CONECTAMOS BIEN O NO
   /*		if(conexion()){
			echo " se conecto correctamente";
		}  */

 ?>