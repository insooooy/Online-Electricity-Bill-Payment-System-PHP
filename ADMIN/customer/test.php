<?php
 $nameErr = $emailErr = $genderErr  = $fnameErr = $genderErr = $meterErr = $NICErr = $addressErr = $termErr ="";
   $name = $email = $gender  = $address = $NIC = $fname = $meter = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
if(isset($_POST['submit'])){
	if(isset($_POST['terms'])){
	 if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
			   if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
	
	      if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            if (empty($_POST["fname"])) {
               $fnameErr = "FName is required";
            }else {
               $fname = test_input($_POST["fname"]);
            }
			
            if (empty($_POST["meterNO"])) {
               $meterErr = "meterNO is required";
            }else {
               $meter= test_input($_POST["meterNO"]);
            }
	 
	
	 if (empty($_POST["NIC"])) {
		 
               $NICErr = "NIC is required";
            }else {
               $NIC = test_input($_POST["NIC"]);
            }
	
	
	
	 if (empty($_POST["address"])) {
               $addressErr = "address is required";
            }else {
               $address = test_input($_POST["address"]);
            }
	if($name !=null && $gender !=null && $email !=null && $gender !=null && $NIC !=null && $address !=null && $meter !=null){
	
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $adminID=$_SESSION['adminID'];

	$sql = "INSERT INTO registration (Name, FatherName, Email, NIC, MeterNo,Gender, Address, AdminID )
VALUES ('$name','$fname','$email','$NIC','$meter','$gender','$address',' $adminID')";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	
	
}
	
	
	}else{
	$termErr=" plz accept terms and Conditions";}
	
	
}




function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>