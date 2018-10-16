 <?php
 session_start();
 if($_SESSION['adminID']==''){

  header('Location:../adminhtml.html');
 }
  include 'mainAdminViewUpdation.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajax Update</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mainAdminViewCss.css">
  </head>
<body >

<div class="container well form-horizontal ">

<br/>
<br/>
<br/>
<br/>           
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
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM admin');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr class="info"  id="<?php echo $row['ID']; ?>">
                <td data-target="username"><?php echo $row['username']; ?></td>
                <td data-target="password"><?php echo $row['password']; ?></td>
				<td data-target="department"><?php echo $row['department']; ?></td>
                <td data-target="contact"><?php echo $row['contact']; ?></td>
				<td data-target="email"><?php echo $row['email']; ?></td>
                <td><a href="#" data-target="update" data-role="update" data-id="<?php echo $row['ID'] ;?>"><button class='btn btn-sm btn-primary'> Update</button></a></td>
				
                <td><a href="#" data-target="delete" data-role="Delete" data-id="<?php echo $row['ID'] ;?>"><button class='btn   btn-sm btn-danger'> Delete</button></a></td>
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>
           <div id='adminDelete'></div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        
        <div class="modal-content">
          <div class="modal-header headerModel">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Updation</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>username</label>
                <input type="text" id="username" class="form-control">
              </div>
			  
              <div class="form-group">
                <label>password</label>
                <input type="text" id="password" class="form-control">
              </div>
			  <div class="form-group">
                <label>department</label>
                <input type="text" id="department" class="form-control">
              </div>
			  <div class="form-group">
                <label>contact</label>
                <input type="text" id="contact" class="form-control">
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

</body>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var username  = $('#'+id).children('td[data-target=username]').text();			
            var password  = $('#'+id).children('td[data-target=password]').text();
			 var department  = $('#'+id).children('td[data-target=department]').text();
			  var contact = $('#'+id).children('td[data-target=contact]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();
            $('#username').val(username);
            $('#password').val(password);
			$('#department').val(department);
            $('#contact').val(contact);
            $('#email').val(email);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){         

     	   var id  = $('#userId').val(); 
         var username =  $('#username').val();
          var password =  $('#password').val();
		   var department =  $('#department').val();
		  var contact=  $('#contact').val();
          var email =   $('#email').val();

          $.ajax({
              url      : 'mainAdminViewUpdation.php',
              method   : 'post', 
              data     : {username: username, department : department , password:  password , email : email , contact: contact, id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=username]').text(username);
                             $('#'+id).children('td[data-target=password]').text(password);
							 $('#'+id).children('td[data-target=contact]').text(contact);
                             $('#'+id).children('td[data-target=email]').text(email);
                             $('#'+id).children('td[data-target=department]').text(department);
                            $('#myModal').modal('toggle');
                         }
          });
       });
	   
	  
$(document).on('click','a[data-role=Delete]',function(){
            var id  = $(this).data('id');
	  alert(id+":You are sure to delete this record");
	  
          $.ajax({
              url      : 'maiAdminViewDeletion.php',
              method   : 'post', 
              data     : {id: id},
              success  : function(response){
                   $(".well").html(response);         
							
							alert("Deletion is sucessful");


                         }
          });
	
});	  


  });
</script>
</html>
