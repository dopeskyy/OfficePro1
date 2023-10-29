<html>

	<head>
		<title>Case list</title>


		<link rel="stylesheet" href="../../CSS/mainstyles.css" />
	</head>

		<body>
				<?php include '../NavbarFooter/nav.php'; ?>
				
				<br><br>
				<a href="admin-home.php">Admin Page</a>
				<br>
			<?php
				//make a DB Connecttion
				$DBConnect = mysqli_connect("127.0.0.1", "opsadmin", "0ff1c3P$", "OfficePro");

				//if there isn't a DB connection, you need to let the admin know

				if ($DBConnect == false)
					print("Unable to connect to the database: " . mysqli_connect_error());
				else {

					//set up the table name
					$TableContact = "contactus";
					//
					$SQLstring = "select * from $TableContact";
					$QueryResult = mysqli_query($DBConnect, $SQLstring);
					//check to see if there are record in the table?
					if (mysqli_num_rows($QueryResult) > 0) { //output all of the results in a table
						print "Here is a list of Inquries";
						print "<table width ='100%' border ='1'>";
						print "<tr>
							<th>CaseNumber</th>
							<th>ContactTimestamp</th>
							<th>FirstName</th>
							<th>LastName</th>
							<th>UserEmail</th>
							<th>Message</th>
							</tr>";
						while ($Row = mysqli_fetch_assoc($QueryResult)) {

							//this is the dynamic part of out table
							print "<tr>
						<td>{$Row['CaseNumber']}</td>
						<td>{$Row['ContactTimestamp']}</td>
						<td>{$Row['FirstName']}</td>
						<td>{$Row['LastName']}</td>
						<td>{$Row['UserEmail']}</td>
						<td>{$Row['Message']}</td>	
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