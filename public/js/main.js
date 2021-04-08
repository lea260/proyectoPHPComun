
const items = document.querySelectorAll(".bEliminar");


//jQuery, libreria escrita en javascript 
//permitia 
items.forEach(item => {
    //console.log(item);
    item.addEventListener("click", function(){
        const matricula = this.dataset.matricula;

        const confirm = window.confirm("Deseas eliminar el elemento?");
        let url= document.querySelector('#url').value;
        console.log('url');
        console.log(url);
        if(confirm){
            httpRequest(url+"/consulta/eliminarAlumno/" + matricula, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-alumnos");
                const fila  = document.querySelector("#fila-" + matricula);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}