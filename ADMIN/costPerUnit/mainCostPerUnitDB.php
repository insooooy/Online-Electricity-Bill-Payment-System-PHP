
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="mainCostPerUnitCss.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
session_start();
$conn= mysqli_connect('localhost','root','','test');
$cost=$_POST['cost'];
$date=date('Y/m/d H/i/s');
$admin=	$_SESSION['adminID'];
$output="";
$sql="UPDATE perunitcost SET perUnitCost='$cost', dateAndTime='$date', adminID='$admin'";
 mysqli_query($conn, $sql);
 $sql2="SELECT * FROM admin WHERE ID='$admin' ";
 $result2 = mysqli_query($conn, $sql2);
 if (mysqli_num_rows($result2) > 0) {

    $email =$username= $department='';
    while($row2 = mysqli_fetch_assoc($result2)) {

        $email =$row2['email'];
        $username=$row2['username'];
        $department=$row2['department'];
    }


 }
$sql3='SELECT * FROM perunitcost';
$result3 = mysqli_query($conn, $sql3);


$output.='<table class="table table-hover">
<thead>
<tr class="danger fontts">
<th>perUnitCost</th>
<th>updationTime</th>
<th>username</th>
<th>department</th>
<th>$email</th>
</tr>
</thead> <tbody>';

if (mysqli_num_rows($result3) > 0) {

    

    while($row = mysqli_fetch_assoc($result3)) {

$output.="
<tr class='info fontts2'>".
   "<td>" .$row['perUnitCost']."</td>".
    "<td>".$row['dateAndTime']."</td>".
    "<td>".$username."</td>".
    "<td>".$department."</td>".
    "<td>".$email."</td>".
"</tr>";
 
   }
   echo $output.="</tbody></tabel>";
   
}       
?>