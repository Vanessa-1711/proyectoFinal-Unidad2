//import './bootstrap';


import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone ('#dropzone', {
    dictDefaultMessage: "Sube tu archivo aqui",
    acceptedFile: ".pdf",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,

    //Trabajando con imagen en el contenedor de dropzone 
    init: function(){
        if(document.querySelector('[name="imagen"]').value.trim()){
            const imagenPublicada = {};
            imagenPublicada.size = 1234 
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;
            this.options.addedfiles.call(this,imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, '/uploads/{$imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success", "dz-complete");
        }
    }

});

//Eveno de envio  correcto de imagen
dropzone.on('success', function(file, response){
    document.querySelector('[name= "imagen"]').value = response.imagen;
});

//envio cuando hay error
dropzone.on('error', function(file, message){
    console.log(message);
});

//remover un archivo
dropzone.on('removedfile', function(){
    document.querySelector('[name="imagen"]').value = '';

});