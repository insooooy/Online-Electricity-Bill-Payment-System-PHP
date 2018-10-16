<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="DataTables/css/jquery.dataTables.min.css">
    <script src="DataTables/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#myTable').DataTable();
});
</script>

<title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$conn= mysqli_connect('localhost','root','','test');
$referenceID="";
if(isset($_POST['submit']))
{

 $referenceID= $_POST['refernceid'];
 if($referenceID!=null){
 $sql="SELECT * FROM billHistory WHERE  Billid='$referenceID' ";
 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){?>

<table  id="myTable" class="table table-hover ">
<thead>
<tr style="
    font-size: 15px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color: burlywood; font-style: italic;" class="danger ">

<th>Billid</th>
<th>units</th>
<th>cost</th>
<th>Month</th>
<th>billStatus</th>
<th>dueDate</th>
<th>paymentDateAndTime</th>
</tr>
</thead>


<tbody>
<?php

while($row = mysqli_fetch_assoc($result)){ 


echo"<tr style='font-size:15px;' class='warning'>
    <td>".$row ['Billid']."</td>
    <td>".$row ['units']."</td>
    <td>".$row ['cost']."</td>
    <td>".$row ['Month']."</td>
    <td>".$row ['billStatus']."</td>
    <td>".$row ['dueDate']."</td>
    <td>".$row ['paymentDateAndTime']."</td>
</tr>";


}

}else{
   echo' <script>alert("Record is not found")</script>';
} ?>

</tbody>
</table>
<?php
}else{
  


}
    

}



?>