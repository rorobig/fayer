

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <img src="img/Cheer.jpg">
		      <div class="carousel-caption">

		        
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/College.jpg">
		      <div class="carousel-caption">
		        
		      </div>

		    </div>

		     <div class="item ">
		    <img src="img/Campus.jpg">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>
 			<div class="item ">
		    <img src="img/lib.jpg">
		      <div class="carousel-caption">
		        
		      </div>
		    </div>

		  </div>

		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	
		<div class="row">
			<div class="col-md-3 fayer-img ">
				<a href="prom.php">
					<img src="img/prom.jpg" alt="">
				</a>
				<br>
				<br>
				<p class="box3"><a href="prom.php">Prom 2015 </a></p>
			</div>
			<div class="col-md-3 fayer-img">
				<a href="cf.php">
					<img src="img/football.jpg" alt="">
				</a>
				<br>
				<br>
				<p class="box3"><a href="cf.php">College Football </a></p>
			</div>
			<div class="col-md-3 fayer-img">
				<a href="grad.php">
					<img src="img/gradu.jpg" alt="">
				</a>
				<br>
				<br>
				<p class="box3"><a href="grad.php">Gruaduation 2015</a></p>
			</div>
			<div class="col-md-3 fayer-img">
				<a href="sf.php">
					<img src="img/fair.jpg" alt="">
				</a>
				<br>
				<br>
				<p class="box3"><a href="sf.php" >Science Fair </a></p>
			</div>
		</div>
<hr>

		<div class="academics">
		<h3> Academics </h3>
			<div class="row">
				<div class="col-md-8 ">
				<div class="row">
					<div class="col-md-6 fayer-aca">
					<a href="art_design.php">
						<img src="img/graphic.jpg" alt="">
						<p>School of Art and Design.</p>
						</a>
					</div>

					<div class="col-md-6">
					<a href="legal_studies.php">
						<img src="img/business.jpg" alt="">
						<p>School of Legal Studies</p>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ">
					<a href="tec.php">
						<img src="img/computer.jpg" alt="">
						<p>School of Technology.</p>
						</a>
					</div>

					<div class="col-md-6 ">
					<a href="soc.php">
						<img src="img/health.jpg" alt="">
						<p>School of Healthcare.</p>
						</a>
					</div>
				</div>
				</div>
				<div class="col-md-4">
					<h2> Upcoming Events</h2>
					<ul>
						<?php 
							// prepare the sql query
							$query = "SELECT * from events";
							// run the query and save it in a  result variable
							$result = $mysqli->query($query);
						 ?>


						 <?php 
						 	// if you have more then 1 result frmo your query keep going
						 	if ($result->num_rows > 0) {
						 		// get all the row content (column content) and save it as a row variable
						 		while($row = $result->fetch_assoc()) {
						 			// date is the row with the column name of date
						 			$date = $row['date'];
						 			// same shit for description
						 			$description = $row['description'];
						 			// echo out the date and description like you want in html
						 		    echo "<li>
						 		    		<b>$date</b> -- $description
						 		    	</li>";
						 		}
						 	} else {
						 		// if there was less then 1 result found, return this error.
						 		echo "no events found.";
						 	}
						  ?>
					</ul>
				</div>
			</div>

		</div>
	