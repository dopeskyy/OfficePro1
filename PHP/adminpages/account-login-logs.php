
	<html>
		<title>Account Logs </title>

		<head>

			<link rel="stylesheet" href="../../CSS/mainstyles.css" />

		</head>



		<body>
			<?php include '../NavbarFooter/nav.php'; ?>

			<p><a href="admin.php">Admin Page</a></p>

			<?php
				//make a DB Connecttion
				$DBConnect = mysqli_connect("127.0.0.1", "opsadmin", "0ff1c3P$", "OfficePro");

				//if there isn't a DB connection, you need to let the admin know
				
				if ($DBConnect == false)
					print("Unable to connect to the database: " . mysqli_connect_error());
				else {

					//set up the table name
					$TableLogin = "loginlogs";
					//THis is a wild card selection for everything in the DB
					$SQLstring = "select * from $TableLogin";
					$QueryResult = mysqli_query($DBConnect, $SQLstring);
					//check to see if there are record in the table?
					if (mysqli_num_rows($QueryResult) > 0) { //output all of the results in a dynamic table
						print "Here is a list of users login logs";
						print "<table width ='100%' border ='1'>";
						print "<tr>
							<th>ID</th>
							<th>UserID</th>
							<th>LoginLogsTimestamp</th>
							</tr>";
						while ($Row = mysqli_fetch_assoc($QueryResult)) {

							//this is the dynamic part of out table
							print "<tr>
						<td>{$Row['ID']}</td>
						<td>{$Row['UserID']}</td>
						<td>{$Row['LoginLogsTimestamp']}</td>	
						</tr>";


						} //end while statement
					} //end num row test
					else
						print "there are no results to display";
					mysqli_free_result($QueryResult);
				} //close the cinnection
				mysqli_close($DBConnect);


			?>

					

		</body>


	</html>