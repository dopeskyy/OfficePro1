
<html>
	<title>FAQ </title>

	<head>
	
		<link rel="stylesheet" href="../../CSS/mainstyles.css" />

	</head>



	<body>
		<?php include '../NavbarFooter/nav.php'; ?>

		<h2 style="text-align: center;"> Frequently Asked Question</h2>

		<?php
			print '<br><br>';
					//make a DB Connecttion
					$DBConnect = mysqli_connect("127.0.0.1", "opsadmin", "0ff1c3P$", "OfficePro");

					//if there isn't a DB connection, you need to let the admin know
					if ($DBConnect == false)
						print("Unable to connect to the database: " . mysqli_connect_error());
					else {

						//set up the table name
						$TableFAQ = "faq";
						//This select everything in the DB about us table
						$SQLstring = "select * from $TableFAQ";
						$QueryResult = mysqli_query($DBConnect, $SQLstring);
						// Check if there are records in the table
						if (mysqli_num_rows($QueryResult) > 0) {
							
							while ($Row = mysqli_fetch_assoc($QueryResult)) {
								// Display questions and answers using details and summary 
								print '<div class="faq-container";>';
								print '<details>';
								print '<summary>' . $Row['Question'] . '</summary>';
								print '<p>' . $Row['Answer'] . '</p>';
								print '</details>';
								print '</div>';
								
							}
						} 
						else
							print "there are no results to display";
						mysqli_free_result($QueryResult);
					} //close the cinnection
					mysqli_close($DBConnect);
					print '<br><br><br><br>';
					print '<br><br><br><br>';
					print '<br><br><br><br>';

		?>
			
	</body>

		<?php include '../NavbarFooter/footer.php'; ?>

</html>