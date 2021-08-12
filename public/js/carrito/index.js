(function($) {
  $(document).ready(function() {
      alert('carrito');
      let carrito = JSON.parse(localStorage.getItem("carrito"));
      $("#carrito").text(carrito.length);
  });  
})(jQuery);