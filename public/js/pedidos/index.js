(function($) {
  $(document).ready(function() {  
    function convertUTCDateToLocalDate(date) {
      let newDate = new Date(date.getTime()+date.getTimezoneOffset()*60*1000);
      let offset = date.getTimezoneOffset() / 60;
      let hours = date.getHours();
      newDate.setHours(hours - offset);
      return newDate;   
    }
    function agregarCero(input) { 
      let salida= input;
      if (input<10){
        input = "0"+input;
      }
      return input
    }     
      function formatoFecha(fecha, formato) {
        const map = {
            dd: agregarCero(fecha.getDate()),
            mm: agregarCero(fecha.getMonth()),
            yy: agregarCero(fecha.getFullYear().toString().slice(-2)),
            yyyy: agregarCero(fecha.getFullYear()),
            h: agregarCero(fecha.getHours()),
            m: agregarCero(fecha.getMinutes())
        }
    
        return formato.replace(/dd|mm|yyyy|h|m/gi, matched => map[matched])
    }
    //const d = new Date(2018, 11, 24, 10, 33, 30, 0);
    //document.getElementById("demo").innerHTML = formatoFecha(d, "dd-mm-yyyy h:m");

    /*function formatoFecha(fecha) {      
      let salida = fecha.getFullYear();
      salida+="-";
      let mes = agregarCero(fecha.getMonth());
      salida+=mes;
      salida+="-";
      let dia = agregarCero(fecha.getDate());
      salida += dia;
      salida+=" ";
      let horas = agregarCero(fecha.getHours());
      salida +=horas;
      salida+=":";
      let minutos = agregarCero(fecha.getMinutes());
      salida +=minutos;
      //fecha.getHours+fecha.ge
      return salida;
    }    */
      //console.log("funciona ver articulo"); 
      /*var n = d.getTimezoneOffset();
      var fecha = new Date(2021,0,4,12,30);
      var ms = fecha.getTime();
      var fecha02 = new Date(ms-n*60*1000);
      document.getElementById("demo").innerHTML = fecha02;*/
      $(".fecha").each(function(index) { 
          let fecha = $(this).text();          
          let horaLocal =convertUTCDateToLocalDate(new Date(fecha));          
          $(this).text(formatoFecha(horaLocal,"dd-mm-yyyy h:m"));          
        })
      
  });//end ready
})(jQuery);