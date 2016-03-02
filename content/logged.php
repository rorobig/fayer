
<h3>Hello,<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['f_name'] ?>           <?php echo $_SESSION['user']['l_name'] ?></h3>     
<br>
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
<p> hello  <?php echo $_SESSION['user']['f_name'] ?>  <P>this is your profile, you can see your grades here, placed orders , your profile information and you can change your personal info<p>
</div>


</div>
  