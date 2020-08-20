<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];

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
		<h5>Thank you <?php echo $name; ?> You have subscribed with the email <?php echo $email ?></h5>
		<a href="page3.php">Go to page 3</a>
	</div>
</body>

</html>