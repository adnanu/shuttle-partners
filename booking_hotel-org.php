<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shuttle | Registeration</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "adnan@vellion.co";/* YOUR EMAIL HERE */
						$subject = "Registeration from Shuttle";
						$headers = "From: Shuttle <noreply@hsvttle.co>";
						$message = "DETAILS\n";

						$message .= "\nFirst name: " . $_POST['first_name'];
						$message .= "\nLast name: " . $_POST['last_name'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nPhone: " . $_POST['telephone'];

						$message .= "\nDate Of Birth: " . $_POST['dates'];
						$message .= "\nGender: " . $_POST['gender'];
						$message .= "\nState Of Origin: " . $_POST['sor'];
						$message .= "\nLGA: " . $_POST['lga'];

						$message .= "\nDriving License Number: " . $_POST['license_no'];
						$message .= "\nGLicense Expiry Date: " . $_POST['license_expiry'];
						$message .= "\nVehicle Name: " . $_POST['vehicle_name'];
						$message .= "\nVehicle Type: " . $_POST['vehicle_type'];
						$message .= "\nLicense Image: " . $_POST['driverslicense_image'];

						$message .= "\nVehicle Brand: " . $_POST['vehicle_brand'];
						$message .= "\nVehicle Color: " . $_POST['vehicle_color'];
						$message .= "\nPlate Number: " . $_POST['plate_no'];
						$message .= "\nChassis Number: " . $_POST['chassis_no'];
						$message .= "\nInsurance Number: " . $_POST['insurance_no'];
						$message .= "\nInsurance Expiry: " . $_POST['insurance_expiry'];
						$message .= "\nVehicle Image: " . $_POST['vehicle_image'];

						$message .= "\nG.Full name: " . $_POST['gfull_name'];
						$message .= "\nG.Address: " . $_POST['g_address'];
						$message .= "\nG.Email: " . $_POST['g_email'];
						$message .= "\nG.Phone: " . $_POST['g_phone'];

						// $message .= "\nRoom type: " . $_POST['room_type'];
						// $message .= "\nAdults: " . $_POST['adults'];
						// $message .= "\nChilds: " . $_POST['child'];
						if( isset( $_POST['notes'] ) && $_POST['notes']) {
						$message .= "\nSpecial notes: " . $_POST['notes'];
						}
						
						// $message .= "\nBooking Options:\n" ;
						foreach($_POST['options'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
	
						// $message .= "\nFirst name: " . $_POST['first_name'];
						// $message .= "\nLast name: " . $_POST['last_name'];
						// $message .= "\nEmail: " . $_POST['email'];
						// $message .= "\nTelephone: " . $_POST['telephone'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms']. "\n";
	
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: info@shvttle.co\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly or call us at 09094225454.\n\nBELOW IS A SUMMARY\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>Form successfully submitted!</span>Thank you for your time</h4>
	<h4><span>We will reach back at you soon!!!</span></h4>
	<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>