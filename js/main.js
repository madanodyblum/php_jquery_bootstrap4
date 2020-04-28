
$('#btn-next1').click(function() {
	$('select[name="testing_xy7"]').valid();
	
	if ( $('select[name="testing_xy7"]').valid()){
		$('#step1').fadeOut(500,function(){
            $("#step2").fadeIn(500);
        });
	}
});

$('#btn-next2').click(function() {
	$('select[name="injecting_xy7"]').valid();
	
	if ($('select[name="injecting_xy7"]').valid()){
		$('#step2').fadeOut(500,function(){
            $("#step3").fadeIn(500);
        });
	}
});

$('#btn-next3').click(function() {
	$('input[name="first_name"]').valid();
	$('input[name="last_name"]').valid();
	$('input[name="email"]').valid();
	$('input[name="phone"]').valid();
	if ($('input[name="first_name"]').valid() && $('input[name="last_name"]').valid() && $('input[name="email"]').valid() && $('input[name="phone"]').valid()){
		$('#step3').fadeOut(500,function(){
            $("#step4").fadeIn(500);
        });
	}
});

$("#cgm-form").validate({
	rules: {
		testing_xy7: "required",
		injecting_xy7: "required",
		first_name: "required",
		last_name: "required",
		email: {
			required: true,
			email: true
		},
		phone: "required",
		dob: "required",
		city: "required",
		state: "required",
		postal_code: {
			required: true,
			zipcodeUS: true
		},
		agree_to_terms_xy7: "required",
	},
	messages: {
		testing_xy7: "Please make a selection",
		injecting_xy7: "Please make a selection",
		first_name: "Enter first name",
		last_name: "Enter last name",
		email: {
			required: "Enter your email address",
		},
		phone: "Enter your phone number",
		dob: "Enter your date of birth",
		city: "Enter your city",
		state: "Select select your state",
		postal_code: {
			required: "Zip code is required",
		},
		agree_to_terms_xy7: "You must agree to continue",
	},


	'errorClass': 'help-block',
	'errorElement': 'span',
	highlight: function(element) {
		$(element).closest('.input-group').removeClass('valid-feedback').addClass('invalid-feedback');
	},
	unhighlight: function(element) {
		$(element).closest('.input-group').removeClass('valid-feedback').removeClass('invalid-feedback');
	},
	success: function(element) {
		$(element).closest('.input-group').removeClass('invalid-feedback').addClass('valid-feedback');
	},
	onkeyup: false,
	onfocusout: function(element) {
		if($(element).valid()) {
			$(element).closest('.input-group').removeClass('invalid-feedback').addClass('valid-feedback');
		}
	},

});