<?php
$id = $_POST['id'];
$output="";
$output.='     
<table id="khan"  class="table table-hover">
  <thead >
	<tr class="success">
	  <th>username</th>
	  <th>password</th>
	  <th>department</th>
	   <th>contact</th>
	  <th>Email</th>
	  <th>Update</th>
	  <th>Delete</th>
  </thead>
  <tbody>';

$conn =	mysqli_connect('localhost' , 'root' ,'' ,'test');
if($id){
		 mysqli_query($conn , "DELETE FROM admin WHERE id='$id'"); 
		 $sql="SELECT * FROM admin";
		 $table=mysqli_query($conn,$sql);
		 while($row  = mysqli_fetch_array($table)){

			$output.='<tr class="info"  id="'. $row['ID'].'">';
			$output.='<td data-target="username">'.$row['username'].'</td>';
			$output.='<td data-target="password">' .$row['password'].'</td>';
			$output.='<td data-target="department">'. $row['department'].'</td>';
			$output.='<td data-target="contact">'.$row['contact'].'</td>';
			$output.='<td data-target="email">'. $row['email'].'</td>';
			$output.='<td><a href="#" data-target="update" data-role="update" data-id="'.$row['ID'] .'"><button class="btn btn-sm btn-primary"> Update</button></a></td>';
			$output.='<td><a href="#" data-target="delete" data-role="Delete" data-id="'.$row['ID']. '"><button class="btn   btn-sm btn-danger"> Delete</button></a></td>';
			$output.=" </tr>";
		 }
		 $output.="<tbody><tabel>";
echo $output;

}







?>