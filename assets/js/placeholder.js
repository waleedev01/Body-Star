/*
*    Title: Bootstrap Login and Register Forms in One Page: 3 Free Templates
*    Author: Azmind
*    Date: ...
*    Availability: https://azmind.com/bootstrap-login-register-forms-templates/
I have made some changes in the styling
*/
$(document).ready(function(){
	
	$('input[type="text"], input[type="password"],input[type="email"],textarea').each(function() {
		$(this).val( $(this).attr('placeholder') );
    });
	
});