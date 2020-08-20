<?php
if (isset($_POST['submit'])) {
	session_start(); // Start the session

	$_SESSION['name'] = htmlentities($_POST['name']);
	$_SESSION['email'] = htmlentities($_POST['email']);
	// $_SESSION['message'] = htmlentities($_POST['message']);

	header('location: page2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel='stylesheet' href='https://bootswatch.com/4/cosmo/bootstrap.min.css'>

</head>

<body>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" value="">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" value="">
			</div>
			<div class="form-group">
				<label for="">Message</label>
				<textarea name="message" class="form-control"></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>

</html>