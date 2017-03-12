$(document).ready(function () {
	var validator = new FormValidator('contact-form', [{
		name:'cf-name',
		display:'Name',
		rules: 'required|max_length[50]|alpha_numeric'
	}, {
		name:'cf-email',
		display:'Email',
		rules: 'required|max_length[150]|alpha_numeric|valid_email'
	}, {
		name:'cf-subject',
		display:'Subject',
		rules: 'required|max_length[50]|alpha_numeric'
	}, {
		name:'cf-message',
		display:'Message',
		rules: 'required|max_length[50]|alpha_numeric'
	}], function(errors, event) {
	console.log(errors);
    if (errors.length > 0) {
        console.log(errors);
        for (var i = 0; i < errors.length; i++) {
            console.log(errors[i]);
        }
    }
    });

});