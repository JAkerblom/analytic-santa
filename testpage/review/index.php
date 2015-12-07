<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Smart Forms - Feedback Form </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/skystyle.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css" href="css/smart-themes/red.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-addons.css">
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
  
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>  
    <!--<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/smart-form.js"></script>
    <script type="text/javascript" src="js/jquery.stepper.min.js"></script>
    
      
    <script type="text/javascript">
      $(function() {

         $('#stepper1').stepper({ 
              UI: false,
              allowWheel: false,
              limit: [0, 100],
              wheel_step: 1,
              arrow_step: 1             
         });   
      });
    </script>
      
    <!--[if lte IE 9]>   
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->
       
  </head>
  <body class="christmasbg">

    <section class="sky">
<!--
    <div class="color"><p>#F5624D</p></div>
<div class="color"><p>#CC231E</p></div>
<div class="color"><p>#34A65F</p></div>
<div class="color"><p>#0F8A5F</p></div>
<div class="color"><p>#235E6F</p></div>
</section>
-->
    
      <div class="smart-wrap">
        <div class="smart-forms smart-container wrap-3">
        
          <div class="form-header header-red header-primary">
            <h4 style="text-align:center !important;"><i class="fa fa-gift"></i>Vad önskar du <br>dig i julklapp?</h4>
          </div><!-- end .form-header section -->
            
          <form method="post" action="php/smartprocess.php" id="smart-form">
            <div class="form-body theme-red">

                  <div class="spacer-b30">
                    <div class="tagline"><span> Dina uppgifter </span></div><!-- .tagline -->
                  </div>
                	<div class="frm-row">                    
                        <div class="section colm colm6"> <!--  -->
                            <label for="firstname" class="field prepend-icon">
                                <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Förnamn...">
                                <label class="field-icon"><i class="fa fa-user"></i></label>  
                            </label>
                        </div><!-- end section -->
                        
                        <div class="section colm colm6"> <!--  -->
                            <label for="lastname" class="field prepend-icon">
                                <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Efternamn...">
                                <label class="field-icon"><i class="fa fa-user"></i></label>  
                            </label>
                        </div><!-- end section -->                                       
                    </div><!-- end frm-row section -->
                    
                    <div class="frm-row">
                      <div class="section colm colm8">
                    	<label for="email" class="field prepend-icon">
                        	<input type="email" name="email" id="email" class="gui-input" placeholder="Emailadress">
                            <label class="field-icon"><i class="fa fa-envelope"></i></label>  
                        </label>
                      </div><!-- end section -->                    
                      <div class="section colm colm4">
                        <label for="zip" class="field prepend-icon">
                          <input type="text" name="zip" id="zip" class="gui-input" placeholder="Postnr">
                          <b class="tooltip tip-right-bottom"><em> Ditt postnummer används för att få fram olika demografiska data.</em></b>
                          <label for="zip" class="field-icon"><i class="fa fa-building-o"></i></label> 
                        </label>
                      </div><!-- end section -->
                    </div>
                      
                    <div class="frm-row">
                        <div class="section colm colm8" style="margin-top: 5px;">
                            <label class="option option-red">
                                <input type="radio" name="payment" checked=""><span class="radio"></span> Kvinna                 
                            </label>

                            <label class="option option-red">
                                <input type="radio" name="payment"><span class="radio"></span> Man                  
                            </label>

                            <label class="option option-red" style="margin-left:10px;">
                                <input type="radio" name="payment"><span class="radio"></span> ------                  
                            </label>
                        </div><!-- end section -->                 
                        <div class="section colm colm1" style="padding-left:0px;">
                            <p>Ålder:</p>
                        </div>
                        <div class="section colm colm3">
                            <label class="field">
                            	<input type="text" name="stepper1" id="stepper1" value="30" class="gui-input">
                            </label>
                        </div><!-- end section -->
                    </div>
                  
                    <!--<//?php include('php/state.php'); ?>-->
                    
                    <div class="spacer-b30">
                        <div class="tagline"><span> Lite om dig själv </span></div><!-- .tagline -->
                    </div>
              
              <!-- PrefersSoftPresents -->
              <div class="frm-row">
                <div class="section colm colm6">
                  <p style="margin:0;margin-top:6px;"> Mina klappar föredrar jag: </p>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSoftPresents" checked=""><span class="radio"></span> Hårda                 
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSoftPresents"><span class="radio"></span> Mjuka                  
                  </label>
                </div>
              </div>
              <!-- PrefersSuntrip -->
              <div class="frm-row">
                <div class="section colm colm6">
                  <p style="margin:0;margin-top:6px;"> På semester åker du helst till: </p>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSuntrip" checked=""><span class="radio"></span> Sol                 
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSuntrip"><span class="radio"></span> Snö                  
                  </label>
                </div>
              </div>
              <!-- PrefersDog -->
              <div class="frm-row">
                <div class="section colm colm6">
                  <p style="margin:0;margin-top:6px;"> Som husdjur föredrar jag: </p>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersDog" checked=""><span class="radio"></span> Hund                 
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersDog"><span class="radio"></span> Katt                  
                  </label>
                </div>
              </div>
              
              <!-- SantaBelief -->
              <div class="frm-row">
                <div class="section colm colm9">
                  <p style="margin:0;margin-top:5px;"> Tror du på tomten? </p>
                </div>
                <div class="section colm colm2">
                  <label class="switch block">
                    <input type="checkbox" name="switch1" id="switch1" value="prefersSoftPresents">
                    <label for="switch1" data-on="JA" data-off="NEJ"></label>
                  </label>
                </div>
              </div>
              
              <div class="frm-row">
                <div class="section colm colm9">
                  <p style="margin:0;margin-top:5px;"> Någon fråga: </p>
                </div>
                <div class="section colm colm2">
                  <label class="switch block">
                    <input type="checkbox" name="switch2" id="switch2" value="prefersSoftPresents">
                    <label for="switch2" data-on="JA" data-off="NEJ"></label>
                  </label>
                </div>
              </div>
              
              <!--<div class="section spacer-b20">
                <p class="">Betygsätt dessa klappar utifrån hur väl de hade passat inslagna och med ditt namn på etiketten.</p>
              </div>-->
              <div class="section">
                  <label class="field select">
                      <select id="department" name="department">
                          <option value="">Välj din favorit av chokladtyper...</option>
                          <option value="milk">Mjölkchoklad</option>
                          <option value="dark">Mörk choklad</option>
                          <option value="white">Vit choklad</option>
                          <option value="none">Inget av dem</option>
                      </select>
                      <i class="arrow double"></i>           
                  </label>  
              </div><!-- end section -->
              
              <div class="section">
                  <label class="field select">
                      <select id="department" name="department">
                        <option value="">Välj din favorit av julegodis...</option>
                        <option value="kola">Knäckkola</option>
                        <option value="marsipan">Marsipan</option>
                        <option value="nougat">Nougat</option>
                        <option value="pepparkaka">Pepparkaka</option>
                        <option value="lussekatt">Lussekatt</option>
                        <option value="ischoklad">Ischoklad</option>
                        <option value="polkagris">Polkagris</option>
                      </select>
                      <i class="arrow double"></i>           
                  </label>  
              </div><!-- end section -->
                    
             
              
              <!--<div class="section">
                  <label for="comment" class="field prepend-icon">
                      <textarea class="gui-textarea" id="comment" name="comment" placeholder="Ge feedback på den här appen"></textarea>
                      <label class="field-icon"><i class="fa fa-comments"></i></label>
                            
