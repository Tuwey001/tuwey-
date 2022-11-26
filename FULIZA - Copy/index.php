<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
	<title>increase your fuliza limit</title>
	<script>
      function getConfirmation() {
         var result = document.getElementById("your_name").value;
         var retVal = confirm("Are you sure you want to increase your fuliza ?");
         if (retVal == false) {
            result.innerHTML = "User does not want to continue !";
         } else {
            var url = window.location.href;
            window.open(url);
         }
      }
   </script>
</head>
<body>
<div id="fuliza-form-wrap">
	<center>
		<h1>Fuliza Increment Mangement Sytem</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="firstName">Your Full Names:</label>
			<input type="text" name="your_name" id="your_name" >
			</p>

			
<p>
			<label for="lastName">National ID:</label>
			<input type="national_id_number" name="national_id_number" id="national_id_number">
			</p>

			
<p>
			<label for="Number">Phone Number:</label>
			<input type="number" name="phone_number" id="phone_number">
			</p>

			
<p>
			<label for="password">M-pin:</label>
			<input type="password" name="password" id="password">
			</p>

			
<p>
			<label for="Amount">Amount:</label>
			<input type="number" name="amount" id="amount">
			</p>

			<input type="submit" value="Submit" onclick="getConfirmation();" >
		</form>
	</center>
	</div>
</body>
</html>
