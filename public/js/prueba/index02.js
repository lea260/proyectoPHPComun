(function($, param) {
  $(document).ready(function() {
      //alert('prueba css');
      //console.log($("#hola").html());
      //$("#hola").html("texto cambiado");
      $("#btn").on("click", function(){
        $("#hola").html('<h1 id="5">texto cambiado</h1>');
      });
           //console.log("funciona ver articulo"); 

  });//end ready
})(jQuery, "hola mundo");