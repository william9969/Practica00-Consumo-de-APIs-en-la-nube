function pasarDatos(val){
    var id= document.getElementById("buscar").value;
    
    if(id == ""){
        //console.log("Vacio");
        urlV='https://parallelum.com.br/fipe/api/v1/'+val+'/marcas';
        window.location.replace('mostrar.php?urlAPI='+urlV+'&mod='+''); 
    }
    else{
        console.log("aqui")
        urlNV='https://parallelum.com.br/fipe/api/v1/'+val+'/marcas/'+id+'/modelos';
        window.location.replace('mostrar.php?urlAPI='+urlNV+'&mod=modelos' ); 
    }

}