<!DOCTYPE html>

<head>
        <title>Docker Compose</title>
</head>

<body>

<h1> Docker compose Tutorial </h1>
<h2> Running Multi-Container Application </h2>
<?php

$dbhost ="backend-db";
$dbuser ="root";
$dbpassword ="root";
$dbname ="Mobiles";
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname); 

if($connection)
	{
	echo"Connection Established ";
	}

	else{
		echo "There is some Error";
	}
	
	echo "Welcome Again";
	echo "Welcome Again";
	echo "Welcome Again";
	echo "Welcome Again";
	
	echo "<br>";
	echo "Welcome Again";
	echo "Welcome Again";
	echo "Welcome Again";
	echo "Welcome Again";
	echo "<br>";
	echo "<br>";
	
	// phpinfo();
	
	$q = "select * from products";
	$result = mysqli_query($connection,$q) or die( mysqli_error($connection));
	while ($row = mysqli_fetch_array($result))
	{
	echo $row['Id']." ";
	echo $row['Model']." ";
	echo $row['Quantity']." ";
	echo "<br> ";	
	}
	

?>

</body>
</html>

