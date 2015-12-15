var prediction = {
 "items": [
  {  
    "itemPicture":'5d1cc1bec6dacd27535fdce4b59f9627.jpg',
    "itemID":16,
    "itemName":'Popcornmaskin Cinema Style',
    "description":'Med vår biografstylade popcornmaskin finns alltid en näve färska popcorn hemma, liksom en snygg köksapparat som får - nej, ska! - stå mitt i bild.',
    "rating":6.532423
  },
  {  
    "itemPicture":'',
    "itemID":'',
    "itemName":'',
    "description":'',
    "rating":''
  },
  {  
    "itemPicture":'',
    "itemID":'',
    "itemName":'',
    "description":'',
    "rating":''
  }
  ]
  
};

//$(document).ready(function(e) {
function doMLexec() {
// Communicate with azure ML services
  var json = buildJSONtoAzure();
  console.log(json);
  json = JSON.parse(json);
  console.log(json);
  $.ajax({
    url: "/analytic-santa/php/mlexec.php",
    //url: "/php/mlexec_amd.php",
    type: "post",
    data: json,
    success: function(data) { // data arrives as a string
      console.log("This is response from azure: " + data);
      var obj = JSON.parse(data); // Parse to JSON object
      console.log(obj);
      $itemRatings = obj.Results.output1.value.Values;
      var i = 1;
      /*while (i <= 3) {
        $.each(klappar_list["klappar"], function(index, value) {
          if (value['itemID'] == $itemRatings[i][0]) {
            prediction[i]['itemPicture'] = value['itemPicture'];
            prediction[i]['itemID'] = value['itemID'];
            prediction[i]['itemName'] = value['itemName'];
            prediction[i]['description'] = value['description'];
            prediction[i]['rating'] = $itemRatings[i][1];
          }
        });
        i++;
      }*/
      
      /*var res = {isBA:$isBA, isBD:$isBD, isBS:$isBS, isBT:$isBT, predicted:$isWhat};
      console.log(res);
      setCookie(JSON.stringify(res), 1);*/
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
    '"likesFood8","likesFood9","likesFood10","likesFood11","likesFood12","rating"',
    'middle':'],"Values":[[',
    'end':'"null"]]}},"GlobalParameters":{}}}'
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
    vals += '"' + value + '", ';
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
