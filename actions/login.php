<?php 
	// load the config
	include('../config/config.php');

	$username =$_POST['username'];
	$password = $_POST['password'];

$selectUsernameQuery= "SELECT * FROM customer  WHERE u_name ='$username'";
   
$selectUsernameQueryResult = $mysqli ->query($selectUsernameQuery);
if  ($selectUsernameQueryResult->num_rows >0) {
     // user exists 
 $userExists = true;
 }else{
 $userExists = false;
 }  

 if ($userExists){
// -- check if username fayer
 	$row= $selectUsernameQueryResult -> fetch_assoc();
 	$username = $row['u_name'];
 	// $role = $row['user_role'];
 	$userId = $row['u_id'];
 	$userEmail = $row['email'];
 	$userpassword = $row['u_pass'];
 	$firstname = $row['f_name'];
 	$lastname = $row['l_name'];

 	$id = $row['id'];
 	
 	if (password_verify ($password, $userpassword)){
 		echo 'password is valid!';
   header("Location: ../logged.php");
   
   $_SESSION['user'] = ['authenticated' =>true, 'user_name' => $username,'user_id' => $userId, 'id' => $id, 'user_email' => $userEmail, 'f_name' => $firstname, 'l_name' => $lastname];

   // $_SESSION['user'] = ['authenticated' =>true, 'user_name' => $username,'user_id' => $userId, 'user_email' => $userEmail, 'role' => $role];
 		
	} else{
		// echo "invalid password.";
		// $_SESSION['message'] = "Error: Invalid Password";
		header('Location: ../studentsystem.php');
	}


}else{
	//display login error page
	// echo "user does not exist";
	// $_SESSION['message'] = "Error: User does not exists";
	header('Location: ../studentsystem.php');
}





   // header("Location: ../logged.php");
  


 
?>