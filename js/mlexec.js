var prediction = {
 "items": [
  {  
    "itemURL":'',
    "itemPicture":'5d1cc1bec6dacd27535fdce4b59f9627.jpg',
    "itemID":16,
    "itemName":'Popcornmaskin Cinema Style',
    "description":'Med vår biografstylade popcornmaskin finns alltid en näve färska popcorn hemma, liksom en snygg köksapparat som får - nej, ska! - stå mitt i bild.',
    "rating":6.532423
  },
  { 
    "itemURL":'', 
    "itemPicture":'',
    "itemID":'',
    "itemName":'',
    "description":'',
    "rating":''
  },
  { 
    "itemURL":'', 
    "itemPicture":'',
    "itemID":'',
    "itemName":'',
    "description":'',
    "rating":''
  }
  ]
  
};

$(document).ready(function(e) {
  $('#continue').on('click', function(ev) {
    if ($('#smart-form').valid()) {
    /*ev.preventDefault();
    $('.items').css('display', 'none');
    $('.loadcontainer').css('display', 'block');*/
      $('#submit').attr('type','submit');
      doMLexec();
    }
  });
});

//$(document).ready(function(e) {
function doMLexec() {
// Communicate with azure ML services
  var json = buildJSONtoAzure();
  console.log(json);
  json = JSON.parse(json);
  console.log(json);
  $.ajax({
    url: "/analytic-santa/php/mlexec.php",
    //url: "/php/mlexec.php",
    type: "post",
    data: json,
    beforeSend: function() {
      $('.form-footer').hide("slow", function() {
        // Hiding showing buttons
        //$backButton.show("slow");
        $contButton.hide("slow");
        $submButton.show("slow");
        
        $firstPage.hide("slow", function() {
	  var target = document.getElementById('loadBox');
          var spinner = new Spinner(opts).spin(target);
          $loadPage.show();  
        });
      });
      $("html, body").animate({ scrollTop: 0 }, "slow"); 
    },
    success: function(data) { // data arrives as a string
      console.log("This is response from azure: " + data);
      var obj = JSON.parse(data); // Parse to JSON object
      console.log(obj);
      $itemRatings = obj.Results.output1.value.Values;
      console.log($itemRatings);
      var i = 0;
      while (i < 3) {
        $.each(klappar_list["klappar"], function(index, value) {
          if (value['itemID'] == $itemRatings[i][0]) {
            prediction['items'][i]['itemPicture'] = value['itemPicture'];
            prediction['items'][i]['itemID'] = value['itemID'];
            prediction['items'][i]['itemURL'] = value['itemURL'];
            prediction['items'][i]['itemName'] = value['itemName'];
            prediction['items'][i]['description'] = value['description'];
            prediction['items'][i]['rating'] = $itemRatings[i][1];
          }
        });
        i++;
      }
      console.log(prediction);
      
      $klist = prediction["items"];
      $section = $("#itemSection");
      //$items = $(".anItem");
      //console.log($klist);

      $.each($klist, function(index, value) {
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
        //$picPath = "data/items/Images/"+$klist[index]['itemPicture'];
        $title = value['itemName'];
        $descr = value['description'];
        $picPath = "data/items/Images/"+value['itemPicture'];
	$itemURL = value['itemURL'];

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
        $htmlString += '<div class="section colm colm6"><a href="'+$itemURL+'" target="_blank"><img src="'+$picPath+'"></a></div>\n';
        $htmlString += '</div><!-- end frm-row -->\n';
        $htmlString += '</div><!-- end section anItem -->\n';

        $section.append($htmlString);

      });
      
      /*var res = {isBA:$isBA, isBD:$isBD, isBS:$isBS, isBT:$isBT, predicted:$isWhat};
      console.log(res);
      setCookie(JSON.stringify(res), 1);*/
      
      $loadPage.hide();
      $secondPage.show("slow", function() {
          $('.form-footer').show("slow");
      });
    },
    error: function() {
      console.log('an error occurred.');
    }
  });
};


