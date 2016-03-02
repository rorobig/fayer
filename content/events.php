<?php 

	$query = "SELECT * from events";
	$result = $mysqli->query($query);
	

 ?>


 <?php 
 	if ($result->num_rows > 0) {
 		while($row = $result->fetch_assoc()) {
 			$date = $row['date'];
 			$description = $row['description'];
 		    echo "<li>
 		    		$date -- $description
 		    	</li>";
 		}
 	} else {
 		echo "no events found.";
 	}
  ?>