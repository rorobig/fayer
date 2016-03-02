<?php 
	include('../config/config.php');

	$userid= $_POST['u_id']; 
	$username= $_POST['u_name'];
	$password = $_POST['u_pass'];
	$password= password_hash($password , PASSWORD_DEFAULT);
 	$lastname	= $_POST['l_name'];
 	$firstname = $_POST['f_name'];
 	
	$adress = $_POST['adress'];
	$country= $_POST['Country'];
 	$tel = $_POST['tel']; 
	$cel= $_POST['cel'];
	
	// new
	$email = $_POST['email'];



	$query="INSERT INTO customer VALUES (null, '$userid','$username','$password','$lastname','$firstname','$email','$adress','$country','$tel','$cel')";

	// echo $query;
// Textlocal account details
	$username = 'rorobig@live.com';
	$hash = 'd837496a70feeb23bca99c2333a5e54cf5f7a31e';
	$tel= $_POST['tel']; 
	// Message details
	$numbers = array($tel);
	$sender = urlencode('FayerUNi');
	$message = rawurlencode('');
 
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
	echo $response;
	if ($mysqli->query($query) == true) {
		echo "query success";
		header( "refresh:2;url=../studentsystem.php" );
	}else{
		echo "error";
		header( "refresh:2;url=../register.php" );
	}
 ?>