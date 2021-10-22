(function($) {
  $(document).ready(function() {
      //alert('carrito');
      let tokenStr = localStorage.getItem("token");
      let token = "defecto  valor"; 
      if (tokenStr){
        token = tokenStr
      }
      $.ajaxSetup({
        headers: {
          'Authorization': `Bearer ${token}`
        }
      });
      let carrito = JSON.parse(localStorage.getItem("carrito"));
      //$("#carrito").text(carrito.length);
      carrito.forEach(element => {
        //let insert = `<button type="button" class="btn btn-primary">${element.id}</button>` 
        let insert02 = `<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 p-3"
        id="art-${element.id}">
        <div class="card">
          <img class="card-img-top" src="${element.url}" alt="Card image cap"/>
          <div class="card-body">
            <h5 class="card-title">ID:${element.id} ${element.codigo}</h5>
            <p class="card-text">${element.descripcion}</p>
            <p class="card-text">$ ${element.precio}</p>
            <input id="cant-${element.id}" class="form-control"
            value="${element.cantidad}" type="number" disabled
            ></p>
            <button type="button" class="btn btn-danger btnEliminar"
            data-articulo-id="${element.id}"
                        >Eliminar</button>
          </div>
          </div><!-- end card -->
        </div><!-- end col --><?php }`
        $("#carritoid").after(insert02);
      });
      /*for (let index = 0; index < array.length; index++) {

        
        
      }*/
      $("body").on("click",".btnEliminar" ,function(){
        //console.log("entro");
        let articuloId= $(this).data("articuloId");
        //console.log(articuloId);
        const confirm = window.confirm("Deseas eliminar el elemento?");
        if (confirm){
          $("#art-"+articuloId).remove();
          //actualizar
          //localStorage.setItem("carrito", JSON.stringify(carrito));
          let carritoStr = localStorage.getItem("carrito");
          if (carritoStr){
            //console.log(carritoStr);
            console.log("-----------------");
            let carrito= JSON.parse(carritoStr);
            //console.log(carrito);
            let itemCarrito= carrito.find(articulo => articulo.id ==articuloId);
            carrito.forEach(function(art, index, object) {
              if(art.id == articuloId){
                object.splice(index, 1);
                localStorage.setItem("carrito", JSON.stringify(carrito));
                //console.log("probando");
                
                
                
                
              }
              $("#cantidadElemCarrito").text(carrito.length);
          });
          //$("#cantidadElemCarrito").text(carrito.length);
          
           
          }
        }
      }); //end body

      //http://localhost/prophp3bj/proyectoPHPComun/Apicarrito/completarCarrito
      $("#btnCompletarCarrito").on("click",function(){
        
        let url= $("#url").val();
        let urlReq =url+"apicarrito/completarCarrito";
        
        //$token = localStorage.getItem('token');
        let headers = {'Content-Type':'application/json;charset=utf-8'}
                        //'Authorization': `Bearer ${token}`}; 
        
        var data = {"lista": carrito,
                    "usuario": 1 };
                    console.log(data);
              $.ajax({
                url: urlReq,
                headers: headers,
                type: 'POST',
                data: JSON.stringify(data),
                dataType : 'json'
            })
            .done(function (data) {              
              //pedido agregado con exito
              console.log(data);
              localStorage.setItem("carrito", JSON.stringify([]));
              $("#cantidadElemCarrito").text(0);
              
              $("#itemsCarrito").html(`<div id="carritoid"></div>`);
              //console.log(data.resultado);
              $("#numPedido").text(data.resultado)
              //$("#resPedido").css( {"display":"block"});
              $("#resPedido").css("display","block");
              //console.log($listaArticulos);
            })
            .fail(function (jqXHR, textStatus, errorThrown) {console.log(jqXHR);  });
        });//end btnCompletarCarrito




      
  });  
})(jQuery);