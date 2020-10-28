function obtenerDatos(valor){

    let url='https://parallelum.com.br/fipe/api/v1/'+valor+'/marcas';

    const api= new XMLHttpRequest();
    api.open('GET', url,true);
    api.send();

    api.onreadystatechange = function(){
        if(this.status ==200 && this.readyState == 4){
            let datos= JSON.parse(this.responseText);
            console.log(datos);
            let resultado = document.querySelector('#resultado');
            resultado.innerHTML = '';

            for (let item of datos){
                resultado.innerHTML += '<li>'+item.nome+'|'+item.codigo+'</li>'

            }
        }

    }


}