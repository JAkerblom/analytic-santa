var back;

$(document).ready(function() {
  
  /* Pagination and footer button settings
  -------------------------- */
  //$backButton = $('#back');
  $contButton = $('#continue');
  $submButton = $('#submit');
  
  $header = $("#header");
  $firstPage = $("#section-1");
  $secondPage = $("#section-2");
  $thirdPage = $("#section-3");
  $loadPage = $("#section-load");
  
  //$backButton.hide();
  $submButton.hide();
  
  //$('#back').click(function(e) {
  //window.back = function() {
  back = function() {
    /* Hiding showing pages */
    $('.form-footer').hide("slow", function() {
      /* Hiding showing buttons */
      //$backButton.hide("slow");
      $submButton.hide();
      $contButton.show();

      $secondPage.hide("slow");
      $firstPage.show("slow", function() {
        $('.form-footer').show("slow");
      });
    });
    $("html, body").animate({ scrollTop: 0 }, "slow");
  }
  
  //$('#continue').click(function(e) {
  //  if ($('#smart-form').valid()) {
      /* Hiding showing pages */
      
  //    doMLexec();
      
      /*$('.form-footer').hide("slow", function() {
        // Hiding showing buttons
        //$backButton.show("slow");
        $contButton.hide("slow");
        $submButton.show("slow");
        
        $firstPage.hide("slow");
        $secondPage.show("slow", function() {
          $('.form-footer').show("slow");
        });
      });
      
      $("html, body").animate({ scrollTop: 0 }, "slow");
      */
//    } 
//  });
 
  $('#submit').click(function(e) {
      $('.form-footer').hide("slow", function() {
        /* Hiding showing buttons */
        //$backButton.show("slow");
        $contButton.hide("slow");
        $submButton.show("slow");
        
        $header.hide("slow");
        $secondPage.hide("slow");
        $thirdPage.show("slow");
      });
      
      $("html, body").animate({ scrollTop: 0 }, "slow");
  });
  
  /* --------------------------------------- */
  
  /* Pagination and footer button settings
  -------------------------- */
  
  // Instead of using klappar_list['klappar'] to generate elements
  //  we use prediction['items']
  //$klist = klappar_list["klappar"];
  
  
  //$klist = prediction["items"];
  //$section = $("#itemSection");
  
  /*$.each($klist, function(index, value) {
    //console.log($(this));
    //$id = $(this)[0]['id'];
    //$id = index+1;
    //console.log(value);
    $id = value['itemID'];
    $htmlString = '';
    
    // Corrections made here when using $id contra index.
    //$title = $klist[index]['itemName'];
    //$descr = $klist[index]['description'];
    //$picPath = "data/items/Images/"+$klist[$id-1]['itemPicture'];
    $picPath = "data/items/Images/"+$klist[index]['itemPicture'];
    $title = value['itemName'];
    $descr = value['description'];
    //$picPath = "data/items/Images/"+value['itemPicture'];
    
    $htmlString += '<div class="spacer-b30"><div class="tagline"></div></div>\n';
    $htmlString += '<div class="rating block anItem">\n';
    $htmlString += '<div class="frm-row">\n';
    $htmlString += '<div class="section colm colm6">\n';
    $htmlString += '<span class="lbl-text">'+$title+'</span>\n';
    $htmlString += '</div>\n';
    $htmlString += '<div class="section colm colm6">\n';

    $htmlString += '<input type="hidden" id="0-id'+$id+'" type="radio" name="items['+index+']" value='+"'"+'{"itemID":'+$id+', "rating":1}'+"'>\n";
    for ($i = 6; $i > 0; $i--) {
      $htmlString += '<input class="rating-input" id="'+$i+'-id'+$id+'" type="radio"  name="items['+index+']" value='+"'"+'{"itemID":'+$id+', "rating":'+$i+'}'+"'>\n";
      $htmlString += '<label class="rating-star" for="'+$i+'-id'+$id+'"><i class="fa fa-star"></i></label>\n';
    }
  
    $htmlString += '</div><!-- end section column -->\n';
    $htmlString += '</div><!-- end frm-row -->\n';
    $htmlString += '<div class="frm-row">\n';
    $htmlString += '<div class="section colm colm6"><span class="descr">'+$descr+'</span></div>\n';
    $htmlString += '<div class="section colm colm6"><img src="'+$picPath+'"></div>\n';
    $htmlString += '</div><!-- end frm-row -->\n';
    $htmlString += '</div><!-- end section anItem -->\n';

    $section.append($htmlString);
    
  });*/
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
										required: 'Var god ange ett postnummer',
										number: 'Postnumret ska endast innehålla siffror',
										minlength: 'Postnumret är givetvis 5 siffror',
										maxlength: 'Postnumret är givetvis 5 siffror'			
								},								
								santaBelief: {
										required: 'Var god ange om personen tror på tomten eller inte'
								},
                                chocolatePref: {
										required: 'Var god välj personens favorit-choklad'
								},
                                candyPref: {
										required: 'Var god välj personens favorit-julegodis'
								},
                                kallePref: {
                                        required: 'Var god välj den del personen gillar mest'
                                },
								/*comment: {
										required: 'Oops you forgot to comment',
										minlength: 'Comment must be at least 10 characters'
								},*/
								'christmasFood[]':{
										required: 'Var god markera minst ett förslag av mat som personen gillar.'
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
									   console.log("Error in submithandler!");		
                                      $('.form-footer').removeClass('progress');
									},
									 success:function(){
                                       console.log("Success of submitting form to db!");		
										$('.form-footer').removeClass('progress');
										$('.alert-success').show("slow").delay(10000).hide("slow", function() {
                                          $('.field').removeClass("state-error, state-success");
										  if ($('.alert-error').length == 0) {
										    // $('#smart-form').resetForm();
                                            $('.smart-wrap').click();
											/*$('.field').removeClass("state-error, state-success");
											if( $('.alert-error').length == 0){
												$('#smart-form').resetForm();
                                                $('.smart-wrap').click(back());
                                                //back();
											}*/
                                          }
                                        });
                                     }
							  });
						}
                        
						
				});		
		
	});				
    
