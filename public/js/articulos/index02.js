(function ($, param) {
  $(document).ready(function () {
    //alert('hola');
    console.log("funciona");
    const items = document.querySelectorAll(".btnEliminar");
    items.forEach((item) => {
      item.addEventListener("click", function () {
        let alumnoId = this.dataset.alumno;
        console.log(alumnoId);
        console.log(param);
        //$("#filaart-"+alumnoId).remove();

        const confirm = window.confirm("Deseas eliminar el elemento?");
        if (confirm) {
          console.log("entro if");
          //solitud ajax,
          //$("#filaart-"+alumnoId).remove();
          let url = $("#url").val();
          let urlReq = url + "api260260articulos/borrar/" + alumnoId;
          console.log("url: " + urlReq);
          let headers = { "Content-Type": "application/json;charset=utf-8" };
          let data = {};
          $.ajax({
            url: urlReq,
            headers: headers,
            type: "POST",
            data: data,
            dataType: "json",
          })
            .done(function (data) {
              console.log(data);
              $("#filaart-" + alumnoId).remove();
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
              console.log(textStatus);
            });
        } else {
          console.log("entro eslse");
        }
      }); //end item click
    }); //end item click items foreach
  });
})(jQuery, "hola mundo");
