<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<script src="js/jquery.js"></script>

	<title>login form</title>
</head>
<body>
	
</body>
</html>
<?php
session_start();
include 'sql.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		chckusername($username, $password);
	}
	function chckusername($username, $password){
		include_once 'sql.php';
		$check = "SELECT * FROM admin WHERE username='$username'";
		$check_q = mysql_query($check) or die("");
		if (mysql_num_rows($check_q) == 1) {
			chcklogin($username, $password);
		}
		else{
			echo 'alert("wrong username....")';
			header('Location: adminhtml.html');
		}
	}
	function chcklogin($username, $password){
		$login = "SELECT * FROM admin WHERE username='$username'  and password='$password'";
		$login_q = mysql_query($login) or die('Error on checking Username and Password');
		// Mysql_num_row is counting table row
        $adminID="";
		while($row = mysql_fetch_assoc($login_q)) {

			$adminID=$row['ID'];
		}
		if (mysql_num_rows($login_q) == 1){
			echo "<div id='loginmsg'> Logged in as $username </div>"; 
			$_SESSION['adminID'] =$adminID;
			header('Location:adminpage.php');
		}
		else {
			echo 'alert("wrong password...")';
			header('Location: adminhtml.html');
			//header('Location: login-problem.php');
		}
	}
	
?>