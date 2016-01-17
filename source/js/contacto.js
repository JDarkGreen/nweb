
jQuery(document).ready(function() {
	

    /*
	    Contact form
	*/
    $('#formcontac').submit(function(e) {
    	e.preventDefault();
    	var form = $(this);
    	var nameLabel = form.find('label[for="contact-name"]');
        var telefLabel = form.find('label[for="contact-telef"]');
    	var emailLabel = form.find('label[for="contact-email"]');
    	var messageLabel = form.find('label[for="contact-message"]');
    	
    	nameLabel.html('');
        telefLabel.html('');
    	emailLabel.html('');
    	messageLabel.html('');
        
        var postdata = form.serialize();
        
        $.ajax({
            type: 'POST',
            url: 'source/sendmail.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.nameMessage != '') {
                	nameLabel.append('<span class="error-label"> ' + json.nameMessage + '</span>');
                }
                if(json.telefMessage != '') {
                    telefLabel.append('<span class="error-label"> ' + json.telefMessage + '</span>');
                }
                if(json.emailMessage != '') {
                	emailLabel.append('<span class="error-label"> ' + json.emailMessage + '</span>');
                }
                if(json.messageMessage != '') {
                	messageLabel.append('<span class="error-label"> ' + json.messageMessage + '</span>');
                }
                if(json.nameMessage == '' && json.emailMessage == '' && json.messageMessage == '') {
                	form.fadeOut('fast', function() {
                		form.parent('.formc').append('<p><span class="violet">Gracias por contactarnos! </span>Muy pronto nos pondremos en contacto con usted..</p>');
                    });
                }
            }
        });
    });
  
	
});


