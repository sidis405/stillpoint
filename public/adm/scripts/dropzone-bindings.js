Dropzone.options.activityImageUploadForm = {

    dictDefaultMessage: "<a class='btn btn-primary'>Click or drag here the files to upload</a>",
    dictInvalidFileType: "This filetype is not accepted",
    dictFileTooBig: "File too big. Max 2MB.",
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