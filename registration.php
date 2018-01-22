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
		<label>Username:</label> <input type="text" name="uname" /><br />
		<label>Email:</label> <input type="email" name="email" /><br />
		<label>Password:</label> <input type="password" name="pass" id="fld-pass" /><br />
		<label>Confirm Password:</label> <input type="password" name="cpass" oninput="match_pass(this)" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" /><br />
		<label></label> <input type="text" name="lname" /><br />
		<label></label> <input type="text" name="contact" /><br />
		<label></label> <textarea rows="2" cols="20" name="address" ></textarea><br />
		<label></label> <input type="text" name="city" /><br />
		<label></label> <input type="text" name="state" /><br />
		<label></label> <input type="text" name="zip" />
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
		function submit_form(){
			alert("Thank you for your registration...");
		}
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