<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'test');




if(isset($_POST['id'])){
	$department = $_POST['department'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE admin SET username='$username' , password='$password' , email = '$email' ,contact ='$contact' ,department='$department' WHERE id='$id'");
	

}
?>