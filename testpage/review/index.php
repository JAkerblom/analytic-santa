<!DOCTYPE html>
<html lang="en">
  <head>
  	<title> Analytic Santa - Forefron Consulting Group </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/skystyle.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css" href="css/smart-themes/red.css">
    <link rel="stylesheet" type="text/css"  href="css/smart-addons.css">
    <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
  
    <!-- TODO handle images for klappar -->
    <script type="text/javascript" src="data/items/klapplist.json"></script>
    <script src="js/load-image.all.min.js"></script>

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
      <div class="smart-wrap">
        <div class="smart-forms smart-container wrap-3">
        
          <div class="form-header header-red header-primary" id="header">
            <h4 style="text-align:center !important;"><i class="fa fa-gift"></i>Vad önskar du <br>dig i julklapp?</h4>
          </div><!-- end .form-header section -->
            
          <form method="post" action="php/smartprocess.php" id="smart-form">
            <div class="form-body theme-red" id="section-1">
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
                                <input type="radio" name="sexType" value="female" checked=""><span class="radio"></span> Kvinna                 
                            </label>

                            <label class="option option-red">
                                <input type="radio" name="sexType" value="male"><span class="radio"></span> Man                  
                            </label>

                            <label class="option option-red" style="margin-left:10px;">
                                <input type="radio" name="sexType" value="otherGender"><span class="radio"></span> ------                  
                            </label>
                        </div><!-- end section -->                 
                        <div class="section colm colm1" style="padding-left:0px;">
                            <p>Ålder:</p>
                        </div>
                        <div class="section colm colm1-5">
                            <label class="field">
                            	<!--<input type="text" name="age" id="stepper1" value="30" class="gui-input">-->
                              <input type="number" name="age" min="0" max="100" step="1" value="30" class="gui-input">
                            </label>
                        </div><!-- end section -->
                    </div>
              
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
                    <input type="radio" name="prefersSoftPresents" value="0" checked=""><span class="radio"></span> Hårda                 
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSoftPresents" value="1"><span class="radio"></span> Mjuka                  
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
                    <input type="radio" name="prefersSuntrip" value="1" checked=""><span class="radio"></span> Sol  
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersSuntrip" value="0"><span class="radio"></span> Snö                  
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
                    <input type="radio" name="prefersDog" value="1" checked=""><span class="radio"></span> Hund                 
                  </label>
                </div>
                <div class="section colm colm3">
                  <label class="option option-red">
                    <input type="radio" name="prefersDog" value="0"><span class="radio"></span> Katt                  
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
                    <input type="hidden" name="santaBelief" value="0">
                    <input type="checkbox" name="santaBelief" id="switch1" value="1">
                    <label for="switch1" data-on="JA" data-off="NEJ"></label>
                  </label>
                </div>
             
                <div class="section colm colm9">
                  <p style="margin:0;margin-top:5px;"> Äger du en bil? </p>
                </div>
                <div class="section colm colm2">
                  <label class="switch block">
                    <input type="hidden" name="ownsCar" value="0">
                    <input type="checkbox" name="ownsCar" id="switch2" value="1">
                    <label for="switch2" data-on="JA" data-off="NEJ"></label>
                  </label>
                </div>
                
                <div class="section colm colm9">
                  <p style="margin:0;margin-top:5px;"> Brukar du skriva rim på julklappar? </p>
                </div>
                <div class="section colm colm2">
                  <label class="switch block">
                    <input type="hidden" name="doesRhyme" value="0">
                    <input type="checkbox" name="doesRhyme" id="switch3" value="1">
                    <label for="switch3" data-on="JA" data-off="NEJ"></label>
                  </label>
                </div>
              </div>
         
              <div class="section">
                  <label class="field select">
                      <select id="chocolatePref" name="chocolatePref">
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
                      <select id="candyPref" name="candyPref">
                        <option value="">Välj din favorit av julegodis...</option>
                        <option value="kola">Knäckkola</option>
                        <option value="marsipan">Marsipan</option>
                        <option value="nougat">Nougat</option>
                        <option value="pepparkaka">Pepparkaka</option>
                        <option value="lussekatt">Lussekatt</option>
                        <option value="ischoklad">Ischoklad</option>
                        <option value="ischoklad">Skumtomtar</option>
                        <option value="polkagris">Polkagris</option>
                      </select>
                      <i class="arrow double"></i>           
                  </label>  
              </div><!-- end section -->
              
              <div class="section">
                  <label class="field select">
                      <select id="kallePref" name="kallePref">
                        <option value="">Välj din favoritdel av Kalle Ankas Jul...</option>
                        <option value="verkstad">I jultomtens verkstad</option>
                        <option value="kalle-anka">Kalle Anka i djungeln</option>
                        <option value="askungen">Askungen</option>
                        <option value="mussepigg">Musse Pigg på capming</option>
                        <option value="lady-lufsen">Lady och Lufsen</option>
                        <option value="djungelboken">Djungelboken</option>
                        <option value="snovit">Snövit och de sju dvärgarna</option>
                        <option value="ferdinand">Tjuren Ferdinand</option>
                        <option value="robin-hood">Robin Hood</option>
                        <option value="pluto">Plutos julgran</option>
                        
                      </select>
                      <i class="arrow double"></i>           
                  </label>  
              </div><!-- end section -->
                    
                    <div class="spacer-b20">
                    	<label class="field-label"> Vilka av följande ingredienser tycker du är gott att äta på julbordet?</label>
                    </div>
                    
                    <div class="frm-row">
                    	<div class="option-group field">
                            <div class="section colm colm6">

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[0]" value="0">
                                  <input type="checkbox" name="christmasFood[0]" value="1">
                                  <span class="checkbox"></span> Köttbullar                  
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[1]" value="0">
                                  <input type="checkbox" name="christmasFood[1]" value="1">
                                  <span class="checkbox"></span> Prinskorv               
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[2]" value="0">
                                  <input type="checkbox" name="christmasFood[2]" value="1">
                                  <span class="checkbox"></span> Skinka                 
                              </label>
                              
                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[3]" value="0">
                                  <input type="checkbox" name="christmasFood[3]" value="1">
                                  <span class="checkbox"></span> Lutfisk                
                              </label>
                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[4]" value="0">
                                  <input type="checkbox" name="christmasFood[4]" value="1">
                                  <span class="checkbox"></span> Ägg                
                              </label>
                              <label class="option option-red block">
                                  <input type="hidden" name="christmasFood[5]" value="0">
                                  <input type="checkbox" name="christmasFood[5]" value="1">
                                  <span class="checkbox"></span> Lax                  
                              </label>
                                                        
                            </div><!-- end section -->
                            <div class="section colm colm6">

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[6]" value="0">
                                  <input type="checkbox" name="christmasFood[6]" value="1">
                                  <span class="checkbox"></span> Sill                  
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[7]" value="0">
                                  <input type="checkbox" name="christmasFood[7]" value="1">
                                  <span class="checkbox"></span> Brysselkål             
                              </label>

                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[8]" value="0">
                                  <input type="checkbox" name="christmasFood[8]" value="1">
                                  <span class="checkbox"></span> Röd/brunkål                
                              </label>
                              
                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[9]" value="0">
                                  <input type="checkbox" name="christmasFood[9]" value="1">
                                  <span class="checkbox"></span> Janssons
                              </label>
                              <label class="option option-red block spacer-b10">
                                  <input type="hidden" name="christmasFood[10]" value="0">
                                  <input type="checkbox" name="christmasFood[10]" value="1">
                                  <span class="checkbox"></span> Sylta             
                              </label>
                              <label class="option option-red block">
                                  <input type="hidden" name="christmasFood[11]" value="0">
                                  <input type="checkbox" name="christmasFood[11]" value="1">
                                  <span class="checkbox"></span> Potatis
                              </label>
                            </div><!-- end section -->
                        </div><!-- end option-group section -->
                    </div><!-- end .frm-row section -->
                </div><!-- end .form-body section -->
            
            <div class="form-body theme-red" id="section-2" style="display:none;">
              <div class="spacer-b30">
                <div class="tagline"><span> Klapputdelning! </span></div><!-- .tagline -->
              </div>
              <div class="section spacer-b20">
                  <p class="">Betygsätt dessa klappar utifrån hur väl de hade passat inslagna och med ditt namn på etiketten.</p>
                  <p class="small-text fine-grey">1 stjärna = Inget jag kan tänka mig.</p>
                  <!--<p class="small-text fine-grey">3 stjärnor = Osäker, men hade nog .</p>
                  <p class="small-text fine-grey">4 stjärnor = Osäker, men hade inte tackat nej.</p>-->
                  <p class="small-text fine-grey">6 stjärnor = Spot on! Ge mig den, tack!</p>
              </div>

              <div class="frm-row section" id="itemSection">
                  <span class="rating block anItem" id="27">
                      <div class="section colm colm6">
                      <span class="lbl-text">En fattig gräsklippare</span>
                      </div>
                      <div class="section colm colm6" id="descr"></div>
                      <div class="section colm colm6" id="pic">
                        <img src="">
                      </div>
                      <div class="section colm colm6">
                      <input type="hidden" id="0-id27" type="radio" name="items[0]" value='{"itemID":27, "rating":1}'>
                      <input class="rating-input" id="6-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":6}'>
                      <label class="rating-star" for="6-id27"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="5-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":5}'>
                      <label class="rating-star" for="5-id27"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="4-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":4}'>
                      <label class="rating-star" for="4-id27"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="3-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":3}'>
                      <label class="rating-star" for="3-id27"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="2-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":2}'>
                      <label class="rating-star" for="2-id27"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="1-id27" type="radio"  name="items[0]" value='{"itemID":27, "rating":1}'>
                      <label class="rating-star" for="1-id27"><i class="fa fa-star"></i></label>      
                      </div>
                      
                  </span>
                <div class="tagline"></div>
                  <div class="section colm colm6">
                  <span class="rating block anItem">
                      <span class="lbl-text">En ascool Actionman</span>
                      <img src="data/items/Images/03c033ae2dacefde3667feef77562082.jpg" height="40px" width="40px">
                      <input type="hidden" id="0-id16" type="radio" name="items[1]" value='{"itemID":16, "rating":1}'>
                      <input class="rating-input" id="6-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":6}'>
                      <label class="rating-star" for="6-id16"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="5-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":5}'>
                      <label class="rating-star" for="5-id16"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="4-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":4}'>
                      <label class="rating-star" for="4-id16"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="3-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":3}'>
                      <label class="rating-star" for="3-id16"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="2-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":2}'>
                      <label class="rating-star" for="2-id16"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="1-id16" type="radio"  name="items[1]" value='{"itemID":16, "rating":1}'>
                      <label class="rating-star" for="1-id16"><i class="fa fa-star"></i></label>      
                  </span></div>
                  <span class="rating block anItem">
                      <span class="lbl-text">En trött rakhyvel</span>
                      <img src="">
                      <input type="hidden" id="0-id23" type="radio" name="items[2]" value='{"itemID":23, "rating":1}'>
                      <input class="rating-input" id="6-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":6}'>
                      <label class="rating-star" for="6-id23"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="5-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":5}'>
                      <label class="rating-star" for="5-id23"><i class="fa fa-star"></i></label>
                      <input class="rating-input" id="4-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":4}'>
                      <label class="rating-star" for="4-id23"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="3-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":3}'>
                      <label class="rating-star" for="3-id23"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="2-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":2}'>
                      <label class="rating-star" for="2-id23"><i class="fa fa-star"></i></label>          
                      <input class="rating-input" id="1-id23" type="radio"  name="items[2]" value='{"itemID":23, "rating":1}'>
                      <label class="rating-star" for="1-id23"><i class="fa fa-star"></i></label>
                  </span>                                                             
                </div><!-- end  section -->
            </div>
            <div class="result"></div><!-- end .result  section -->
            <div class="form-footer">
                <!--<button type="submit" class="button btn-red pushed btn-primary">Submit Feedback</button>-->
                <!--<button type="button" id="back" class="button btn-red pushed btn-primary">Tillbaka</button> --><!--onclick="back()"-->
                <button type="button" id="continue" class="button btn-red pushed btn-primary">Gå vidare</button>
                <button type="submit" id="submit" class="button btn-red pushed btn-primary" style="display:none;">Skicka svar</button>
                <!--<div class="actions clearfix"><ul role="menu" aria-label="Pagination" id="buttonList">
                  <!--<li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Go Back</a></li>
                  <li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Continue</a></li>
                  <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Submit Form</a></li></ul>-->
                  <!--<li id="back"><a onclick="" role="menuitem">Gå tillbaka</a></li>
                  <li id="continue"><a onclick="" role="menuitem">Gå tillbaka</a></li>
                  <li id="submit"><a onclick="" role="menuitem">Gå tillbaka</a></li></div>-->

            </div><!-- end .form-footer section -->
          </form>
        </div><!-- end .smart-forms section -->
      </div><!-- end .smart-wrap section -->
    
      <div></div><!-- end section -->
      <script type="text/javascript" src="js/snow.js"></script>
  </section>
</body>
</html>
