<?php
	error_reporting(E_ALL^E_DEPRECATED);
	include(lib/register.php)
	ob_start();
	if (isset($_post["submit"])){
		$firstname=$_post["fistname"];
		$lastname=$_post["lastname"];
		$username=$_post["username"];
		$email=$_post["email"];
		$lastname=$_post["lastname"];
		$password=$_post["password"];
		$password=password_hash($password,PASSWORD_DEFAULT);
		
		$database= new DB_SQL;
		$result=$database-> register($firstname,$lastname,$username,$email,$Password);
		
		if ($result==true)
			echo 'your account has been created';
		else{
			echo'error creating your account';
		}
	}else{
	}
?>

<div align="center">
<h1>Register</h1>

<br>
<p>Please fill in </p>
<hr>
<form action="" method="POST">
	<br>
	<label for="">FirstName</label>
	<input type="text" placeholder="FirstName" name="f_name" class="form-control" required/>
	<br>
	<label for="">LastName</label>
	<input type="text" placeholder="LastName" name="l_name" class="form-control" required/>
	<br>
	<label for="">UserName</label>
	<input type="text" placeholder="Username" name="u_name" class="form-control" required/>
	<br>
	<label for="">password</label>
	<input type="password" name="u_pass" placeholder="*******" class="form-control" required/>
	<br>
	<label for="">Email</label>
	<input type="email" name="email" placeholder="Email Adress" class="form-control" required/>
	<br>
	<label for="">Adress</label>
	<input type="text" name="adress" placeholder="Adress" class="form-control" required/>
	<br>
	<select class="form-control"name="Country" placeholder ="Select country" class="form-control"required>
	<option value="AF">Select country</option>
	<br>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="CN">China</option>
	<option value="CO">Colombia</option>
	<option value="CW">Curaçao</option>
	<option value="DO">Dominican Republic</option>
	<option value="NL">Netherlands</option>
	<option value="SR">Suriname</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="VE">Venezuela</option>
	
</select>
<br>
	
	<label for="">Telephone number</label>
	<input type="text" placeholder="Tel" name="tel" class="form-control" required/>
	<br>
	<label for="">Cellphone number</label>
	<input type="text" name="cel" placeholder="Cell" class="form-control" required/>
	<br>




	<button class="btn btn-primary btn-danger">Register</button>
	
</form>
<br>