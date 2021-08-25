(function($) {
  $(document).ready(function() {
      //alert('carrito');
      let carrito = JSON.parse(localStorage.getItem("carrito"));
      //$("#carrito").text(carrito.length);
      console.log(carrito);
      carrito.forEach(element => {
        let insert = `<button type="button" class="btn btn-primary">${element.id}</button>` 
        let insert02 = `<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 p-3">
        <div class="card">
          <img class="card-img-top" src="<?=$value->url;?>" alt="Card image cap"/>
          <div class="card-body">
            <h5 class="card-title">ID:${element.id} ${element.codigo}</h5>
            <p class="card-text">${element.descripcion}</p>
            <p class="card-text">$ ${element.precio}</p>
            <input value="${element.cantidad}" class="form-control"
            type="number" disabled>
            </p>
            <button type="button" class="btn btn-primary btnEliminar"
            data-articulo-id="<?php echo $value->id; ?>"
            data-articulo-descripcion="<?php echo $value->descripcion; ?>"
            data-articulo-codigo="<?php echo $value->codigo; ?>"
            >Eliminar</button>
          </div>
          </div><!-- end card -->
        </div><!-- end col --><?php }`
        $("#carritoid").after(insert02);
      });
      /*for (let index = 0; index < array.length; index++) {
        
        
      }*/
      $("body").on("click",".btnEliminar", 
      function(){
        $("#parrafo5").after('<button type="button" class="btnHola">Click Me!</button>');

      });
      
  });  
})(jQuery);
