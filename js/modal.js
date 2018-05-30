function abrirmod(){
    
    /*slideDown () funciona en elementos ocultos con métodos y 
     display:none en CSS (pero no visibility:hidden).*/
    
    $("#ven_mod").slideDown("slow");
   
}

function cerrarmod(){
  /*  location.reload();*/
    /* Oculta los elementos combinados con un movimiento deslizante. */
    $("#ven_mod").slideUp("slow");
 
}

