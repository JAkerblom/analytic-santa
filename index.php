<!DOCTYPE html>
<html lang="en">
<head>
  <!-- You can use Open Graph tags to customize link previews.
  Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://analyticsanta.ffcg.se/" />
  <meta property="og:type"          content="Vill du hitta den perfekta presenten till någon?" />
  <meta property="og:title"         content="Analytic Santa - Forefront Consulting Group" />
  <meta property="og:description"   content="En maskininlärningsmodel som lär sig att hitta rätt julklapp för din vän." />
  <meta property="og:image"         content="http://ffcg-analyticsanta.azurewebsites.net/images/predictiveSantaTrans.png" />
  <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
  <title>Analytic Santa - Forefront Consulting Group</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="css/skystyle.css" rel="stylesheet" type="text/css">
  <link href="css/smart-forms.css" rel="stylesheet" type="text/css">
  <link href="css/smart-themes/red.css" rel="stylesheet" type="text/css">
  <link href="css/smart-addons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <!-- Facebook like special styling -->
  <style type="text/css">
    .form-footer .fb-like {
      height: 1em;
      margin-top: 0.4em;
      margin-left: 5px;
    }
    #u_0_8 {
      display:none;
    }
    #u_0_0 * {
      width: 20% !important;
    }
    #fbDiv {
      width: 20% !important;
    }
  </style>

   <!-- Load spinner styling -->
  <style type="text/css">
   #loadBox {
     height: 100px;
   }
  </style>

  <script>
	var klappar_list = 
	{
	  "klappar":
	  [
		{
		"itemURL": "https://www.kitchenlab.se/produkt/skarmaskin-fac/",
		"itemPicture": "2017_02_Skarmaskin.jpg",
		"itemID": 77,
		"itemName": "Skärmaskin",
		"description": "En skärmaskin för livsmedel",
		"price": 5625
		},
		{
		"itemURL": "https://www.systembolaget.se/sok-dryck/?subcategory=Rött%20vin&grapes=%5EZinfandel%24&fullassortment=0",
		"itemPicture": "2017_03_Vin.jpg",
		"itemID": 78,
		"itemName": "Vin",
		"description": "Rött, dyrt och riktigt gott",
		"price": 500
		},
		{
		"itemURL": "https://www.xxl.se/fitbit-activity-fitbit-charge-2-plum-small-traningsarmband/p/1129526_1_style",
		"itemPicture": "2017_04_Pulsklocka.jpg",
		"itemID": 79,
		"itemName": "Fitbit",
		"description": "Ett aktivitetsarmband med pulsmätare",
		"price": 1390
		},
		{
		"itemURL": "http://www.gant.se/dam-tröja/multi-lyocell-polotröja/18366",
		"itemPicture": "2017_05_Troja.jpg",
		"itemID": 80,
		"itemName": "Tröja",
		"description": "En skön tröja att ha på fritiden",
		"price": 799
		},
		{
		"itemURL": "http://www.gant.se/herr-halsduk/grå-solid-lambswool-halsduk/14595",
		"itemPicture": "2017_06_Halsduk.jpg",
		"itemID": 81,
		"itemName": "Halsduk",
		"description": "En halsduk i fint material är alltid stiligt och håller en varm.",
		"price": 599
		},
		{
		"itemURL": "https://www.ahlens.se/Inredning/kok/kastruller-pannor-15030/le-creuset-omelettpanna-toughened-non-stick-20-cm-44432813/",
		"itemPicture": "2017_07_Stekpanna.jpg",
		"itemID": 82,
		"itemName": "Stekpanna",
		"description": "Med hjälp av denna panna, kan alla din mat-drömmar bli sanna",
		"price": 999
		},
		{
		"itemURL": "https://www.presenter.se/varmekudde-rav.html",
		"itemPicture": ".2017_08_Varmekudde.jpg",
		"itemID": 83,
		"itemName": "Värmekudde",
		"description": "En vetekudde som värmer nacken och kan värmas upp i mikron",
		"price": 235
		},
		{
		"itemURL": "https://www.upplevelsepresent.se",
		"itemPicture": "2017_09_Presenkort.jpg",
		"itemID": 84,
		"itemName": "En upplevelse för två",
		"description": "Ett presentkort med fritt val av upplevelse",
		"price": 500
		},
		{
		"itemURL": "https://se.anovaculinary.com/",
		"itemPicture": "2017_11_Sous vide.jpg",
		"itemID": 85,
		"itemName": "Sous-vide cirkulator",
		"description": "Håller vatten i rätt temperatur så att maten blir perfekt tillagad",
		"price": 1599
		},
		{
		"itemURL": "https://www.ahlens.se/Skonhet/professionell-harvard/stylingverktyg-274883/ghd-gold-classic-styler-89210522/?gclid=EAIaIQobChMIvf-L7orn1wIVS8-yCh3W2gzrEAQYCyABEgIjd_D_BwE",
		"itemPicture": "2017_12_Hartang.jpg",
		"itemID": 86,
		"itemName": "Plattång",
		"description": "Verktyg för att platta håret.",
		"price": 1799
		},
		{
		"itemURL": "https://www.dustin.se/product/5011035956/thinkcentre-m710q-tiny",
		"itemPicture": "2017_13_Media server.jpg",
		"itemID": 87,
		"itemName": "Mediaserver",
		"description": "Liten smidig dator att ha till mediaserver",
		"price": 4599
		},
		{
		"itemURL": "https://www.gucci.com/se/en_gb/pr/women/handbags/womens-shoulder-bags/padlock-small-gucci-signature-shoulder-bag-p-409487CWC1G6433?position=7&listName=undefined&categoryPath=Women/Handbags/Womens-Shoulder-Bags",
		"itemPicture": "2017_14_Vaska.jpg",
		"itemID": 88,
		"itemName": "Väska",
		"description": "En riktigt dyr och snygg väska som riktigt snälla personer förtjänar ",
		"price": 15000
		},
		{
		"itemURL": "https://www.ahlens.se/Herr/byxor-jeans-103489",
		"itemPicture": "2017_16_Byxor.jpg",
		"itemID": 89,
		"itemName": "Kostymbyxor",
		"description": "Kostymbyxor till en kavaj",
		"price": 1000
		},
		{
		"itemURL": "https://www.proshop.se/Rakapparat/Braun-Series-5-5050cc-CCR2/2517654?utm_source=prisjakt&utm_medium=cpc&utm_campaign=pricesite",
		"itemPicture": "2017_17_Rakapparat.jpg",
		"itemID": 90,
		"itemName": "En rakapparat",
		"description": "För att trimma sitt skägg",
		"price": 500
		},
		{
		"itemURL": "https://www.snowinn.com/skidor/lenz-set-lithium-pack-700---heat-sock-3.0/662066/p?utm_source=google_products&utm_medium=merchant&id_producte=1028636&country=se&gclid=CjwKCAiA9f7QBRBpEiwApLGUiuJ4PqiJw_vHPioZ01m-4LEXl5pDEot7GQHRs4dh3IjB11si0wF4pRoC18IQAvD_BwE&gclsrc=aw.ds",
		"itemPicture": "2017_18_Strumpor.jpg",
		"itemID": 91,
		"itemName": "Värmestrumpor",
		"description": "Sportstrumpor med batteridriven eluppvärmning för frusna fötter på cykel eller skidor",
		"price": 1645
		},
		{
		"itemURL": "https://www.dustin.se/product/5011014836/chromecast-ultra",
		"itemPicture": "2017_19_Chromecast.jpg",
		"itemID": 92,
		"itemName": "Google Chromecast ultra",
		"description": "Puck för att streama 4k-film på TV, styrs av Android/Iphone/laptop.",
		"price": 635
		},
		{
		"itemURL": "https://www.netonnet.se/art/hem-hushall/smarta-hem/hemautomatisering/philipshue/philips-hue-kit-e27-farg-10w/247471.14004/?utm_source=philip.se&utm_medium=leads&utm_content=where-to-buy&utm_campaign=philips-where-to-buy&_ref=ca-wtb&_refv=955c933d-b4b0-4618-8be2-ff3f4293628b",
		"itemPicture": "2017_20_Belysning.jpg",
		"itemID": 93,
		"itemName": "Smart belysning",
		"description": "Smart belysning",
		"price": 1899
		},
		{
		"itemURL": "https://www.bose.se/sv_se/products/headphones/over_ear_headphones/quietcomfort-25-acoustic-noise-cancelling-headphones-apple-devices.html#v=qc25_black",
		"itemPicture": "2017_21_Horlurar.png",
		"itemID": 94,
		"itemName": "Brusreducerande hörlurar",
		"description": "Hörlurar för att lyssna på musik som också tar bort ljudet från omgivningen. Slipp störa dig på snubben bredvid som pumpar dubstep på högsta volym!",
		"price": 2199
		},
		{
		"itemURL": "https://www.gear4music.se/sv/Inspelning-and-datorer/Tascam-DR-44WL-handhallen-inspelare-med-WiFi/141H",
		"itemPicture": "2017_22_Ljudinspelare.jpg",
		"itemID": 95,
		"itemName": "En ljudinspelare",
		"description": "En handhållen ljudinspelare för musik",
		"price": 2800
		},
		{
		"itemURL": "https://www.raddabarnen.se",
		"itemPicture": "2017_23_RaddaBarnen.png",
		"itemID": 96,
		"itemName": "En gåva till välgörenhet",
		"description": "Exempelvis rädda barnen",
		"price": 500
		},
		{
		"itemURL": "https://yasuragi.se/badet/badkort/",
		"itemPicture": "2017_24_Badkort.jpg",
		"itemID": 97,
		"itemName": "Ett badkort på Yasuragi",
		"description": "Ett klippkort på Yasuragi med tio klipp där man får ta med en gäst (för ett extra klipp).",
		"price": 3000
		},
		{
		"itemURL": "https://www.apple.com/se/watch/",
		"itemPicture": "2017_26_AppleWatch.png",
		"itemID": 98,
		"itemName": "En Apple Watch",
		"description": "En smartklocka för alla som inte orkar ta upp telefonen för att läsa sms",
		"price": 3695
		},
		{
		"itemURL": "https://www.sonos.com/sv-se/shop/one.html",
		"itemPicture": "2017_27_SonosOne.png",
		"itemID": 99,
		"itemName": "En Sonos One",
		"description": "Liten och snygg högtalare för hemmet med trådlös styrning. ",
		"price": 2500
		},
		{
		"itemURL": "https://www.apple.com/se/iphone-x/",
		"itemPicture": "2017_28_IphoneX.jpg",
		"itemID": 100,
		"itemName": "En iPhone x",
		"description": "En telefon av senaste modell. Must have!",
		"price": 11495
		},
		{
		"itemURL": "https://www.rum21.se/sv/artiklar/nattlampan-fotogenlampa-blanc.html?gclid=Cj0KCQiAgZTRBRDmARIsAJvVWAuFMC_2JrzB3zPb422u_wwkmUnHodfC57hwCB6Q_minuRwJZZEJamgaAkxKEALw_wcB",
		"itemPicture": "2017_29_Oljelampa.jpg",
		"itemID": 101,
		"itemName": "En oljelampa",
		"description": "En oljelampa i mässing",
		"price": 928
		},
		{
		"itemURL": "https://www.akademibokhandeln.se/bok/river-cottage-much-more-veg/9781408869000/",
		"itemPicture": "2017_30_kokbok.jpg",
		"itemID": 102,
		"itemName": "En kokbok",
		"description": "Ny vegetarisk kokbok av min favoritkock",
		"price": 300
		},
		{
		"itemURL": "https://www.grandpastore.com/en/product/4786/indigo-oxford-dark-indigo",
		"itemPicture": "2017_32_Skjorta.jpg",
		"itemID": 103,
		"itemName": "En skjorta",
		"description": "Skjorta med button down så du kan vara stilig både på jobbet och på galej",
		"price": 1000
		},
		{
		"itemURL": "https://shop.lego.com/en-SE/Creative-Box-10704",
		"itemPicture": "2017_33_Lego.png",
		"itemID": 104,
		"itemName": "Lego",
		"description": "Klossar man sätter ihop till något magnifikt",
		"price": 399
		},
		{
		"itemURL": "https://www.ahlens.se/Skonhet/ansikte/presentaskar-set-15245/elizabeth-arden-eight-hour-cream-original-set-89792343/",
		"itemPicture": "2017_34_Skonhetsprodukter.jpg",
		"itemID": 105,
		"itemName": "Lyxiga skönhetsprodukter",
		"description": "Extra kärlek för min hud",
		"price": 410
		},
		{
		"itemURL": "https://new.webhallen.com/se/product/270730-Nintendo-Basenhet-SNES-Classic-Mini-Edition",
		"itemPicture": "2017_35_SNES.jpg",
		"itemID": 106,
		"itemName": "SNES Classic",
		"description": "Retro gaming konsoll, för Supernintendo",
		"price": 1590
		},
		{
		"itemURL": "https://www.kitchenlab.se/produkt/ankarsrum-assistent-original-creme-light-akm6230-cl-ankarsrum-original/",
		"itemPicture": "2017_36_KitchenAssistant.jpg",
		"itemID": 107,
		"itemName": "Matberedare",
		"description": "En maskin för att underlätta bakning och matlagning.",
		"price": 6000
		},
		{
		"itemURL": "https://steamery.se/produkter/147/vackrare-klader-med-anga-cirrus-no-2-steamer-steamery",
		"itemPicture": "2017_37_TravelSteamer.jpg",
		"itemID": 108,
		"itemName": "En travel steamer",
		"description": "Steamer för skrynkelfria kläder. ångan jämnt över tyget så att alla skrynklor försvinner.",
		"price": 1100
		},
		{
		"itemURL": "https://www.bauhaus.se/sticksag-18v-ryobi-r18js-0-one.html?gclid=EAIaIQobChMIza6yyeXy1wIVx5AYCh17MQEcEAQYASABEgJMofD_BwE",
		"itemPicture": "2017_39_Sticksag.jpg",
		"itemID": 109,
		"itemName": "En sticksåg",
		"description": "Eldriven sticksåg Ryobi R18JS-0",
		"price": 849
		},
		{
		"itemURL": "https://www.happysocks.com/eu/mix-gift-box.html",
		"itemPicture": "2017_40_happysocks.jpg",
		"itemID": 110,
		"itemName": "Strumpor",
		"description": "En giftbox med olika Happy Socks. När ett par strumpor inte är nog!",
		"price": 849
		}
	  ]
	}
  </script>
  <script src="js/load-image.all.min.js"></script>
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <!--<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>-->

  <script src="js/jquery.form.min.js" type="text/javascript"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="js/additional-methods.min.js" type="text/javascript"></script>
  <script src="js/smart-form.js" type="text/javascript"></script>
  <script src="js/jquery.stepper.min.js" type="text/javascript"></script>
  <script src="js/mlexec.js" type="text/javascript"></script>
  <script src="js/spin.min.js" type="text/javascript"></script>
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
  <script>$(document).ready(function() {$('#fbDiv').find('table').css('width','30%')});</script>

  <!--[if lte IE 9]>
    <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
  <![endif]--><!--[if lte IE 8]>
    <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
  <![endif]-->
  <!--[if IE]>
    <style type="text/css">
      div.section img {padding-left:0px;}
    </style>
