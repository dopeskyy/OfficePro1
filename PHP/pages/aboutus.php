
<html>
	<title>About Us </title>

	<head>

		<link rel="stylesheet" href="../../CSS/mainstyles.css" />

	</head>

	<body>
		<?php include '../NavbarFooter/nav.php'; ?>

		<h2 style="text-align: center;"> About Us</h2>
		<?php
			//make a DB Connecttion
			$DBConnect = mysqli_connect("127.0.0.1", "opsadmin", "0ff1c3P$", "OfficePro");

			//if there isn't a DB connection, you need to let the admin know
			if ($DBConnect == false)
				print("Unable to connect to the database: " . mysqli_connect_error());
			else {

				//set up the table name
				$TableAboutUs = "aboutus";
				//This select everything in the DB about us table
				$SQLstring = "select * from $TableAboutUs";
				$QueryResult = mysqli_query($DBConnect, $SQLstring);
				// Check if there are records in the table
				if (mysqli_num_rows($QueryResult) > 0) {
					// Iterate through the results and display each row in its own box
					while ($Row = mysqli_fetch_assoc($QueryResult)) {
						print '<div class="about-box">';
						// Determine the image type based on the file extension
						$imageExtension = pathinfo($Row['Image'], PATHINFO_EXTENSION);
						if ($imageExtension === 'jpg' || $imageExtension === 'jpeg') {
							$contentType = 'image/jpeg';
						} elseif ($imageExtension === 'png') {
							$contentType = 'image/png';
						} else {
							// Handle other image types if necessary
							$contentType = 'image/jpeg'; // Default to JPEG
						}
				
						print '<img src="data:' . $contentType . ';base64,' . base64_encode($Row['Image']) . '" alt="Image" />';
						print '<p>' . '<strong>' . $Row['FullName'] . '</strong>' . '</p>';
						print '<p>' . $Row['FunFact'] . '</p>';
						print '</div>';
						
						
					}
				} else {
					print "There are no results to display.";
				}
				mysqli_free_result($QueryResult);
			} //close the cinnection
			mysqli_close($DBConnect);


		?>



	</body>

	<?php include '../NavbarFooter/footer.php'; ?>

</html>