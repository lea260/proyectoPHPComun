(function($, param) {
  $(document).ready(function() {
      alert('hola');
      let form = $("#form01");
      //console.log(form);
      $("#btnEnviar").click(function(e) { 
        e.preventDefault();
        console.log("enviar formulario");
        if (true) {
          form.submit();
        }
          

      });
      
      //console.log("funciona ver articulo"); 
      




  });//end ready
})(jQuery, "hola mundo");