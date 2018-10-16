<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mainCustomerViewCss.css">
  <script src="inser.js"></script>
<script src="luckyjan.js"></script>
  </head>
<?php

session_start();
 if($_SESSION['adminID']==''){

  header('Location:../adminhtml.html');
 }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="select * from registration ";
$query=mysqli_query($conn,$sql);

?>  
<body>
<div id="khan">
<div class="well form-horizontal container   "   id="contact_form">
<span ><button  id="insertion" class="btn  pull-right btn-info" >add</button></span><br /><br />

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



<?php

while($result=mysqli_fetch_array($query)){?>

 <tr class='success danger' id="<?php echo $result['NIC']; ?>">

  <td data-target="NIC"><?php  echo $result['NIC'];?></td>
 <td data-target="MeterNO"><?php echo $result['MeterNO'];?></td>
 <td data-target="Name"><?php echo $result['Name']; ?></td>
 <td data-target="FatherName"><?php echo $result['FatherName']; ?></td>
 <td data-target="Gender"><?php echo $result['Gender']; ?></td>
 <td data-target="Email"><?php echo $result['Email']; ?></td>
 <td data-target="Address"><?php echo $result['Address']; ?></td>
 <td><a href="#" data-target="update" data-role="update" data-id="<?php echo $result['NIC'] ;?>"><button class='btn btn-sm btn-primary'> Update</button></a></td>
 <td><a href="#" data-target="delete" data-role="Delete" data-id="<?php echo $result['NIC'] ;?>"><button class='btn   btn-sm btn-danger'> Delete</button></a></td>

 </tr>


<?php
}
?>

</tbody>

</table>

</div>
</div>
</div>


  <div id="myModal" class="modal fade " role="dialog">
      <div class="modal-dialog">

        
        <div class="modal-content">
          <div class="modal-header modelHeader" style=" background-color: aqua;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Updation</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>NIC </label>
                <input readonly ="readonly " type="text" id="NIC" class="form-control">
              </div>
			  
              <div class="form-group">
                <label>MeterNO</label>
                <input type="text" id="MeterNO" class="form-control">
              </div>
			  <div class="form-group">
                <label>Name</label>
                <input type="text" id="Name" class="form-control">
              </div>
			  <div class="form-group">
                <label>FatherName</label>
                <input type="text" id="FatherName" class="form-control">
              </div>
			  
			   <div class="form-group">
                <label>Gender</label>
                <input type="text" id="Gender" class="form-control">
              </div>
			  
			   <div class="form-group">
                <label>Address</label>
                <input type="textarea" id="Address" class="form-control">
              </div>

			  
               <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default btn-danger pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
	<!--      insertion    -->
	 <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
      
              
              <div class="modal-content">
                <div class="modal-header" style=" background-color: aqua;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Insertion</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label>NIC </label>
                      <input  type="text" id="NIC1" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label>MeterNO</label>
                      <input type="text" id="MeterNO1" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="Name1" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>FatherName</label>
                      <input type="text" id="FatherName1" class="form-control">
                    </div>
                    
                     <div class="form-group">
                      <label>Gender</label>
                      <input type="text" id="Gender1" class="form-control">
                    </div>
                    
                     <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="Address1" class="form-control">
                    </div>
      
                    
                     <div class="form-group">
                      <label>Email</label>
                      <input type="text" id="email1" class="form-control">
                    </div>
                   <!--   <input type="hidden" id="userId1" class="form-control"-->
      
      
                </div>
                <div class="modal-footer">
                  <a href="#" id="save1" class="btn btn-primary pull-right">insert</a>
                  <button type="button" class="btn btn-default btn-danger pull-left" data-dismiss="modal">Close</button>
                </div>
              </div>
      
            </div>
          </div>
  
         
</body>

  
</html>