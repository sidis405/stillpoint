Dropzone.options.activityImageUploadForm = {

    dictDefaultMessage: "<a class='btn btn-primary'>Clicca o trascina qua le immagini da caricare</a>",
    dictInvalidFileType: "Questo tipo di file non è permesso",
    dictFileTooBig: "File troppo grande. Max 2MB.",
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 5, // MB
    addRemoveLinks: true,
    acceptedFiles: '.jpg,.png,.gif,.bmp',
    init: function() {
        this.on("success", function(file) { 
            this.removeFile(file); 
            getImagesForActivityEditGallery();
        });
    }

};