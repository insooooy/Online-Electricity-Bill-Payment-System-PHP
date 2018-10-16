
<?php

session_start();
 if($_SESSION['adminID']==''){

  header('Location:../adminhtml.html');
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mainCommentsViewCss.css">
  <script src="mainCommentsViewJs.js"></script>
    <title>Customer View</title>
</head>
<body>
     <div class="container"> 
<?php
$conn = mysqli_connect("localhost","root","","test");

$sql = "SELECT *  FROM usercoments";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {?>

    <div id="khan">
   <?php while($row = mysqli_fetch_assoc($result)) {?>
    
    <div class='borStyle well'>
         <tr class="info"  id="<?php echo $row[' QueryId']; ?>">
         <td><a href="#" data-target="delete" data-role="reply" data-id="<?php echo $row['QueryId'] ;?>"><button  class='btn   btn-defualt btn-primary pull-right'> Reply</button></a></td><br><br>
         <td><a href="#" data-target="delete" data-role="Delete" data-id="<?php echo $row['QueryId'] ;?>"><button class='btn   btn-defualt btn-danger pull-right'> Delete</button></a></td><br><br>
              <span style="  background-color: aqua;"> <?php echo"<b>Name:</b>";?><td data-target="Name"><?php echo $row['Name']; ?></td> </span><br>
              <span style="  background-color: aqua;"><?php  echo"<b>ID:</b>";?> <td data-target="customerID"><?php echo $row['customerID']; ?></td> </span><br>
              <span style="  background-color: aqua;"><?php echo"<b>Date:</b>";?> <td data-target=" dateAndTime"><?php echo $row['dateAndTime']; ?></td> </span><br>
                <td data-target=" comment"><?php echo $row['comment']; ?></td><br>
                
        
        </tr>
    </div>
 <?php   }
 
}
?>
    
</div>  


<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        
        <div class="modal-content">
          <div id='model'style="text-align: center;background-color: burlywood;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-style: italic;" class="modal-header headerModel ">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Sending Email</h4>
          </div>
          <div class="modal-body">
              <input type="hidden" id="userID">
			  
              <div class="form-group">
                <label style="font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 15px; color: burlywood;">Message</label>
               
                <textarea style="font-style: italic; font-size:15px; color: burlywood;" name="message" id="message" cols="50" rows="14" placeholder="say somethings"></textarea>
              </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-envelope"></span>send</a>
            <button type="button" class="btn btn-default btn-danger pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
<div id='reply2'></div>
</body>
<script>
$(document).ready(function(){

$(document).on('click','a[data-role=reply]',function(event){

  var id2  = $(this).data('id');
    $('#myModal').modal('toggle');
    $('#userID').val(id2);




});


$('#save').click(function(){         

  var id2  = $('#userID').val();
var message =  $('#message').val();
if( message==''){
  alert("write somethings........!");
}else{
$.ajax({
    url      : 'mainCommentsViewEmailSent.php',
    method   : 'post', 
    data     : { message :message, id2: id2},
    success  : function(response){
      
      $('#myModal').modal('toggle');
      $('#reply2').modal(response);
      

    }
    });

  }
  });


});
</script>
</html>