(function($, param) {
  $(document).ready(function() {
      //alert('hola');
      //console.log("funciona ver articulo");
      alert("litarJQ");
      let $listaArticulos=[];
      let url= $("#url").val();
      let urlReq =url+"api260260articulos/listar";
      //console.log("url: "+urlReq);
      //console.log(param);
      let headers = {"Content-Type":"application/json;charset=utf-8"}; 
      let data = {};
            $.ajax({
              url: urlReq,
              headers: headers,
              type: 'DELETE',
              data: data
          })
          .done(function (data) { 
            $listaArticulos=data.datos;
            //console.log($listaArticulos);
           })
          .fail(function (jqXHR, textStatus, errorThrown) { serrorFunction(); });

          //asiganr la funcionalidad del carrito
          //const items = $(".btnAgregar");
          $(".btnAgregar").each(function(index) {            
          $(this).on("click", function(){        
            //console.log("hola");
            //let articuloId = this.dataset.articuloId;
            let articuloId = $(this).data("articuloId");
            console.log(articuloId);
            let articulo= $listaArticulos.find(articulo => articulo.id ==articuloId);
            //console.log(JSON.stringify(articulo));            
            carrito = JSON.parse(localStorage.getItem("carrito"));
            //console.log("carrito: "+ carrito);
            if (carrito==null){
              //inicilizo el carrito
              //agrego el elememto al carrito
              let cantidadAux= $("#art-"+articuloId).val();
              let cantidad=1; 
              if (cantidadAux>=1){
                cantidad = cantidadAux;
              }
              //console.log("cantidad:" + cantidad);
              carrito=[];
              console.log();
              item={"id" : articulo.id,
                     "precio": articulo.precio,
                      "cantidad": cantidad}
              carrito.push(item);
              localStorage.setItem("carrito", JSON.stringify(carrito));
            } else{
              //ya tienen por lo menos un item
              let cantidadAux= $("#art-"+articuloId).val();
              let cantidad=1; 
              if (cantidadAux>=1){
                cantidad = cantidadAux;
              }
              //console.log("cantidad:" + cantidad);              
              //console.log();
              item={"id" : articulo.id,
                     "precio": articulo.precio,
                      "cantidad": cantidad}
              let itemCarrito= carrito.find(articulo => articulo.id ==articuloId);
              //console.log("itemCarrito: "+itemCarrito);
              if (itemCarrito==undefined){
                carrito.push(item);
                localStorage.setItem("carrito", JSON.stringify(carrito));              
              } 
              
            }
            //console.log("carrito: "+$carrito);           
            //localStorage.setItem("carrito", )
            //$("#filaart-"+alumnoId).remove();
          });//end item click
      });//end item click items foreach

          



  });//end ready
})(jQuery, "hola mundo");