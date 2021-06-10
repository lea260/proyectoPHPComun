(function($, param) {
  $(document).ready(function() {
      //alert('hola');
      //console.log("funciona");
      const items = $(".btnEliminar");      
      items.each(item => {
        //console.log(item);
        $("body").on("click","#art"+ item ,function(){
          let alumnoId = this.dataset.alumno;        
          let url = $("#url").val();
          const confirm = window.confirm("Deseas eliminar el elemento?");
          if (confirm){
            console.log("entro if");
            //solitud ajax, 
            $("#filaart-"+alumnoId).remove();
          } else {
            console.log("entro eslse");
          }

        });//end item click
      });//end item click items foreach  
  });  
})(jQuery,"hola mundo");