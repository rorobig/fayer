<?php 
	include('../config/config.php');

	$fname= $_POST['fname']; 
	$lname= $_POST['lname'];
	$adress = $_POST['adress'];
	$pnumber= $_POST['pnumber']; 
	$cc= $_POST['cc'];
	$cv = $_POST['cv'];
	$month= $_POST['month']; 
	$year= $_POST['year'];
	$price = $_POST['price'];
	$mail = $_POST['mail'];	
date_default_timezone_set("America/Curacao");
	$date = date("Y-m-d");
	$total = $price;
	$status = 'Order placed';
	
	$query="INSERT INTO order_detail VALUES (null, '$fname','$lname','$mail', '$pnumber','$cc','$cv','$month','$year', '$adress', '$date', '$total', '$status')";


if ($mysqli->query($query) == true) {
		echo "thank you, we've send you a mail  for order confirmation";
		$to = $mail;
		$subject = "FayerUniversity";
		$txt = "Thank you for purchasing at FayerUniversity we hope you enjoy ur purchase ";
		$headers = "From: rocheandley@gmail.com" . "\r\n" .
		"CC:rorobig@live.com";


mail($to,$subject,$txt,$headers);

// Textlocal account details
	$username = 'rorobig@live.com';
	$hash = 'd837496a70feeb23bca99c2333a5e54cf5f7a31e';
	$pnumber= $_POST['pnumber']; 
	// Message details
	$numbers = array($pnumber);
	$sender = urlencode('FayerUNi');
	$message = rawurlencode('Thank you for ordering at fayeruni a thank you mail has been send to you');
 
        $numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	// echo $response;

		header( "refresh:5;url=../courses.php" );
		


	}else{
		echo "error";
		// header( "refresh:2;url=../introduction_to_programing.php" );
	}
 ?>

