<?php
$emailErr=$passwordErr=$usernameErr=$password2Err=$username2Err=$departmentErr=$contactErr=$conpasswordErr= $termErr= $passmatchErr="";
$email=$password=$username=$password2=$username2=$department=$contact=$conpassword="";
$usernamedb=$passworddb="";

$servername = "localhost";
$username11 = "root";
$password11 = "";
$dbname = "test";

if(isset($_POST['submit'])){
	if(isset($_POST['terms'])){
		
	  if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
	
	   if (empty($_POST["username"])) {
               $usernameErr = "UserName is required";
            }else {
               $username = test_input($_POST["username"]);
            }
	
	   if (empty($_POST["username2"])) {
               $username2Err = "UserName is required";
            }else {
               $username2 = test_input($_POST["username2"]);
            }
	
	   if (empty($_POST["password"])) {
               $passwordErr = "password is required";
            }else {
               $password = test_input($_POST["password"]);
            }
	
	   if (empty($_POST["password2"])) {
               $password2Err = "password is required";
            }else {
               $password2 = test_input($_POST["password2"]);
            }
	
	   if (empty($_POST["contact"])) {
               $contactErr = "contact number is required";
            }else {
               $contact = test_input($_POST["contact"]);
            }
	
	   if (empty($_POST["department"])) {
               $departmentErr = "department is required";
            }else {
               $department = test_input($_POST["department"]);
            }
	
	   if (empty($_POST["confirm_password"])) {
               $conpasswordErr = "password  is required";
            }else {
               $conpassword = test_input($_POST["confirm_password"]);
            }
	
	
// Create connection
$conn = mysqli_connect($servername, $username11, $password11, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	
	if($email!=null && $emailErr!=='Invalid email format' &&  $password!=null && $username!=null && $password2!=null && $username2!=null && $department!=null && $contact!=null && $conpassword!=null)
	{
		

	
           $sql = "SELECT ID, username, password FROM admin WHERE username='$username2' and password='$password2'";
               $result = mysqli_query($conn, $sql);
			 
	if( mysqli_num_rows($result)==1){
	
        while($row2 = mysqli_fetch_assoc($result)){
            $ID=$row2['ID'];
            
            }
	$sql = "INSERT INTO admin (username,password,department,contact,email,AdminID)
VALUES ('$username','$password','$department',$contact,'$email','$ID')";
	
	if (mysqli_query($conn, $sql)) {
   
		echo" <script>alert('New record successfuly submitted Thank You...!');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      
	}else{
		
		echo" <script>alert('Sorry UserName and Password does not match thank you...!');</script>";


	}
	
	  

	
	
	mysqli_close($conn);
		
	}
	
	
	}else{
		
		$termErr="accept terms and conditions";
		
	}
	
	
	
}


function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>
















