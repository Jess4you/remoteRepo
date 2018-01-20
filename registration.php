<?
<?php
$con = mysqli_connect("localhost","root","","database");

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
	<form>
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" /><br />
		<label></label> <input type="text" name="email" /><br />
		<label></label> <input type="password" name="pass" /><br />
		<label></label> <input type="password" name="cpass" />
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

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>