<![endif]-->
</head>
<body class="christmasbg">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '395907563951690',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  <section class="sky">
    <div class="smart-wrap">
<div class="logo">

</div>
      <div class="smart-forms smart-container wrap-3">
        <div class="frm-row">
          <div class="section colm colm12"> <!-- colm6 ger 50% -->
            <a href="http://ffcg.se" target="_blank"><img src="images/forefront-logo.png" alt="Forefront Consulting Group" style="max-width:50%; display:block; margin-left:auto; margin-right:auto;margin-top:15px;"></a>
          </div>
        </div>
        <div class="form-header header-red header-primary" id="header">
	  <img src="images/predictiveSantaTrans.png" alt="logo" style="max-width:50%; display:block; margin-left:auto; margin-right:auto;margin-top:10px;margin-bottom:15px;"/>
          <h4 style="text-align:center !important;" id="h4_header"><i class="fa fa-gift"></i>Jag hjälper dig <br>hitta julklapp!</br></h4>
        </div><!-- end .form-header section -->
        <form action="php/smartprocess.php" id="smart-form" method="post" name="smart-form">
          <div class="form-body theme-red" id="section-1">
            <div class="spacer-b10">
              <div class="tagline" style="margin-bottom: 10pt; padding-bottom:15pt">
                <span style="font-size : 16pt; margin-bottom: 10pt; padding-bottom:15pt">Vem är julklappen till?</span>
              </div><!-- .tagline -->

            <!--<div class="spacer-b30"></div>-->
            <!--
            <div class="frm-row">
              <div class="section colm colm6 breakline">
                 <label class="field prepend-icon" for="firstname"><input class="gui-input" id="firstname" name=
                "firstname" placeholder="Förnamn..." type="text"> <label class="field-icon"><i class=
                "fa fa-user"></i></label></label>
              </div>
              <div class="section colm colm6 breakline">
                 <label class="field prepend-icon" for="lastname"><input class="gui-input" id="lastname" name=
                "lastname" placeholder="Efternamn..." type="text"> <label class="field-icon"><i class=
                "fa fa-user"></i></label></label>
              </div>
            </div>
            <div class="frm-row">
              <div class="section colm colm8 breakline">
                <label class="field prepend-icon" for="email"><input class="gui-input" id="email" name="email"
                placeholder="Emailadress" type="email"> <b class="tooltip tip-left-bottom"><em>Emailen kommer <strong>endast</strong> användas för att få fram bättre
                julklappar.</em></b><label class="field-icon"><i class=
                "fa fa-envelope"></i></label></label>
              </div> -->
            <div class="frm-row">
	      <div class="section colm colm1" style="padding-left:0px;margin-left:3%;">
                <p>Ålder:</p>
              </div>
              <div class="section colm colm1-5" id="agediv">
                <label class="field"><!--<input type="text" name="age" id="stepper1" value="30" class="gui-input">-->
                <input class="gui-input" max="100" min="0" name="age" step="1" type="number" value="30" pattern="[0-9]*" inputmode="numeric"></label>
              </div><!-- end section -->
	      <div class="section colm colm3" style="padding-left:0px;width:20%;">
                <p>Postnummer:</p>
              </div>
              <div class="section colm colm4 breakline">
                <label class="field prepend-icon" for="zip"><input class="gui-input" id="zip" name="zip" placeholder=
                "Postnr" type="text" pattern="[0-9]*" inputmode="numeric"> <b class="tooltip tip-right-bottom"><em>Postnummeret används för att få fram
                olika demografiska data.</em></b> <label class="field-icon" for="zip"><i class=
                "fa fa-building-o"></i></label></label>
              </div><!-- end section -->
            </div>

            <div class="frm-row">
              <div class="section colm colm8 breakline" style="margin-top: 5px;">
                <label class="option option-red"><input checked name="sexType" type="radio" value="female" tabindex="5"><span class=
                "radio"></span> Kvinna</label> <label class="option option-red"><input name="sexType" type="radio"
                value="male"><span class="radio"></span> Man</label> <label class="option option-red" style=
                "margin-left:10px;"><input name="sexType" type="radio" value="otherGender"><span class="radio"></span>
                ------</label>
              </div><!-- end section -->
              <!--<div class="section colm colm1" style="padding-left:0px;">
                <p>Ålder:</p>
              </div>
              <div class="section colm colm1-5" id="agediv">
                <label class="field"><!--<input type="text" name="age" id="stepper1" value="30" class="gui-input">-->
                 <!--<input class="gui-input" max="100" min="0" name="age" step="1" type="number" value="30" pattern="[0-9]*" inputmode="numeric"></label>
              </div><!-- end section -->
            </div>
            </div><!-- PrefersSoftPresents -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">Personen föredrar klappar:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersSoftPresents" type="radio" value=
                "0" tabindex="7"><span class="radio"></span> Hårda</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersSoftPresents" type="radio" value="1"><span class=
                "radio"></span> Mjuka</label>
              </div>
            </div><!-- PrefersSuntrip -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">På semester åker personen helst till:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersSuntrip" type="radio" value=
                "1" tabindex="8"><span class="radio"></span> Sol</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersSuntrip" type="radio" value="0"><span class=
                "radio"></span> Snö</label>
              </div>
            </div><!-- PrefersDog -->
            <div class="frm-row">
              <div class="section colm colm6">
                <p style="margin:0;margin-top:6px;">Som husdjur föredrar personen:</p>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input checked name="prefersDog" type="radio" value="1" tabindex="9"><span class=
                "radio"></span> Hund</label>
              </div>
              <div class="section colm colm3">
                <label class="option option-red"><input name="prefersDog" type="radio" value="0"><span class=
                "radio"></span> Katt</label>
              </div>
            </div><!-- SantaBelief -->
            <div class="frm-row">
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Tror personen på tomten?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="santaBelief" type="hidden" value="0"> <input id="switch1"
                name="santaBelief" type="checkbox" value="1"> <label data-off="NEJ" data-on="JA" for=
                "switch1" tabindex="10"></label></label>
              </div>
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Äger personen en bil?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="ownsCar" type="hidden" value="0"> <input id="switch2" name=
                "ownsCar" type="checkbox" value="1" tabindex="11"> <label data-off="NEJ" data-on="JA" for="switch2"></label></label>
              </div>
              <div class="section colm colm9">
                <p style="margin:0;margin-top:5px;">Brukar personen skriva rim på julklappar?</p>
              </div>
              <div class="section colm colm2">
                <label class="switch block"><input name="doesRhyme" type="hidden" value="0"> <input id="switch3" name=
                "doesRhyme" type="checkbox" value="1" tabindex="12"> <label data-off="NEJ" data-on="JA" for=
                "switch3"></label></label>
              </div>
            </div>
            <div class="section">
              <label class="field select"><select id="chocolatePref" name="chocolatePref">
                <option value="">
                  Personens favorit-chokladtyp..
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
              </select> <i class="arrow"></i></label>
            </div><!-- end section -->
            <div class="section">
              <label class="field select"><select id="candyPref" name="candyPref">
                <option value="">
                  Personens favorit-julegodis..
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
              </select> <i class="arrow"></i></label>
            </div><!-- end section -->
            <div class="section">
              <label class="field select"><select id="kallePref" name="kallePref">
                <option value="">
                  Favorit på Kalle Ankas Jul..
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
                  Musse Pigg på camping
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
              </select> <i class="arrow"></i></label>
            </div><!-- end section -->
            <div class="spacer-b20">
              <label class="field-label">Vilka av följande ingredienser tycker personen är gott att äta på julbordet?</label>
            </div>
            <div class="frm-row">
              <div class="option-group field">
                <div class="section colm colm6">
                  <label class="option option-red block spacer-b10" for="food1">
                    <input type="hidden" name="christmasFood[0]" value="0">
                    <input type="checkbox" name="christmasFood[0]" value="1" tabindex="16" id="food1">
                    <span class="checkbox"></span> Köttbullar
                  </label>

                  <label class="option option-red block spacer-b10" for="food2">
                    <input type="hidden" name="christmasFood[1]" value="0">
                    <input type="checkbox" name="christmasFood[1]" value="1" id="food2">
                    <span class="checkbox"></span> Prinskorv
                  </label>

                  <label class="option option-red block spacer-b10" for="food3">
                    <input type="hidden" name="christmasFood[2]" value="0">
                    <input type="checkbox" name="christmasFood[2]" value="1" id="food3">
                    <span class="checkbox"></span> Skinka
                  </label>

                  <label class="option option-red block spacer-b10" for="food4">
                    <input type="hidden" name="christmasFood[3]" value="0">
                    <input type="checkbox" name="christmasFood[3]" value="1" id="food4">
                    <span class="checkbox"></span> Lutfisk
                  </label>

                  <label class="option option-red block spacer-b10" for="food5">
                    <input type="hidden" name="christmasFood[4]" value="0">
                    <input type="checkbox" name="christmasFood[4]" value="1" id="food5">
                    <span class="checkbox"></span> Ägg
                  </label>

                  <label class="option option-red block" for="food6">
                    <input type="hidden" name="christmasFood[5]" value="0">
                    <input type="checkbox" name="christmasFood[5]" value="1" id="food6">
                    <span class="checkbox"></span> Lax
                  </label>
                </div><!-- end section -->
                <div class="section colm colm6" id="rightCheckboxes">
                  <label class="option option-red block spacer-b10" for="food7">
                    <input type="hidden" name="christmasFood[6]" value="0">
                    <input type="checkbox" name="christmasFood[6]" value="1" id="food7">
                    <span class="checkbox"></span> Sill
                  </label>

                  <label class="option option-red block spacer-b10" for="food8">
                    <input type="hidden" name="christmasFood[7]" value="0">
                    <input type="checkbox" name="christmasFood[7]" value="1" id="food8">
                    <span class="checkbox"></span> Brysselkål
                  </label>

                  <label class="option option-red block spacer-b10" for="food9">
                    <input type="hidden" name="christmasFood[8]" value="0">
                    <input type="checkbox" name="christmasFood[8]" value="1" id="food9">
                    <span class="checkbox"></span> Röd/brunkål
                  </label>

                  <label class="option option-red block spacer-b10" for="food10">
                    <input type="hidden" name="christmasFood[9]" value="0">
                    <input type="checkbox" name="christmasFood[9]" value="1" id="food10">
                    <span class="checkbox"></span> Janssons
                  </label>

                  <label class="option option-red block spacer-b10" for="food11">
                    <input type="hidden" name="christmasFood[10]" value="0">
                    <input type="checkbox" name="christmasFood[10]" value="1" id="food11">
                    <span class="checkbox"></span> Sylta
                  </label>

                  <label class="option option-red block" for="food12">
                    <input type="hidden" name="christmasFood[11]" value="0">
                    <input type="checkbox" name="christmasFood[11]" value="1" id="food12">
                    <span class="checkbox"></span> Potatis
                  </label>
                </div><!-- end section -->
              </div><!-- end option-group section -->
            </div><!-- end .frm-row section -->
          </div><!-- end .form-body section -->

          <div class="form-body theme-red" id="section-2" style="display:none;">

            <div class="spacer-b10">
              <div class="tagline">
                <span style="font-size : 16pt">Julklappsutdelning!</span>
              </div><!-- .tagline -->
            <div class="price-box" style="margin-top:20px">
            <p> Här är tre klappar som jag tror skulle vara bra.
			<br>Tryck på bilderna för att komma till mina verkstäder för mer information om dem.</br>
