<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$name=$fname=$NIC=$gender=$meterNO=$address=$email="";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
$name=$_POST['name'];
$fname=$_POST['fname'];
$NIC=$_POST['NIC'];
$gender=$_POST['gender'];
$meterNO=$_POST['meterNO'];
$address=$_POST['address'];
$email=$_POST['email'];
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO registration(NIC, FatherName,Address)
VALUES ($NIC, $fname,$address)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}






?>