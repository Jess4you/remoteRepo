<?
<?php
$con = mysqli_connect("localhost","root","","ost2");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

?>
<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form method="post">
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label>Username:</label> <input type="text" name="uname" required="required"/><br />
		<label>Email:</label> <input type="email" name="email" required="required" /><br />
		<label>Password:</label> <input type="password" name="pass" id="fld-pass" required="required" /><br />
		<label>Confirm Password:</label> <input type="password" name="cpass" oninput="match_pass(this)" required="required" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label>Firstname:</label> <input type="text" name="fname"  required="required"/><br />
		<label>Lastname:</label> <input type="text" name="lname"  required="required"/><br />
		<label>Contact:</label> <input type="text" name="contact"  required="required"/><br />
		<label>Address:</label> <textarea rows="2" cols="20" name="address"  required="required"></textarea><br />
		<label>City:</label> <input type="text" name="city"  required="required"/><br />
		<label>State:</label> <input type="text" name="state"  required="required"/><br />
		<label>ZIP</label> <input type="text" name="zip"  required="required"/>
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>
    <?php
        if (
            isset($_POST["uname"]) &&
            isset($_POST["email"]) &&
            isset($_POST["pass"])  &&
            isset($_POST["fname"]) &&
            isset($_POST["lname"]) &&
            isset($_POST["contact"]) &&
            isset($_POST["address"]) &&
            isset($_POST["city"]) &&
            isset($_POST["state"]) &&
            isset($_POST["zip"]) 

           ){
            $uname = $_POST["uname"];
            $email = $_POST["email"];
            $pass  = $_POST["pass"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $contact  = $_POST["contact"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $state  = $_POST["state"];
            $zip = $_POST["zip"];
            $query = "INSERT INTO accuser_info(Username, Email, Password,FirstName,LastName,ContactNumber,Address,City,State,ZIP) VALUES('$uname','$email','$pass','$fname','$lname','$contact','$address','$city','$state','$zip')";
            mysqli_query($con, $query);
        }
    ?>
	<script type="text/javascript">
        function match_pass(x) {
            if (x.value == document.getElementById("fld-pass").value) {
                x.setCustomValidity("");
            } else {
                x.setCustomValidity("Password does not match.");
            }
        }
	</script>

</body>

</html>