

function valida_html5(){
   
    var nomb=$('#nombre').val();
    var  email=$('#ema').val();
    var  telefono=$('#tef').val();
    var  imge=$('#imag').val();
   
    var  es_admin=$('#oculto').val();
   //console.log("..."+es_admin);

   if(es_admin){
   // console.log("..."+es_admin);

    if(nomb!=""&&email!=""&&imge!=""){
   
        $('#btn').hide();//  oculto el boton submit para que no recargue la pagina
         $('#boton').show();// hago visible el boton para poder trabajar
         registrar();

           return false;// no dejo que se envie el formulario
       }


   }else{

  // console.log("...no soy admin");
       if(nomb!=""&&email!=""&&telefono!=""&&imge!=""){
   
        $('#btn').hide();//  oculto el boton submit para que no recargue la pagina
         $('#boton').show();// hago visible el boton para poder trabajar
         registrar();

           return false;// no dejo que se envie el formulario
       }
  
   }// fin del else

   
}// fin de la funcion


function registrar(){

  console.log("estas en registrarjjjj");

  /*  var nomb=$('#nombre').val();
    var  email=$('#ema').val();*/
     var psw=$('#pass').val();
    var  pswconf=$('#passconfirma').val();
 /*   var  sexo=$('input:radio[name=sexo]:checked').val();
    var  telefono=$('#tef').val();
    var  imge=$('#imag').val();*/
    var  es_admin=$('#oculto').val();//me sirve para cambiar el valor del boton, una ves nos hayamos registrado
   

  

    $("#errospan").remove();//si ya existe lo eliminamos cada vez que se presione enviar
    if(psw=="" || psw!=pswconf ){// creare un aviso DESPUES
     
       $("#passconfirma").after("<span id='errospan' style='color:red;font-size:15px;'>Las contraseñas no coinciden</span>");
    
    }else{


   var datos=new FormData( $('#formula')[0]);

    /*SI SE  FALLA EN LOS DATOS ANTES  del succes ,  ni se mostrara el error
    directamente se recarga la pagina  , los errores del succes son los que provie
    nen  desde el servidor*/

      $.ajax({
 
        type:'POST',
        url:'php/inserta_user.php',
        data:datos,
        // COMO ENVIAMOS UN ARCHIVO HAY QUE PONER ESTO
        contentType: false , // significa no permitimos enviar informacion por encabezada
        processData: false , //no conertimos los datos en cadeba de texto
         // su valor por defecto es verdadero  de ambos
    //---------------------------------------------
        success:function(respues){
            if(respues==1){
             
              $('#mensaje').html("REGISTRADO CORRECTAMENTE");
              $('#formula')[0].reset();/*LIMPIO LOS VALUES */
              $('#boton').hide();//ocultamos boton normal
              $('#btn').hide();//seguimos ocultando el submit
              $("#boton_log").show();//MOSTRAMOS EL BOTON QUE NOS LLEVARA A LOGEARNOS
         
               if(es_admin){//si es admin nos mostrara otro valor en boton
                $("#boton_log").attr("value","regresar a admin");
               }
            
           

              /*
               si yo envio algo desde el servidor en respues ,  ejemplo :  echo $valor= ????  , y aqui pongo
                 $('#mensaje').html(respues);  // para que se muestre en nuestro documento lo que haya en valor
                */
          }else if(respues==0){
            
        
                $('#mensaje').html("NO PUDISTE REGISTRARTE ,ERROR DEL SERVIDOR "); 
                $('#mensaje').css('background','red');

               //  si pongo solo :   $('#formula').reset(); me hace una recarga de pagina y no se veria el $(mensaje);
             // el [0 ] es desde la posicion  de elemnto  del formulario donde empieza
               $('#formula')[0].reset();/*LIMPIO LOS VALUES */
    
                /*ACTIVO OTRA VES EL SUBMIT , por si surgio un error y quiero volver a rell
                enar el formulario */
                $("#boton_log").hide();// oculto el boton de logeo , por si estuviera
                $('#boton').hide();//  oculto el boton normal 
                $('#btn').show();// hago visible el  submit para poder trabajar
               

            }else if(respues==3){
                $('#mensaje').html("EL EMAIL YA ESTA REGISTRADO "); 
              //  $('#mensaje').html(respues);
                $('#mensaje').css('background','red');
                $('#boton').hide();//  oculto el boton  para que no recargue la pagina
                $("#boton_log").hide();
                $('#btn').show();// hago visible el submit para poder trabajar
               
            }else{
                $('#mensaje').html(" NO ESTA MANDANDO BIEN EL RESULTADO "); 
            }
        }//funtion respues

        
   })// fin de ajax;

 
}// fin del else

}//  fin de la funcion registrar;


function logearse(){
   window.location.href="index_ito.php";
   /*ojo si  fue una dministrador el que registro, el tendra una variable de sesion
   con lo cual ,al ir a index_ito lo rediccionara asu pagina de administrador*/
}




$(document).ready(function() {
  


  $('#btn').on('click',valida_html5);//submit
  $('#boton').click(registrar);//button normal
  $('#boton_log').click(logearse);//button_login



      $('.texto').focusin(function(){
        $(this).removeClass("fuera");
           $(this).addClass("dentro"); /*pondra color de fondo ala caja */
       });

       $('.texto').focusout(function(){
        $(this).removeClass("dentro"); /*pondra color de fondo ala caja */
       // $(this).css("background","black"); esto va prevalecer como css y si pinchamos otra ves
                                // nunca lo volveria rojo.mejor lo hago con css
       $(this).addClass("fuera");                      
    });
    

  



 });//fin de ready()