<span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>
                        </label>
              </div><!-- end section -->
                    
                    <!--<div class="spacer spacer-b20"></div> 
                    
                    <div class="section spacer-b20">
                        <p class="">Betygsätt dessa klappar utifrån hur väl de hade passat inslagna och med ditt namn på etiketten.</p>
                        <p class="small-text fine-grey">1 stjärna = Inget jag kan tänka mig.</p>
                        <p class="small-text fine-grey">3 stjärnor = Osäker, men hade inte tackat nej.</p>
                        <p class="small-text fine-grey">5 stjärnor = Spot on! Ge mig den, tack!</p>
                    </div>
                
                    <div class="section">
                        <span class="rating block">
                            <span class="lbl-text">En fattig gräsklippare</span>
                            <input class="rating-input" id="five-stars" type="radio"  name="products" value="5">
                            <label class="rating-star" for="five-stars"><i class="fa fa-star"></i></label>
                            <input class="rating-input" id="four-stars" type="radio"  name="products" value="4">
                            <label class="rating-star" for="four-stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="three-stars" type="radio"  name="products" value="3">
                            <label class="rating-star" for="three-stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="two-stars" type="radio"  name="products" value="2">
                            <label class="rating-star" for="two-stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="one-star" type="radio"  name="products" value="1">
                            <label class="rating-star" for="one-star"><i class="fa fa-star"></i></label>      
                        </span>  
                        <span class="rating block">
                            <span class="lbl-text">En ascool Actionman</span>
                            <input class="rating-input" id="5stars" type="radio"  name="support" value="5">
                            <label class="rating-star" for="5stars"><i class="fa fa-star"></i></label>
                            <input class="rating-input" id="4stars" type="radio"  name="support" value="4">
                            <label class="rating-star" for="4stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="3stars" type="radio"  name="support" value="3">
                            <label class="rating-star" for="3stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="2stars" type="radio"  name="support" value="2">
                            <label class="rating-star" for="2stars"><i class="fa fa-star"></i></label>          
                            <input class="rating-input" id="1star" type="radio"  name="support" value="1">
                            <label class="rating-star" for="1star"><i class="fa fa-star"></i></label>      
                        </span>
                        <span class="rating block">
                            <span class="lbl-text">En trött rakhyvel</span>
                            <input class="rating-input" id="5s" type="radio"  name="response" value="5">
                            <label class="rating-star" for="5s"><i class="fa fa-star"></i></label>
                            <input class="rating-input" id="4s" type="radio"  name="response" value="4">
                            <label class="rating-star" for="4s"><i class="fa fa-star"></i></label>                
                            <input class="rating-input" id="3s" type="radio"  name="response" value="3">
                            <label class="rating-star" for="3s"><i class="fa fa-star"></i></label>                
                            <input class="rating-input" id="2s" type="radio"  name="response" value="2">
                            <label class="rating-star" for="2s"><i class="fa fa-star"></i></label>                
                            <input class="rating-input" id="1s" type="radio"  name="response" value="1">
                            <label class="rating-star" for="1s"><i class="fa fa-star"></i></label>            
                        </span>                         
                                                       
                    </div><!-- end  section -->
                    
                    <!--<div class="spacer spacer-b25"></div> -->
                    
                    <div class="spacer-b20">
                    	<label class="field-label"> Vilka av följande ingredienser tycker du är gott att äta på julbordet?</label>
                    </div>
                    
                    <div class="frm-row">
                    	<div class="option-group field">
                            <div class="section colm colm6">

                              <label class="option option-red block spacer-b10">
                                  <input type="checkbox" name="improve[]" value="kottbullar">
                                  <span class="checkbox"></span> Köttbullar                  
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="checkbox" name="improve[]" value="prinskorv">
                                  <span class="checkbox"></span> Prinskorv               
                              </label>

                              <label class="option option-red block">
                                  <input type="checkbox" name="improve[]" value="skinka">
                                  <span class="checkbox"></span> Skinka                 
                              </label>                                                        
                                                        
                            </div><!-- end section -->
                            <div class="section colm colm6">

                              <label class="option option-red block spacer-b10">
                                  <input type="checkbox" name="improve[]" value="sill">
                                  <span class="checkbox"></span> Sill                  
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="checkbox" name="improve[]" value="brysselkal">
                                  <span class="checkbox"></span> Brysselkål             
                              </label>

                              <label class="option option-red block">
                                  <input type="checkbox" name="improve[]" value="rodkal">
                                  <span class="checkbox"></span> Röd/brunkål                
                              </label>
                            </div><!-- end section -->
                        </div><!-- end option-group section -->
                    </div><!-- end .frm-row section -->

              
              <div class="frm-row">
                <div class="option-group field">
                  <div class="section colm colm6">
                    <label class="option option-red block spacer-b10">
                      <input type="checkbox" name="improve[]" value="rodkal">
                      <span class="checkbox"></span> Lutfisk                
                    </label>
                    <label class="option option-red block spacer-b10">
                    <input type="checkbox" name="improve[]" value="rodkal">
                      <span class="checkbox"></span> Ägg                
                    </label>
                    <label class="option option-red block">
                      <input type="checkbox" name="improve[]" value="lax">
                      <span class="checkbox"></span> Lax                  
                    </label>
                  </div><!-- end section -->
                  <div class="section colm colm6">
                    <label class="option option-red block spacer-b10">
                      <input type="checkbox" name="improve[]" value="janssons">
                      <span class="checkbox"></span> Janssons
                    </label>
                    <label class="option option-red block spacer-b10">
                      <input type="checkbox" name="improve[]" value="sylta">
                      <span class="checkbox"></span> Sylta             
                    </label>
                    <label class="option option-red block">
                      <input type="checkbox" name="improve[]" value="potatis">
                      <span class="checkbox"></span> Potatis
                    </label>
                  </div><!-- end section -->
                </div><!-- end option-group section -->
              </div><!-- end .frm-row section --
                
                    <!-- Google map. Remove comments to have this. I will include coordinates from the zip code which could be used here.
                    <//?php include('php/googlemap.php'); ?>
                    -->
                    <div class="result"></div><!-- end .result  section -->
                </div><!-- end .form-body section -->
                <div class="form-footer">
                	<button type="submit" class="button btn-red btn-primary">Submit Feedback</button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->
      <script type="text/javascript" src="js/snow.js"></script>
  </section>
</body>
</html>
