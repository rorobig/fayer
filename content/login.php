<?php include('../config/config.php') ?>

<h1>Login</h1>
<br>
<form action="actions/login.php" method="POST">
	<label for="">Username</label>
	<input type="text"  placeholder="username" name="username" class="form-control" required/>
	<br>
	<label for="">Password</label>
	<input type="password" placeholder="******" name="password" class="form-control" required/>
	<br>
	

	<button class="btn btn-primary ">Log in</button>
	<a href="#">Not yet a member</a>
</form>

</script>
</head>
<body>
