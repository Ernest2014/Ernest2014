<?php include('Adminserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gynecologist registration System</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<div class="header">
	<h3> Gynecologist admin registration </h3>
</div>
<form method="post" action="Adminregister.php">
	<!-- dispaly validation errors here-->
	<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register </button>
</div>
<p> If already registered:<a href="Adminlogin.php"> Login </a>
</form>
</body>
</html>