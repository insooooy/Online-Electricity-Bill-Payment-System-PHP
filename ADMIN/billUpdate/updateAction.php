<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="billUpdationCss.css">
</head>
<body>
    
</body>
</html>
<?php

$conn= mysqli_connect('localhost','root','','test');
$date=$_POST['date'];
$meter=$_POST['meter'];
$units=$_POST['units'];
$name=$_POST['name'];
$date=$_POST['date'];
$NIC=$_POST['NIC'];
$month=$_POST['month'];
$referenceID=$_POST['referenceID'];
$sql2="SELECT * FROM perunitcost";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0){

    while($row2 = mysqli_fetch_assoc($result2)){
        $cost=$row2['perUnitCost'];
        
        }
       
   
    }
    $newCost=$cost*$units;
    
$sql3 = "INSERT INTO bill (Billid, units, cost, Month, billStatus, dueDate,adminID,customerID)
VALUES ('$referenceID', '$units', '$newCost','$month','Non Paid','$date', 1,'$NIC')";
 mysqli_query($conn, $sql3);
 $output="";
 $output.='<table   class="table table-danger table-hover">
 <thead >
   <tr class="success">
     <th>Name</th>
     <th>Meter_NO</th>
     <th>Reference_ID</th>
      <th>Units</th>
     <th>Cost</th>
     <th>Month</th>
     <th>billStatus</th>
     <th>dueDate</th>
 </thead>
 <tbody>';
 $output.=' <tr class="info" >';
 $output.='<td>'.$name.'</td>';
 $output.= '<td>'.$meter.'</td> ';
 $output.=' <td>'.$referenceID.'</td>';
 $output.='<td>'.$units.'</td> '; 
 $output.='<td>'.$newCost.'</td>';
 $output.=' <td>'.$month.'</td>'; 
 $output.='<td> Non Paid </td>';
 $output.='<td>'.$date.'</td>';
$output.='</tr></tbody></table>';
echo $output;




?>