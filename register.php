<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	   <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="regsStyle.css">
</head>
		<h4 class="heading"><strong> CRAMS </strong> Collaborative Research Articles Management System  <span></span> </h4>

<body>
	<div class="header">
	
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
<div class="form">
	          <img src="Register.png" class="resize"> <br/>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">login</a>
		</p>
	</div>


<footer>&copy; Copyright 2017 Group 08 </footer>
	
	</form>
</body>
</html>
