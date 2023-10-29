<html>

	<head>

		<link rel="stylesheet" href="../../CSS/mainstyles.css" />

	</head>

	<body>
			<?php include '../NavbarFooter/nav.php'; ?>

				<?php
					$FirstName = $_POST['FirstName'];
					$LastName = $_POST['LastName'];
					$UserEmail = $_POST['UserEmail'];
					$Message = $_POST['textbox'];

					//make a DB Connecttion
					$DBConnect = mysqli_connect("127.0.0.1", "opsadmin", "0ff1c3P$", "OfficePro");

					//if there isn't a DB connection, you need to let the admin know
					if ($DBConnect == false)
						print("Unable to connect to the database: " . mysqli_connect_error());
					else {

						//set up the table name
						$TableContact = "contactus";

						//set up the PHP variable to hold the data from the form
						$FirstName = stripslashes($_POST['FirstName']);
						$LastName = stripslashes($_POST['LastName']);
						$UserEmail = stripslashes($_POST['UserEmail']);
						$Message = stripslashes($_POST['textbox']);


						//construct our SQL string to insert the data in the dataabasre and tables
						$SQLstringContact = "insert into $TableContact(FirstName,LastName,UserEmail,Message) values
						('$FirstName', '$LastName', '$UserEmail','$Message')";

						if (mysqli_query($DBConnect, $SQLstringContact)) {
							// Retrieve the CaseNumber after the insert
							$CaseNumber = mysqli_insert_id($DBConnect);

							// Display the CaseNumber to the user
							print "<div class='caseNumber-container'>";
							print "<div class='caseNumber-message'>";
							print "Hello, $FirstName $LastName<br>";
							print "Your Case Number is: $CaseNumber<br>";
							print "We will respond to you as soon as possible<br>";
							print "Thank You!";
							print "</div>";
							print "</div>";

						} else {
							print "There was an error on insert.";
						}

					} //close the cinnection else
					mysqli_close($DBConnect);

				?>
	</body>

			<?php include '../NavbarFooter/footer.php'; ?>

</html>