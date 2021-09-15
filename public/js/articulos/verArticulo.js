(function($, param) {
  $(document).ready(function() {
      //alert('hola');
      //console.log("funciona ver articulo"); 
      $("#enviarForm").click(function() {
        //alert('hola');
        //console.log("enviarFormulario");
        var id = $("#articuloId").val();
        var codigo = $("#articuloCodigo").val();
        var descripcion = $("#articuloDescripcion").val();
        var precio = $("#articuloPrecio").val();
        var fecha = $("#articuloFecha").val();
        var objeto = {
        "id": id,
        "codigo": codigo,
        "descripcion" : descripcion,
        "precio": precio,
        "fecha" : fecha}
        //console.log(objeto);
        const confirm = window.confirm("Deseas actualizar el elemento?");
        if (confirm){
          //console.log("entro if");
          //solitud ajax, 
          //$("#filaart-"+alumnoId).remove();
          let url= $("#url").val();
          let urlReq =url+"api260260articulos/actualizar";
          //console.log("url: "+urlReq);
          let headers = {"Content-Type":"application/json;charset=utf-8"};
          let data = JSON.stringify(objeto);
          $.ajax({
            url: urlReq,
            headers: headers,            
            type: 'PUT',
            data: data
        })
        .done(function (data) { 
          console.log(data);})
        .fail(function (jqXHR, textStatus, errorThrown) { serrorFunction(); });

        } else {
          console.log("entro else");
        }
    });//end enviar Form ajax

    $("#btnEnviarForm").click(function(e) {
      e.preventDefault();
      console.log("funciona");
      if (true){
        $("#form01").submit();
      }          
    });//end enviar Form post

    //previsualizacion de la imagen
    $("input[type=file]").change(function(e){
      let input = e.target;
      let reader = new FileReader();
      reader.onload = function(){
        var dataURL = reader.result;
        console.log(dataURL);
        //var output = document.getElementById('output');
        //output.src = dataURL;
        //$("#imgP").html("<img src='" +dataURL+ "' />");
        $("#imgP").html(`<img src="${dataURL}" width="50%"/>`);
      };
      reader.readAsDataURL(input.files[0]);
    });






  });//end ready
})(jQuery, "hola mundo");