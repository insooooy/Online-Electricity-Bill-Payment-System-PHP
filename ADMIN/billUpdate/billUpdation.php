<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
<?php
session_start();
if($_SESSION['adminID']==''){

 header('Location:../adminhtml.html');
}
$customerIDErr="";
?>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="billUpdationjs.js"></script>
  <link rel="stylesheet" href="billUpdationCss.css">
</head>
<body style="  background-color: rgba(128, 128, 128, 0.548);">
	
<div class="container">

<form class=" well form-horizontal" action=" " method="post"  id="contact_form">
	
<div class='billHead'> <span> Bill Calculation</span> </div>
<br /><br />
<!-- Text input-->
<div class="form-group">
<span style="color:red;">*<?php

echo $customerIDErr;
?></span>
  <label class="col-md-4 control-label" > Customer ID: </label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  id="customerID" name="customerID" placeholder="Customer ID" class="form-control"  type="text">
    </div>
  </div>
</div

<!-- button-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-3"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button  id="search" name="submit" type="submit" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
<!-- Text input-->
<!-- Text input-->
<!-- Text input-->
<!-- Text input-->
<!-- Text input-->
<!-- Text input-->

</form>
<?php
include 'billUpdation2.php';
?>
</div>
</body>



</html>