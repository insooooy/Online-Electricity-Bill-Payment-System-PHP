<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
  </script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="mainPaymentCss.css">

<script src="mainBillHistoryJs.js"></script>
<link rel="stylesheet" href="mainBillHistoryCss.css">

</head>
<body style="background-color:gray;">

	    <div class="container">

    <form class="well form-horizontal" action=" #" method="post"  id="contact_form">




<div style="margin-top:50px" class="form-group">
<span style="color:red;">*<?php


?></span>
  <label class="col-md-4 control-label"  > Reference ID:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  id='getid' name="refernceid" placeholder="Bill reference ID" class="form-control "  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button  id='press' name="submit" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
</form>
<?PHP



include 'mainBillHistoryDB.php';



session_start();
?>