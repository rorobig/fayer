<div class="row">
	<form action="actions/checkout.php" method="POST">
		<div class="col-md-6">
			<h3> Customer information </h3>
			<label for="">First Name</label>
			<input type="text" name="fname" class="form-control" required>
			<br>
			<label for="">Last Name</label>
			<input type="text" name="lname" class="form-control" required>
			<br>
			<label for="">Email</label>
			<input type="email" name="mail" class="form-control" required>
			<br>
			<label for="">Adress</label>
			<input type="text" name="adress" class="form-control" required>
			<br>
			<label for="">Phone number</label>
			<input type="number " name="pnumber" class="form-control" required>
			<div class="row">
				<div class="col-md-6 no-left-padding">
					<label for="">Credit Card</label>
					<input style="width: 250px" name="cc" type="number" class="form-control" required>
					<i class="fa  fa-cc-visa fa-2x"></i> 
					<i class="fa fa-cc-mastercard fa-2x"></i> 
					
				</div>
				<div class="col-md-6 no-left-padding">
					<label for="">CV</label>
					<input style="width: 150px" name="cv" type="text" class="form-control" required>
					
					
				</div>
			</div>
			<h4>Expire Date </h4>
			<div class="row">
				<div  class="col-md-6 no-left-padding">
					<label for="">Month</label>
					<select style="width: 200px" name="month" id="" class="form-control " required>
						<option value="Jan">January</option>
						<option value='Feb'>February</option>
						<option value='Mar'>March</option>
						<option value='Apr'>April</option>
						<option value='May'>May</option>
						<option value='Jun'>June</option>
						<option value='Jul'>July</option>
						<option value='Aug'>August</option>
						<option value='Sep'>September</option>
						<option value='Oct'>October</option>
						<option value='Nov'>November</option>
						<option value='Dec'>December</option>
					</select>
				</div>
				<div  class="col-md-6 no-left-padding">
					<label for="">Year</label>
					<select style="width: 200px" name="year" id="" class="form-control " required>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
					</select>
				</div>
			</div>
			<br>
			<?php 
				$query  = "SELECT p_price from product where link = 'introduction_to_ms_outlook'";
				$result = $mysqli->query($query);
				 	if ($result->num_rows > 0) {
				 		$row = $result->fetch_assoc();
				 		$price = $row['p_price'];

				 	} else {
				 		echo "ERRO GETTING PRICE";
				 	}

				 	echo '<input type="hidden" name="price" value="'.$price.'">';
			 ?>

			<button type="submit" class="btn btn-primary" onclick="cardnumber(document.form1.cc) ">Buy now</button>
		</form>
		
		
	</div>
	<div class="col-md-6">
		<div class = "item">
			<center><h3> Order Summary </h3></center>
			<center><img src="img/outlook.jpg"></center>
			<br>
			<br>
			<?php 
				$query  = "SELECT p_price from product where link = 'introduction_to_ms_outlook'";
				$result = $mysqli->query($query);
				 	if ($result->num_rows > 0) {
				 		$row = $result->fetch_assoc();
				 		$price = $row['p_price'];

				 	} else {
				 		echo "WE GOT AN ERROR";
				 	}

				 	echo '<p>Item : $ '.$price.'</p>';

			 ?>
			<hr>
			<p>Total before tax:  $ 63.34 </p>
			<p>Estimated tax to be collected:	$3.60 </p>
			<hr>
			<p>Order total : $66.94</p>
		</div>
	</div>
	<br>
	<br>
	
</div>