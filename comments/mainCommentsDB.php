<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$conn= mysqli_connect('localhost','root','','test');
$ID=$_POST['ID'];
$message=$_POST['message'];
$date=$_POST['date'];
$name=$_POST['name'];

$sql="SELECT * FROM registration WHERE NIC='$ID' AND Name='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
$sql2="INSERT INTO usercoments( QueryId, comment, dateAndTime,customerID,Name) VALUES (null,'$message','$date','$ID','$name')";
$result2= mysqli_query($conn, $sql2);
echo"<script>

alert('Comment successfully submitted Thank U!')
</script>";

}else{

    echo"<script>

    alert('Sorry Customer ID and Name does not match.. Thank U!')
    </script>";
     

}




?>