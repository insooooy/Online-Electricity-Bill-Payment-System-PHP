<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mainCommentsCss.css">
  <script src="mainCommentsJs.js"></script>
</head>
<?php

date_default_timezone_set('Asia/Karachi');

?>
<body> 
<div class="container">
        <form action="#" method="post" id="form">
          <div class="form-group success row">
              <div class="col-sm-3">
                        <label for="inputSuccess" class="col-sm-6 col-form-label">Customer ID:</label><span class="mandatory">*</span>
                        <input  id="ID"  placeholder="Enter customer ID" type="text"  class=" form-control">
              </div>
           </div>
            <div class="form-group row">
                <div class="col-sm-3">
                       <label for="nic"  class="col-sm-7 col-form-label">Customer Name:</label><span class="mandatory">*</span>
                        <input type="text"  id="name" placeholder="Enter your Name" class="  form-control">
                </div>
            </div>
             <div class="form-group row">
                 <div >
             
                     <input type="hidden" name="date" id="date" value="<?php echo date('Y-m-d H-i-s')  ?>">
                 </div>
            </div>
            <div class="form-group">
                <div class="input-group">
    

                    <textarea name="message" id="message" cols="30" rows="10" placeholder="say somethings"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-2">
                    <button type="submit" id="submit" class="btn btn-danger">  <span class="glyphicon glyphicon-envelope"></span>Post It</button>
                </div>

          
            </div>
        </form>
        <div id="khan"></div>       
</div>
</body>
</html>