<br> Ge mig gärna poäng via stjärnorna så kommer jag göra det ännu bättre nästa gång.</br></p>
              <p class="small-text fine-grey"><strong>1 stjärna </strong>= Inte riktigt rätt. <br><strong>6 stjärnor </strong>= Spot on!</br></p>
            </div>
            </div>

            <div id="itemSection"></div><!-- end itemSection -->
          </div>
          <div class="form-body theme-red" id="section-3" style="display:none;">
            <div class="spacer-b40">
              <div class="tagline">
                <span style="font-size: 16pt">Analytic Santa önskar dig en riktigt God Jul!</span>
              </div><!-- .tagline -->
            </div>
            <div class="spacer-b30"></div>
              <!--<div class="tagline">-->
            <div class="frm-row">
              <!--<div class="section colm col2"></div>-->
              <div class="section"><img src="images/predictiveSantaWhite.jpg" alt="Mountain View" style="max-width: 110%;margin-left: auto;margin-right: auto;display: block;margin-top: 10px;margin-left: -5%;padding-left: 1px;margin-top:30px;"><!--width:304px;height:228px;--></div>
              <!--<div class="section colm col2"></div>-->
            </div>
<!-- Your like button code -->
        <div class="fb-like"
            data-href="http://ffcg-analyticsanta.azurewebsites.net/"
            data-layout="standard"
            data-action="like"
            data-share="true"
            data-show-faces="false">
        </div>
          </div>
          <div class="form-body theme-red" id="section-load" style="display:none;">
	    <div class="section spacer-b30" style="text-align: center;width:100%; font-style:italic;">Vänta en stund medan jag kollar den globala önskelistan! <br>Det brukar ta lite mer än 30 sekunder.</br></div>
            <div class="section spacer-b30" id="loadBox"></div>
          </div>

          <div class="form-footer">
            <button class="button btn-red pushed btn-primary" id="continue" type="button">Hitta julklappar!</button>
            <button class="button btn-red pushed btn-primary" id="submit" type="button">Hjälp mig bli bättre på att gissa julklappar!</button>
        <!-- Your like button code -->
           <!-- <div class="frm-row">
              <div class="section colm colm5">
                <div class="fb-like">-->
            <div class="frm-row">
              <div class="section colm colm5" style="margin-bottom:0px;">
                <div id="fbDiv" class="fb-like"
                  data-href="http://ffcg-analyticsanta.azurewebsites.net/"
                  data-layout="standard"
                  data-action="like"
                  data-share="true"
                  data-show-faces="false">
                </div>
              </div>
            </div>
           <!-- <div class="fb-like" 
              data-href="http://ffcg-analyticsanta.azurewebsites.net/" 
              data-layout="standard" 
              data-action="like" 
              data-share="true"
              data-show-faces="false">
            </div>-->
          </div><!-- end .form-footer section -->
        </form>
      </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    <script src="js/snow.js" type="text/javascript">
    </script>
  </section>
</body>
</html>
