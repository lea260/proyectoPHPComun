(function($) {
  $(document).ready(function() {
      //alert('hola');
      console.log("funciona");
      const items = document.querySelectorAll(".btnEliminar");
      items.forEach(item => {
        item.addEventListener("click", function(){
          let alumnoId = this.dataset.alumno;
          console.log(alumnoId);
        });//end item click
      });//end item click items foreach  
  });  
})(jQuery);