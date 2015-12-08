$(document).ready(function() {
  var form  = $('#smart-form');
  form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
});

  $(document).ready(function() {
			   
				$( "#smart-form" ).validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
						onkeyup: false,
						onclick: false,
						
						/* @validation rules 
						------------------------------------------ */
						rules: {
								firstname: {
										required: true,
										minlength: 2
								},
                                lastname: {
										required: true,
										minlength: 2
								},
								email: {
										required: true,
										email: true
								},
                                zip: {
                                        required: true,
                                        minlength: 5,
                                        maxlength: 5,
                                        number: true
                                },
                                sexType: {
                                        required: true
                                },
                                age: {
                                        required: true
                                },
                                prefersSoftPresents: {
                                        required: true 
                                },
                                prefersSuntrip: {
                                        required: true
                                },
                                prefersDog: {
                                        required: true
                                },
                                santaBelief: {
                                        required: false
                                },
								chocolatePref: {
										required: true
								},
                                candyPref: {
										required: true
								},								
								comment: {
										required: false,
										minlength: 10
								},
								'christmasFood[]':{
										required:true
								}								
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
								firstname: {
										required: 'Var god ange ditt förnamn',
										minlength: 'Förnamnet måste vara minst 2 bokstäver'
								},
                                firstname: {
										required: 'Var god ange ditt efternamn',
										minlength: 'Efternamnet måste vara minst 2 bokstäver'
								},
								email: {
										required: 'Var god ange din email-adress',
										email: 'Var god ange en giltig email-adress'
								},
								zip: {
										required: 'Var god ange ditt postnummer',
										number: 'Ditt postnummer ska endast innehålla siffror',
										minlength: 'Ditt postnummer är givetvis 5 siffror',
										maxlength: 'Ditt postnummer är givetvis 5 siffror'			
								},								
								santaBelief: {
										required: 'Var god säg om du tror på tomten eller inte'
								},
                                chocolatePref: {
										required: 'Var god välj ditt favorit-choklad'
								},
                                candyPref: {
										required: 'Var god välj ditt favorit-julegodis'
								},
								/*comment: {
										required: 'Oops you forgot to comment',
										minlength: 'Comment must be at least 10 characters'
								},*/
								'christmasFood[]':{
										required: 'Var god markera minst ett förslag av mat som ni gillar.'
								}								
						},

						/* @validation highlighting + error placement  
						---------------------------------------------------- */	
						
						highlight: function(element, errorClass, validClass) {
								$(element).closest('.field').addClass(errorClass).removeClass(validClass);
						},
						unhighlight: function(element, errorClass, validClass) {
								$(element).closest('.field').removeClass(errorClass).addClass(validClass);
						},
						errorPlacement: function(error, element) {
                          if (element.is(":radio") || element.is(":checkbox")) {
									element.closest('.option-group').after(error);
						   } else {
									error.insertAfter(element.parent());
						   }
						},
						
						/* @ajax form submition 
						---------------------------------------------------- */						
						submitHandler:function(form) {
						  console.log("In submithandler");	
                          $(form).ajaxSubmit({
								    target:'.result',			   
									beforeSubmit:function(){ 
									  console.log("Before");		
                                      $('.form-footer').addClass('progress');
									},
									error:function(){
									   console.log("Here!");		
                                      $('.form-footer').removeClass('progress');
									},
									 success:function(){
                                       console.log("Success!");		
											$('.form-footer').removeClass('progress');
											$('.alert-success').show().delay(10000).fadeOut();
											$('.field').removeClass("state-error, state-success");
											if( $('.alert-error').length == 0){
												$('#smart-form').resetForm();
											}
									 }
							  });
						}
						
				});		
		
	});				
    