<!DOCTYPE HTML>
<?php

session_start();

 if($_SESSION['adminID']==''){

  header('Location:../adminhtml.html');
 }
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="customerCSS.css" />
	<script src="customerjs.js" type="text/javascript"></script>
	<script src="js/jquery.js"></script>
	<script type="text/javascript"> 
	   $(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});
	
	</script>
</head>
<body>
<?php

include 'test.php';
?>
	<div  id="registration-form" style="width=700px;">
	<div class='fieldset'>
	
    <legend>registration!</legend>
		<form action="#" method="post" data-validate="parsley">
			<div class='row'>
				<label for='firstname'> Name</label><span style="color:red";> *<?php
			
			echo $nameErr;
			?></span>
				<input type="text" placeholder=" Name" name="name" id='firstname' data-required="true" data-error-message="Your First Name is required">
			</div>
			
			<div class='row'>
				<label for='firstname'>Father Name</label><span style="color:red";> *<?php
			
			echo $fnameErr;
			?>
				<input type="text" placeholder="Father Name" name='fname' id='firstname' data-required="true" data-error-message="Your First Name is required">
			</div>
			
			<div class='row'>
				<label for='firstname'>Gender</label><span style="color:red";> *<?php
			
			echo $genderErr;
			?>
				<select name="gender" id="firstname" style="padding:15px;">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select>
			</div>
				<div class='row'>
				<label for='firstname'> Meter NO</label><span style="color:red";> *<?php
			
			echo $meterErr;
			?>
				<input type="text" placeholder="Enter meter NO" name='NIC' id='firstname' data-required="true" data-error-message="Your First Name is required">
			</div>
		
			<div class='row'>
				<label for='firstname'> NIC </label><span style="color:red";> *<?php
			
			echo $NICErr;
			?>
				<input type="text" placeholder="Enter NIC NO" name='meterNO' id='firstname' data-required="true" data-error-message="Your First Name is required">
			</div>
		
			<div class='row'>
				<label for="email">E-mail</label><span style="color:red";> *<?php
			
			echo $emailErr;
			?>
				<input type="text" placeholder="Enter E-mail"  name='email' data-required="true" data-type="email" data-error-message="Your E-mail is required">
			</div>
				<div class='row'>
				<label for='firstname'> Address </label><span style="color:red";> *<?php
			
			echo $addressErr;
			?>
				<input type="text" placeholder="Enter Address" name='address' id='firstname' data-required="true" data-error-message="Your First Name is required">
			</div>
			<p >this information is ture? </p>
			<div class="row">
		<input type="checkbox" name="terms"> I accept Terms and Conditions
		</div><span style="color:red";> *<?php
			
			echo $termErr;
			?>
			<input type="submit" value="Register" name="submit">
		</form>
	</div>
</div>
</body>
</html>