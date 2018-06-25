<?php
	// Check to see if the form was submitted
    if (isset($_POST['host'])) {
		$dbhost     = $_POST['host'];
		$dbname   = $_POST['database'];
		$dbuser     = $_POST['user'];
		$dbpass     = $_POST['pwd'];
		$dbport      = $_POST['port'];
		if (strlen($dbport) < 4) { $dbport = 3306; }
		if (!function_exists('gethostname')) {
			$hostname = `hostname`;
			$hostnamearray = explode('.', $hostname);
			$hostname = $hostnamearray[0];
		}
		else $hostname = gethostname();
		// Check to see if mysqli is available
		if (!extension_loaded('mysqli') or $_POST['config'] == "mysql") {
			$dbhost = $dbhost.':'.$dbport;
			// Create connection
			$con = @mysql_connect($dbhost,$dbuser,$dbpass);
			// Check connection
			if (mysql_error()) {
				die("Failed to connect to MySQL using the PHP mysql extension: " . mysql_error());
			}
			mysql_select_db($dbname, $con);
			// Query the database to show all the tables.
			$query = 'SHOW tables;';
			$result = mysql_query($query);
			// Print the results of the query.
			echo "Here is a list of the tables in your database:<br>";
			echo "- $dbname <br>";
			while($row = mysql_fetch_array($result)) {
				echo "\ _ _ $row[0] <br>";
			}
			echo "<br>The connection to \"$dbname\" was successful!";
			$extension = "MySQL";
			mysql_close($con);
		}
		else {
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
		}
		echo "<br>PHP extension used: " . $extension;
		echo "<br>Server Name: " . $hostname;
		unset($_POST);
   }
   // If we are not here because of a form submission, do the following.
	else { ?>
		
		<!DOCTYPE html>
		<html>
		<body>
		<div align="center">
			<!-- Get connection data-->
			<form method="post">
				<table>
					<tr>
						<td>Connection Type: </td>
						<td>
							<select name="config">
								<option value="auto" selected>Auto Select</option>
								<option value="mysqli">MySQLi</option>
								<option value="mysql">MySQL</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Host Name: </td>
						<td><input type="text" name="host" autofocus></td>
					</tr>
					<tr>
						<td>Database Name: </td>
						<td><input type="text" name="database"></td>
					</tr>
					<tr>
						<td>User: </td>
						<td><input type="text" name="user"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="pwd"></td>
					</tr>
					<tr>
						<td>Port (optional): </td>
						<td><input type="number" name="port" min="1" max="65535" value="3306"></td>
					</tr>
					<tr>
						<td colspan=2><div align="center"><input type="submit" value="Connect"></div></td>
					</tr>
				</table>
			</form>
		</div>
		</body>
		</html>
	<?php
	}
 ?>