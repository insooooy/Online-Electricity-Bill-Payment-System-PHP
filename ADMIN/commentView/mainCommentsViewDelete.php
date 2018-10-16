<?php

$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');
$id=$_POST['id'];
$output="";
$sql="DELETE FROM usercoments WHERE QueryId='$id'";
$result  = mysqli_query($conn,$sql);
if($result){
   
$sql2="SELECT  * FROM usercoments ";
$result2  = mysqli_query($conn,$sql2);
while($row2 = mysqli_fetch_assoc($result2)) {
    $output.="<div class='borStyle well'>";
    $output.="<tr class='info'";
    $output.=" id=".$row2['QueryId']." >";
    $output.='<td><a href="#" data-target="delete" data-role="reply" data-id="'.$row2['QueryId'].'"><button class="btn   btn-defualt btn-primary pull-right"> Reply</button></a></td><br><br>';
    $output.="<td><a href='#' data-target='delete' data-role='Delete' data-id=". $row2['QueryId']." ><button class='btn   btn-defualt btn-danger pull-right'> Delete</button></a></td><br><br>";
    $output.="<b>Name:</b>". "<td data-target='Name'>".$row2['Name']."</td><br>";
    $output.= "<b>ID:</b>". " <td data-target='customerID'>". $row2['customerID']."</td><br>";
    $output.= "<b>Date:</b>"." <td data-target=' dateAndTime'>".$row2['dateAndTime']."</td><br>";
    $output.=  " <td data-target='comment'>". $row2['comment']."</td>";
    $output.="</tr>";
    $output.="</div>";

}

echo $output;

}





?>