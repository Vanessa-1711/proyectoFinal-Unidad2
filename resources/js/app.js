import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;


  const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: "<span>Sube tu archivo aquí</span>",
    acceptedFiles: ".pdf",
    addRemoveLinks: true,
    dictRemoveFile: '<button type="button" class="font-bold p-2 text-sm text-white rounded-lg justify-center custom-button">Borrar archivo</button>',
    maxFiles: 1,
    uploadMultiple: false,

    // Trabajando con imagen en el contenedor de dropzone 
    init: function () {
      if (document.querySelector('[name="pdf"]').value.trim()) {
        const pdfPublicado = {};
        pdfPublicado.size = 1234;
        pdfPublicado.name = document.querySelector('[name="pdf"]').value;
        this.options.addedfile.call(this, pdfPublicado);
        this.options.thumbnail.call(this, pdfPublicado, '/uploads/' + pdfPublicado.name);
        pdfPublicado.previewElement.classList.add("dz-success", "dz-complete");
      }
    }
  });

  const dropzone2 = new Dropzone('#dropzone2', {
    dictDefaultMessage: "<span>Sube tu archivo aquí</span>",
    acceptedFiles: ".xml",
    addRemoveLinks: true,
    dictRemoveFile: '<button type="button" class="font-bold p-2 text-sm text-white rounded-lg justify-center custom-button">Borrar archivo</button>',
    maxFiles: 1,
    uploadMultiple: false,

    // Trabajando con imagen en el contenedor de dropzone 
    init: function () {
      if (document.querySelector('[name="xml"]').value.trim()) {
        const xmlPublicado = {};
        xmlPublicado.size = 1234;
        xmlPublicado.name = document.querySelector('[name="xml"]').value;
        this.options.addedfile.call(this, xmlPublicado);
        this.options.thumbnail.call(this, xmlPublicado, '/uploads/' + xmlPublicado.name);
        xmlPublicado.previewElement.classList.add("dz-success", "dz-complete");
      }
    }
  });

  // Evento de envío correcto de imagen
  dropzone.on('success', function (file, response) {
    console.log(response);
    document.querySelector('[name="pdf"]').value = response.pdf;
  });
  // Remover un archivo
  dropzone.on('removedfile', function () {
    document.querySelector('[name="pdf"]').value = '';
  });

    // Evento de envío correcto de imagen
  dropzone2.on('success', function (file, response) {
    document.querySelector('[name="xml"]').value = response.xml;
  });
  // Remover un archivo
  dropzone2.on('removedfile', function () {
    document.querySelector('[name="xml"]').value = '';
  });

