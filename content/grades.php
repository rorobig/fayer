<h3><span class="glyphicons glyphicons-list-numbered"></span> <?php echo $_SESSION['user']['f_name'] ?>           <?php echo $_SESSION['user']['l_name'] ?> Grades list</h3>  
<div class="row">
<div class="col-md-2">
<div class="yellow">
	
</div>
<div class= "blue">
</div>
<br>
<div class= "green">
<h3> Student menu </h3>
<a href="grades.php"><p> Student Grades </p></a>
<!-- <p> Placed Orders </p> -->
<a href="actions/logout.php"><p> Log Out</p></a>




</div>
</div>
<div class="col-md-10">
 <?php 
	// load the config
	include('config/config.php');

	$userId = $_SESSION['user']['id'];

//$selectUsernameQuery= "SELECT * FROM customer,grades  WHERE customer.u_name =grades.user_name ";
$selectUsernameQuery= "SELECT vak.vak_name, grades.cijfer from customer, grades, vak
WHERE customer.id = $userId 
AND 
grades.customer_id = customer.id
AND
vak.vak_id = grades.vak_id;";


	// run the query and save it in a  result variable
							$result = $mysqli->query($selectUsernameQuery);
						 ?>


						 <?php 
						 echo '<table class="table table-bordered">
						 			<thead>
									      <tr>
									        <th>Vak</th>
									        <th>Cijfer</th>
									      </tr>
									    </thead>
									    <tbody>';
						 	// if you have more then 1 result frmo your query keep going
						 	if ($result->num_rows > 0) {
						 		// get all the row content (column content) and save it as a row variable
						 		while($row = $result->fetch_assoc()) {
						 				
						 			$vak = $row['vak_name'];
						 			$cijfer = $row['cijfer'];

						 			

						 		    echo "<tr>
						 		    		<td>$vak</td>
						 		    		<td>$cijfer</td>
						 		    	</tr>";

						 		    	
    




						 		}

						 	} else {
						 		// if there was less then 1 result found, return this error.
						 		echo "no data found.";

						 	}

						 		echo '</tbody>
											</table>';

?>
</div>


</div>
  