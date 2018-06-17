<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("location: logout.php");
?>

<html>
	<head>
		<title>ACM | Home</title>
		<?php include "css/acm.php"; ?>
	</head>
	<body>
		test
	</body>
</html>