<?php
if (isset($_POST['submit'])) {
	$username = htmlentities($_POST['username']);

	setcookie('username', $username, time() + 3600);

	header('Location: page2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookies</title>
	<link rel='stylesheet' href='https://bootswatch.com/4/cosmo/bootstrap.min.css'>

</head>

<body>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="username" placeholder="Enter Username">
			<input type="submit" name="submit" value='Submit'>
		</form>
	</div>
</body>

</html>