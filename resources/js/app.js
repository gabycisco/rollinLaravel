require('./bootstrap');

fetch ("https://apis.datos.gob.ar/georef/api/provincias")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
    var option=document.querySelector('#provincias option');
    
    
    })
    .catch(function(error){
        console.log("Ups! Tenemos un error:"+error)
    })