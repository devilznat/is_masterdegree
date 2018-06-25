<?
$dbhost     = "localhost";
	$dbname   = "islaw-db";
		$dbuser     = "isdb-user";
		$dbpass     = "db-1234";
		$dbport      = "3306";

		// Create connection
			$con = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);
			// Check connection
			if (mysqli_connect_errno()) {
				die ("Failed to connect to MySQL using the PHP mysqli extension: " . mysqli_connect_error());
			}
			// Query the database to show all the tables.
			$query = 'SHOW tables;';
			$result = mysqli_query($con, $query);
			// Print the results of the query.
			echo "Here is a list of the tables in your database:<br>";
			echo "- $dbname <br>";
			while($row = mysqli_fetch_array($result)) {
				echo "\ _ _ $row[0] <br>";
			}
			echo "<br>The connection to \"$dbname\" was successful!";
			$extension = "MySQLi";
			mysqli_close($con);

	?>