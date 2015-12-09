<!DOCTYPE html>
<html lang="en">
<head>
  <title>Analytic Santa - Forefron Consulting Group</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="css/skystyle.css" rel="stylesheet" type="text/css">
  <link href="css/smart-forms.css" rel="stylesheet" type="text/css">
  <link href="css/smart-themes/red.css" rel="stylesheet" type="text/css">
  <link href="css/smart-addons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- TODO handle images for klappar -->

  <script src="data/items/klapplist.json" type="text/javascript"></script>
  <script src="js/load-image.all.min.js"></script>
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <!--<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>-->

  <script src="js/jquery.form.min.js" type="text/javascript"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="js/additional-methods.min.js" type="text/javascript"></script>
  <script src="js/smart-form.js" type="text/javascript"></script>
  <script src="js/jquery.stepper.min.js" type="text/javascript"></script>
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
  <![endif]--><!--[if lte IE 8]>
    <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
  <![endif]-->
</head>
<body class="christmasbg">
  <section class="sky">
    <div class="smart-wrap">
      <div class="smart-forms smart-container wrap-3">
        <div class="form-header header-red header-primary" id="header">
          <h4 style="text-align:center !important;"><i class="fa fa-gift"></i>Vad önskar du<br>
          dig i julklapp?</h4>
        </div><!-- end .form-header section -->
        <form action="php/smartprocess.php" id="smart-form" method="post" name="smart-form">
          <div class="form-body theme-red" id="section-1">
            <div class="spacer-b30">
              <div class="tagline">
                <span>Dina uppgifter</span>
              </div><!-- .tagline -->
            </div>
            <div class="frm-row">
              <div class="section colm colm6">
                <!--  -->
                 <label class="field prepend-icon" for="firstname"><input class="gui-input" id="firstname" name=
                "firstname" placeholder="Förnamn..." type="text"> <label class="field-icon"><i class=
                "fa fa-user"></i></label></label>
              </div><!-- end section -->
              <div class="section colm colm6">
                <!--  -->
                 <label class="field prepend-icon" for="lastname"><input class="gui-input" id="lastname" name=
                "lastname" placeholder="Efternamn..." type="text"> <label class="field-icon"><i class=
                "fa fa-user"></i></label></label>
              </div><!-- end section -->
            </div><!-- end frm-row section -->
            <div class="frm-row">
              <div class="section colm colm8">
                <label class="field prepend-icon" for="email"><input class="gui-input" id="email" name="email"
                placeholder="Emailadress" type="email"> <label class="field-icon"><i class=
                "fa fa-envelope"></i></label></label>
              </div><!-- end section -->
              <div class="section colm colm4">
                <label class="field prepend-icon" for="zip"><input class="gui-input" id="zip" name="zip" placeholder=
                "Postnr" type="text"> <b class="tooltip tip-right-bottom"><em>Ditt postnummer används för att få fram
                olika demografiska data.</em></b> <label class="field-icon" for="zip"><i class=
                "fa fa-building-o"></i></label></label>
              </div><!-- end section -->
            </div>
            <div class="frm-row">
              <div class="section colm colm8" style="margin-top: 5px;">
                <label class="option option-red"><input checked name="sexType" type="radio" value="female"><span class=
                "radio"></span> Kvinna</label> <label class="option option-red"><input name="sexType" type="radio"
                value="male"><span class="radio"></span> Man</label> <label class="option option-red" style=
                "margin-left:10px;"><input name="sexType" type="radio" value="otherGender"><span class="radio"></span>
                ------</label>
              </div><!-- end section -->
              <div class="section colm colm1" style="padding-left:0px;">
                <p>Ålder:</p>
              </div>
              <div class="section colm colm1-5">
                <label class="field"><!--<input type="text" name="age" id="stepper1" value="30" class="gui-input">-->
                 <input class="gui-input" max="100" min="0" name="age" step="1" type="number" value="30"></label>
              </div><!-- end section -->
              
            <div class="spacer-b30">
              <div class="tagline">
                <span>Lite om dig själv</span>
              </div><!-- .tagline -->
            </div><!-- PrefersSoftPresents -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">Mina klappar föredrar jag:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersSoftPresents" type="radio" value=
                "0"><span class="radio"></span> Hårda</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersSoftPresents" type="radio" value="1"><span class=
                "radio"></span> Mjuka</label>
              </div>
            </div><!-- PrefersSuntrip -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">På semester åker du helst till:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersSuntrip" type="radio" value=
                "1"><span class="radio"></span> Sol</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersSuntrip" type="radio" value="0"><span class=
                "radio"></span> Snö</label>
              </div>
            </div><!-- PrefersDog -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">Som husdjur föredrar jag:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersDog" type="radio" value="1"><span class=
                "radio"></span> Hund</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersDog" type="radio" value="0"><span class=
                "radio"></span> Katt</label>
              </div>
            </div><!-- SantaBelief -->
            <div class="frm-row">
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Tror du på tomten?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="santaBelief" type="hidden" value="0"> <input id="switch1"
                name="santaBelief" type="checkbox" value="1"> <label data-off="NEJ" data-on="JA" for=
                "switch1"></label></label>
              </div>
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Äger du en bil?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="ownsCar" type="hidden" value="0"> <input id="switch2" name=
                "ownsCar" type="checkbox" value="1"> <label data-off="NEJ" data-on="JA" for="switch2"></label></label>
              </div>
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Brukar du skriva rim på julklappar?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="doesRhyme" type="hidden" value="0"> <input id="switch3" name=
                "doesRhyme" type="checkbox" value="1"> <label data-off="NEJ" data-on="JA" for=
                "switch3"></label></label>
              </div>
              
              <div class="section">
                <label class="field select"><select id="chocolatePref" name="chocolatePref">
                  <option value="">
                    Välj din favorit av chokladtyper...
                  </option>
                  <option value="milk">
                    Mjölkchoklad
                  </option>
                  <option value="dark">
                    Mörk choklad
                  </option>
                  <option value="white">
                    Vit choklad
                  </option>
                  <option value="none">
                    Inget av dem
                  </option>
                </select> <i class="arrow double"></i></label>
              </div><!-- end section -->
              <div class="section">
                <label class="field select"><select id="candyPref" name="candyPref">
                  <option value="">
                    Välj din favorit av julegodis...
                  </option>
                  <option value="kola">
                    Knäckkola
                  </option>
                  <option value="marsipan">
                    Marsipan
                  </option>
                  <option value="nougat">
                    Nougat
                  </option>
                  <option value="pepparkaka">
                    Pepparkaka
                  </option>
                  <option value="lussekatt">
                    Lussekatt
                  </option>
                  <option value="ischoklad">
                    Ischoklad
                  </option>
                  <option value="ischoklad">
                    Skumtomtar
                  </option>
                  <option value="polkagris">
                    Polkagris
                  </option>
                </select> <i class="arrow double"></i></label>
              </div><!-- end section -->
              <div class="section">
                <label class="field select"><select id="kallePref" name="kallePref">
                  <option value="">
                    Välj din favoritdel av Kalle Ankas Jul...
                  </option>
                  <option value="verkstad">
                    I jultomtens verkstad
                  </option>
                  <option value="kalle-anka">
                    Kalle Anka i djungeln
                  </option>
                  <option value="askungen">
                    Askungen
                  </option>
                  <option value="mussepigg">
                    Musse Pigg på capming
                  </option>
                  <option value="lady-lufsen">
                    Lady och Lufsen
                  </option>
                  <option value="djungelboken">
                    Djungelboken
                  </option>
                  <option value="snovit">
                    Snövit och de sju dvärgarna
                  </option>
                  <option value="ferdinand">
                    Tjuren Ferdinand
                  </option>
                  <option value="robin-hood">
                    Robin Hood
                  </option>
                  <option value="pluto">
                    Plutos julgran
                  </option>
                </select> <i class="arrow double"></i></label>
              </div><!-- end section -->
            </div>
          </div>
        </form>
      </div>
    </div>
  

  
  </section>


  
</body>
</html>