<?php
$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');
$id=$_POST['id'];
$sql="DELETE FROM registration WHERE NIC='$id' ";
mysqli_query($conn,$sql);
$sql2="select * from registration";
$query=mysqli_query($conn,$sql2);
$output="";
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

<tbody> 


";

while($result=mysqli_fetch_array($query)){

    $output.="<tr class='success danger' id=".$result['NIC']."'> ";
    $output.='<td data-target="NIC">'. $result['NIC']."</td>";
  $output.='<td data-target="MeterNO">'. $result['MeterNO'].'</td>';
  $output.='<td data-target="Name">'.$result['Name'].'</td>';
  $output.='<td data-target="FatherName">'. $result['FatherName']."</td>";
  $output.='<td data-target="Gender">' .$result['Gender'].'</td>';
  $output.='<td data-target="Email">'. $result['Email'].'</td>';
  $output.= '<td data-target="Address">' .$result['Address'].'</td>';
  $output.='<td><a href="#" data-target="update" data-role="update" data-id="'.$result['NIC'].'"><button class="btn btn-sm btn-primary"> Update</button></a></td>';
  $output.='<td><a href="#" data-target="delete" data-role="Delete" data-id="'. $result['NIC']. '"><button class="btn   btn-sm btn-danger"> Delete</button></a></td>';
  $output.= "</tr>";


}
$output.="
</tbody>

</table>";
echo $output;
?>
