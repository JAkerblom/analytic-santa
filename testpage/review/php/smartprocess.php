<?php 

	if (!isset($_SESSION)) session_start(); 
	if(!$_POST) exit;
	
	// Enter your name or company name below
	$receiver_name = "Hello";
	
	// Enter email address below for receiving the form
	// All order messages will be sent there
	$receiver_email = "jonathan.akerblom@ffcg.se";
	
	// Enter email subject below
	// This will be your message subject
	$msg_subject = "New Review";	
	
	$firstname = strip_tags(trim($_POST["firstname"]));	
	$lastname = strip_tags(trim($_POST["lastname"]));
	$email = strip_tags(trim($_POST["email"]));
	$zip = strip_tags(trim($_POST["zip"]));
	$sexType = strip_tags(trim($_POST["sexType"]));
	$age = strip_tags(trim($_POST["age"]));
	$prefersSoftPresents = strip_tags(trim($_POST["prefersSoftPresents"]));
	$prefersSuntrip = strip_tags(trim($_POST["prefersSuntrip"]));
	$prefersDog = strip_tags(trim($_POST["prefersDog"]));
	$santaBelief = strip_tags(trim($_POST["santaBelief"]));
    
    //$santaBelief = strip_tags(trim($_POST["switch1"]));
    $chocolatePref = strip_tags(trim($_POST["chocolatePref"]));
    $candyPref = strip_tags(trim($_POST["candyPref"]));
	$christmasFood = $_POST["christmasFood"];
	if ($christmasFood[0]!=""){
		$christmasFood_list = implode( '<br/>', $christmasFood);
	}
	
	/* CSV FILE SETTINGS
	---------------------------------------------------
	 * Create a csv file named smartcsv.csv
	 * Put the fields you want in the csv in an array
	-------------------------------------------------- */
	$csvFile = "smartcsv.csv";	
	$csvData = array(
		$_POST['firstname'],
		$_POST['lastname'],
		$_POST['email'],
		$_POST['zip'],
		$_POST['age'],
		$_POST['sexType'],
		$_POST['prefersSoftPresents'],
		$_POST['prefersSuntrip'],
		$_POST['prefersDog'],
        $_POST['santaBelief'],
        $_POST['chocolatePref'],
        $_POST['candyPref'],
        $_POST['christmasFood']
	);
	
	/*
	========================================
	Start server side validation
	========================================
	*/ 
	$errors = array();
	 //validate firstname
	if(isset($_POST["firstname"])){
			if (!$firstname) {
				$errors[] = "You must enter your  firstname.";
			} elseif(strlen($firstname) < 2)  {
				$errors[] = "Firstname must be at least 2 characters.";
			}
	}
      //validate firstname
	if(isset($_POST["lastname"])){
			if (!$lastname) {
				$errors[] = "You must enter your lastname.";
			} elseif(strlen($lastname) < 2)  {
				$errors[] = "Firstname must be at least 2 characters.";
			}
	}
	//validate email address
	if(isset($_POST["email"])){
		if (!$email) {
			$errors[] = "You must enter an email.";
		} else if (!validEmail($email)) {
			$errors[] = "Your must enter a valid email.";
		}
	}
	//validate zip number
	if(isset($_POST["zip"])){
			if (!$zip) {
				$errors[] = "You must enter your zip code.";
			} elseif(!preg_match('/^[0-9]+$/', $zip))  {
				$errors[] = "Zip code must include numbers only";
			} elseif(strlen($zip) < 5)  {
				$errors[] = "Zip code must not be less than 5 numbers";
			} elseif(strlen($zip) > 5)  {
				$errors[] = "Zip code must not exceed 5 numbers";
			}
	}	
		
	//validate chocolatePref
	if(isset($_POST["chocolatePref"])){
			if (!$chocolatePref) {
				$errors[] = "Please select a chocolatePref.";
			}
	}
    //validate candyPref
	if(isset($_POST["candyPref"])){
			if (!$candyPref) {
				$errors[] = "Please select a candyPref.";
			}
	}
    //validate santaBelief
	//if(isset($_POST["santaBelief"])){
		//	if (!santaBelief) {
		//		$errors[] = "Please select a santaBelief.";
		//	}
	//}
	//validate christmasFood
	if($christmasFood[0]==''){	
		$errors[] = "Please check at least one option.";
	}	
		
	if ($errors) {
		//Output errors in a list
		$errortext = "";
		foreach ($errors as $error) {
			$errortext .= '<li>'. $error . "</li>";
		}
	
		echo '<div class="alert notification alert-error">The following errors occured:<br><ul>'. $errortext .'</ul></div>';
	
	} else{	
			require "PHPMailerAutoload.php";
			require "smartmessage.php";
				
			$mail = new PHPMailer();
			$mail->isSendmail();
			$mail->IsHTML(true);
			$mail->From = $email;
            //$mail->From = 'jonathan.akerblom@ffcg.se';
			$mail->CharSet = "UTF-8";
			$mail->FromName = $firstname;
			$mail->Encoding = "base64";
			$mail->Timeout = 200;
			$mail->ContentType = "text/html";
			$mail->addAddress($receiver_email, $receiver_name);
			$mail->Subject = $msg_subject;	
			$mail->Body = $message;
			$mail->AltBody = "Use an HTML compatible email client";
					
			// For multiple email recepients from the form 
			// Simply change recepients from false to true
			// Then enter the recipients email addresses
			 echo $message;
			$recipients = false;
			if($recipients == true){
				$recipients = array(
					"jonathan.akerblom@ffcg.se" => "Jonte"
				);
				
				foreach($recipients as $email => $name){
					$mail->AddBCC($email, $name);
				}	
			}
			
			if(!$mail->Send()) {
			  	echo '<div class="alert notification alert-error">Oops! An error occurred!</div>'; 
			} 
			else {
			  	echo '<div class="alert notification alert-success">Congs! Message sent successfully </div>';
				
				/* GENERATE / CREATE THE CSV FILE
				------------------------------------------------------
				 * Give the csv top row headings names in an array 
				------------------------------------------------------*/		
				if (file_exists($csvFile)) {
					$csvFileData = fopen($csvFile, 'a');
					fputcsv($csvFileData, $csvData );
				} else {
					$csvFileData = fopen($csvFile, 'a'); 
					$headerRowFields = array(
						"firstname",
						"lastname",
						"email",
						"zip",
						"age",
						"sexType",
						"prefersSoftPresents",
						"prefersSuntrip",
						"prefersDog",
                        "santaBelief",
                        "chocolatePref",
                        "candyPref",
                        "christmasFood"
					);
					fputcsv($csvFileData,$headerRowFields);
					fputcsv($csvFileData, $csvData );
				}
				fclose($csvFileData);
									  
			}
	}
	
	// ultimate email validation function
	function validEmail($email) {
		$isValid = true;
		$atIndex = strrpos($email, "@");
		if (is_bool($atIndex) && !$atIndex) {
			$isValid = false;
		} else {
			$domain = substr($email, $atIndex + 1);
			$local = substr($email, 0, $atIndex);
			$localLen = strlen($local);
			$domainLen = strlen($domain);
			if ($localLen < 1 || $localLen > 64) {
				// local part length exceeded
				$isValid = false;
			} else if ($domainLen < 1 || $domainLen > 255) {
				// domain part length exceeded
				$isValid = false;
			} else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
				// local part starts or ends with '.'
				$isValid = false;
			} else if (preg_match('/\\.\\./', $local)) {
				// local part has two consecutive dots
				$isValid = false;
			} else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
				// character not valid in domain part
				$isValid = false;
			} else if (preg_match('/\\.\\./', $domain)) {
				// domain part has two consecutive dots
				$isValid = false;
			} else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
				// character not valid in local part unless
				// local part is quoted
				if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
					$isValid = false;
				}
			}
			if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
				// domain not found in DNS
				$isValid = false;
			}
		}
		return $isValid;
	}

?>