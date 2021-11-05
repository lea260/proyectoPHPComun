(function ($) {
  $(document).ready(function () {
    //console.log(param);
    let carritoStr = localStorage.getItem("carrito");
    let carrito;
    if (carritoStr) {
      carrito = JSON.parse(carritoStr);
    }
    //alert("litarJQ");
    var $listaArticulos = [];
    let url = $("#url").val();
    let urlReq = url + "api260260articulos/listar";
    //console.log("url: "+urlReq);
    //console.log(param);
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
        $listaArticulos = data.datos;
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus);
      });

    //asiganr la funcionalidad del carrito
    //const items = $(".btnAgregar");
    $(".btnAgregar").each(function (index) {
      $(this).on("click", function () {
        //console.log("hola");
        //let articuloId = this.dataset.articuloId;
        let articuloId = $(this).data("articuloId");
        let articuloDescripcion = $(this).data("articuloDescripcion");
        let articuloCodigo = $(this).data("articuloCodigo");

        let articulo = $listaArticulos.find((art) => art.id == articuloId);
        carrito = JSON.parse(localStorage.getItem("carrito"));
        if (carrito == null) {
          //inicilizo el carrito
          //agrego el elememto al carrito
          let cantidadAux = $("#art-" + articuloId).val();
          let cantidad = 1;
          if (cantidadAux >= 1) {
            cantidad = cantidadAux;
          }
          //console.log("cantidad:" + cantidad);
          carrito = [];
          console.log();
          item = {
            id: articulo.id,
            precio: articulo.precio,
            descripcion: articuloDescripcion,
            codigo: articuloCodigo,
            cantidad: cantidad,
            url: articulo.url,
          };
          carrito.push(item);
          localStorage.setItem("carrito", JSON.stringify(carrito));
          $("#cantidadElemCarrito").text(carrito.length);
        } else {
          //ya tienen por lo menos un item
          let cantidadAux = $("#art-" + articuloId).val();
          let cantidad = 1;
          if (cantidadAux >= 1) {
            cantidad = cantidadAux;
          }
          //console.log("cantidad:" + cantidad);
          //console.log();
          item = {
            id: articulo.id,
            precio: articulo.precio,
            descripcion: articuloDescripcion,
            codigo: articuloCodigo,
            cantidad: cantidad,
            url: articulo.url,
          };
          let itemCarrito = carrito.find(
            (articulo) => articulo.id == articuloId
          );
          //console.log("itemCarrito: "+itemCarrito);
          if (itemCarrito == undefined) {
            carrito.push(item);
            localStorage.setItem("carrito", JSON.stringify(carrito));
            $("#cantidadElemCarrito").text(carrito.length);
          }
        }
        //console.log("carrito: "+$carrito);
        //localStorage.setItem("carrito", )
        //$("#filaart-"+alumnoId).remove();
      }); //end item click
    }); //end item click items foreach
  }); //end ready
})(jQuery);