function buildJSONtoAzure() {
  // JSON body parts
  var jsonparts = {
    'start':'{"body":{"Inputs":{"input1":{"ColumnNames":['+
    '"zip","age","sexType","prefersSoftPresents",'+
    '"prefersSuntrip","prefersDog","santaBelief","chocolatePref","candyPref","kallePref",'+
    '"likesFood1","likesFood2","likesFood3","likesFood4","likesFood5","likesFood6","likesFood7",'+
    '"likesFood8","likesFood9","likesFood10","likesFood11","likesFood12"',
    'middle':'],"Values":[[',
    'end':']]}},"GlobalParameters":{}}}'
  };
  // In case if firstname and other variables are needed, this is the start string
/*  'start':'{"body":{"Inputs":{"input1":{"ColumnNames":['+
    '"rating","firstname","lastname","email","zip","age","sexType","prefersSoftPresents",'+
    '"prefersSuntrip","prefersDog","santaBelief","chocolatePref","candyPref","kallePref",'+
    '"likesFood1","likesFood2","likesFood3","likesFood4","likesFood5","likesFood6","likesFood7",'+
    '"likesFood8","likesFood9","likesFood10","likesFood11","likesFood12","itemID","rating"',*/

  $valArr = Array();
  
  $textFields = $('.gui-input');
  $zip = $textFields[3].value;
  $age = $textFields[4].value;
  $sexType = $('input[name="sexType"]:checked').val();
  $prefersSoftPresents = $('input[name="prefersSoftPresents"]:checked').val();
  $prefersSuntrip = $('input[name="prefersSuntrip"]:checked').val();
  $prefersDog = $('input[name="prefersDog"]:checked').val();
  $santaBelief = $('input[name="santaBelief"]').val();
  $chocolatePref = $('select[name="chocolatePref"]').val();
  $candyPref = $('select[name="chocolatePref"]').val();
  $kallePref = $('select[name="chocolatePref"]').val();
  $christmasFood = $('input[name^="christmasFood"]').filter('input[id^="food"]');
  $foodVals = Array();
  $.each($christmasFood, function(index, value) {
    $foodVals.push($christmasFood[index].checked?1:0);
  });
  console.log($christmasFood);
  console.log($foodVals);
  
  /*$items = $('input[name^="items"]:checked');
  //$itemIDs = Array();
  //$itemRatings = Array();
  $ratingPairs = Array();
  
  $.each($items, function(index, value) {
    $jsonVal = $items[index].value; 
    $jsonVal = JSON.parse($jsonVal);
    $ratingPairs.push($jsonVal);
  });
  
  console.log($items);*/
  
  // JSON string start here
  //var cols = jsonparts['start'];
  var vals = '';
  
  vals += '"' + $zip + '", ';
  vals += '"' + $age + '", ';
  vals += '"' + $sexType + '", ';
  vals += '"' + $prefersSoftPresents + '", ';
  vals += '"' + $prefersSuntrip + '", ';
  vals += '"' + $prefersDog + '", ';
  vals += '"' + $santaBelief + '", ';
  vals += '"' + $chocolatePref + '", ';
  vals += '"' + $candyPref + '", ';
  vals += '"' + $kallePref + '", ';
  $.each($foodVals, function(index,value) {
    if (index == $foodVals.length-1) {
      vals += '"' + value + '"';
    } else {
      vals += '"' + value + '", ';  
    }
  });
  
  // Predictor names from (data.json)
  //$mdobj = models.predictors[0];
  //$mdstr = JSON.stringify($mdobj);
  //var i = 1;
  /*$.each($mdobj, function(key, value) {
    start += ', "' + key + '"';
    end += ', ' + ((value['value'])?1:0);
    /*
    start += '"' + key + '"';
    end += value['value'];
    if (i != Object.keys($mdobj).length) {
      start += ', ';
      end += ', ';
    } else {
      // Change depending on Y's
      start += ', "Y"' + jsonparts['middle']
      end += ', 0' + jsonparts['end'];
    }
    i++;
    
  });*/
  
  console.log(prediction);
  
  totalstring = jsonparts['start'] + jsonparts['middle'] + vals + jsonparts['end'];
  return totalstring;
}

/* Spinner options */
var opts = {
  lines: 13 // The number of lines to draw
, length: 18 // The length of each line
, width: 2 // The line thickness
, radius: 18 // The radius of the inner circle
, scale: 1 // Scales overall size of the spinner
, corners: 0 // Corner roundness (0..1)
, color: '#cc231e' // #rgb or #rrggbb or array of colors
, opacity: 0 // Opacity of the lines
, rotate: 0 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 0.9 // Rounds per second
, trail: 94 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, shadow: false // Whether to render a shadow
, hwaccel: false // Whether to use hardware acceleration
, position: 'relative' // Element positioning
, margin: 'auto'
}
