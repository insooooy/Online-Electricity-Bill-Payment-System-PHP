<?php
$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');

	if(isset($_POST['NIC'])){
		
	$MeterNO  = $_POST['MeterNO'];
	$NIC = $_POST['NIC'];
	$Name= $_POST['Name'];                
	$FatherName= $_POST['FatherName']; 
	$Gender= $_POST['Gender']; 
	$email= $_POST['email']; 
	$Address= $_POST['Address'];
    $id = $_POST['id'];
	$sql="UPDATE  registration SET  Address='$Address', Gender='$Gender', FatherName='$FatherName', MeterNO='$MeterNO',Email='$email',Name='$Name' WHERE NIC='$id'";
	$result=mysqli_query($conn,$sql);
	}
?>