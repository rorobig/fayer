 <?php 
$db = ["name" => "fayer_db","username" => "roro","password" => "kwidama"];

$site = ["name" => "fayer university","phone" => "5163196"];

$mysqli=new mysqli("localhost",$db["username"],$db["password"],$db["name"]);
if ($mysqli->connect_errno) {
	# code...
	printf("connect failed %s",$mysqli->connect_error);
}


if (!isset($_SESSION)) {
	session_start();
}else{
	
}


 

 ?>