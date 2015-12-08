$(document).ready(function(e) {
  //$backButton = $('#back');
  $contButton = $('#continue');
  $submButton = $('#submit');
  
  $firstPage = $("#section-1");
  $secondPage = $("#section-2");
  
  //$backButton.hide();
  $submButton.hide();
  
  $('#back').click(function(e) {
    console.log("Clicked backward");
    
    /* Hiding showing pages */
    /*$secondPage.hide("slow");
    $firstPage.show("slow");*/
    
    /* Hiding showing buttons */
    /*$backButton.hide("slow");
    $contButton.show("slow");
    $submButton.hide("slow");*/
    
    /* Hiding showing pages */
    $('.form-footer').hide("slow", function() {
      /* Hiding showing buttons */
      //$backButton.hide("slow");
      $contButton.show("slow");
      $submButton.hide("slow");

      $secondPage.hide("slow");
      $firstPage.show("slow", function() {
        $('.form-footer').show("slow");
      });
    });
    
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });
  
  $('#continue').click(function(e) {
    console.log("Clicked forward");
    
    if ($('#smart-form').valid()) {
      /* Hiding showing pages */
      $('.form-footer').hide("slow", function() {
        /* Hiding showing buttons */
        //$backButton.show("slow");
        $contButton.hide("slow");
        $submButton.show("slow");
        
        $firstPage.hide("slow");
        $secondPage.show("slow", function() {
          $('.form-footer').show("slow");
        });
      });
      
      $("html, body").animate({ scrollTop: 0 }, "slow");
    } 
  });
  
  $('#submit').click(function(e) {});
  
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
                                kallePref: {
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
                                kallePref: {
                                        required: 'Var god välj den del du gillar mest'
                                },
								/*comment: {
										required: 'Oops you forgot to comment',
										minlength: 'Comment must be at least 10 characters'
								},*/
								'christmasFood[]':{
										required: 'Var god markera minst ett förslag av mat som du gillar.'
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
    