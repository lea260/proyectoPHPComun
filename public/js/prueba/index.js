(function($, param) {
  $(document).ready(function() {
      //alert('prueba css');
      //console.log($("#hola").html());
      //$("#hola").html("texto cambiado");
      /*$(".btnHola").on("click", function(){
        $("#parrafo5").after('<button type="button" class="btnHola">Click Me!</button>');
      });*/
      $(".btnHola").on("click", function(){
        $("#parrafo5").after('<button type="button" class="btnHola">Click Me!</button>');
      });
      $("#btnLogin").on("click", function(e){
        e.preventDefault();
      });
      

      
           //console.log("funciona ver articulo"); 

  });//end ready
})(jQuery, "hola mundo");