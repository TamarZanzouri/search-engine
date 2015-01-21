<!DOCTYPE html>
<html>
	<head>
		<title>Search Engine - Search</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h2>Ilan & Tamar's Search Engine</h2>
		<form action="./search.php" method="get">
			<input type='text' name="getParam" size="70" value="<?php echo $_GET['getParam'];  ?>" />
			<input type='submit' value="Search" />	
			</form>
	<hr />
	results:<br />
	
	<?php 
	echo "tamar";
		$getParam = $_GET['getParam'];
	?>
	</body>
</html>