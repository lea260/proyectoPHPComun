(function($) {
  $(document).ready(function() {
      //alert('hola');
      //console.log("funciona");
      const items = $(".btnEliminar");
      items.each(item => {
        console.log(item);
        $("body").on("click","#art"+ item ,function(){
          let alumnoId = this.dataset.alumno;
          console.log(alumnoId);
        });//end item click
      });//end item click items foreach  
  });  
})(jQuery);