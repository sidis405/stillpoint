// Initializing wave effect
$(document).ready(function() {
	Waves.attach('.btn'),
	Waves.attach('.btn-circle', ['waves-circle']),
	Waves.attach('.sidebar-menu li');   
    Waves.init();
});
// Input effect
$(document).ready(function() {
	$('.input-material input, .input-material textarea').focus(function() {		
		$(this).parent().addClass('input-filled');
	}).blur(function() {
		$(this).parent().removeClass('input-filled');
	});
});

// Make table linkable
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});