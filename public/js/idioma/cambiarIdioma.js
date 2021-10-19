(function($, param) {
  $(document).ready(function() {
    //alert('ddddd');
    /*setTimeout(() => {
      window.location.reload(false); 
    }, 2000);*/
    //let idioma="equivocado";
    let idioma = $("#idioma").val();             
    Cookies.set('idioma', idioma, { expires: 365});             
    document.documentElement.setAttribute("lang", idioma);    
  });//end ready
})(jQuery, "hola mundo");