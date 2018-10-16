<?php

$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');
$output="";
$MeterNO  = $_POST['MeterNO'];
$NIC = $_POST['NIC'];
$Name= $_POST['Name'];                
$FatherName= $_POST['FatherName']; 
$Gender= $_POST['Gender']; 
$email= $_POST['email']; 
$Address= $_POST['Address'];
$sql="INSERT INTO registration(NIC,MeterNO,Name,FatherName,Gender,Email,Address,AdminID) VALUES('$NIC','$MeterNO','$Name','$FatherName','$Gender','$email','$Address',1)";
mysqli_query($conn,$sql);
$sql2="SELECT * FROM registration ";
$query=mysqli_query($conn,$sql2);

$output.='<div  class="well form-horizontal container   "   id="contact_form">
<span ><button id="insertion" class="btn  pull-right btn-info" >add</button></span><br /><br />';
$output.="
<table  class=' table table-hover'> 
<thead> 
 <tr class='success'>

 <th>NIC </th>
 <th>MeterNO</th>
<th> Name</th>
<th> FatherName</th>
<th>Gender </th>
<th> Email</th>
<th>Address</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody> ";
while($result=mysqli_fetch_array($query)){


    $output.=" <tr class='success danger' id=". $result['NIC'].">";
    $output.= "<td data-target='NIC'>".$result['NIC']."</td>";
  $output.= "<td data-target='MeterNO'>". $result['MeterNO']."</td>";
  $output.="<td data-target='Name'>". $result['Name']."</td>";
  $output.="<td data-target='FatherName'>". $result['FatherName']."</td>";
  $output.="<td data-target='Gender'>". $result['Gender']."</td>";
  $output.='<td data-target="Email">'. $result['Email'].'</td>';
  $output.='<td data-target="Address">'. $result['Address'].'</td>';
  $output.='<td><a href="#" data-target="update" data-role="update" data-id="'. $result['NIC'].'"><button class="btn btn-sm btn-primary"> Update</button></a></td>';
  $output.='<td><a href="#" data-target="delete" data-role="Delete" data-id="'. $result['NIC'].'"><button class="btn   btn-sm btn-danger"> Delete</button></a></td>';
  $output.=" </tr>";
  


}


echo   $output;




?>