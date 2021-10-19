(function($) {
  $(document).ready(function() {
      //alert('hola');
      //console.log("funciona ver articulo"); 
      let carrito = JSON.parse(localStorage.getItem("carrito"))
      //console.log("probando");
      if (carrito){
        $("#cantidadElemCarrito").text(carrito.length);
      }
      let idioma = Cookies.get('idioma');   
      let idiomaAux= "en";      
      if (idioma){
        idiomaAux = idioma;
      }else {
        idiomaAux = idioma;
      }
      document.documentElement.setAttribute("lang", idiomaAux);    
      
  });//end ready
})(jQuery);