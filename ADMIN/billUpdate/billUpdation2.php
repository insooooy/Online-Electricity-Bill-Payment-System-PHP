<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<script src="billUpdationjs2.js"></script>

</head>
<body>
  
</body>
</html>


<?php
if(isset($_POST['submit'])){
    $customerIDErr='';
$name="";
$meter="";
$conn= mysqli_connect('localhost','root','','test');

//customer id
$nic=$_POST['customerID'];
$sql="SELECT * FROM registration WHERE NIC='$nic'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
  $NIC=$row['NIC'];
$name=$row['Name'];
$meter=$row['MeterNO'];
}?>

 <div   class="container-fluid">
  <div class="row">
   <div class="">
    <form class="  well form-horizontal" method="post" id="contact_form">




 <!-- Text input-->
 <div class="form-group">
  <label class="col-md-4 control-label" > Customer_ID: </label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <input readonly="readonly" style="border:none;  background-color:transparent;" id="NIC" name="customer"  value="<?php echo $NIC ?>"  class="form-control"  type="text">
    </div>
  </div>
</div
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" > Name: </label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <input readonly="readonly" style="border:none;  background-color:transparent;" id="Name" name="customer"  value="<?php echo $name ?>"  class="form-control"  type="text">
    </div>
  </div>
</div

<!-- Text input-->

<div class="form-group">

  <label class="col-md-4 control-label" > Meter_NO: </label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <input readonly="readonly" style="border:none;  background-color:transparent;" id="MeterNO" name="customer"  value="<?php echo $meter?>" class="form-control"  type="text">
    </div>
  </div>
</div
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Reference_ID: </label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <input  id="referenceID" name="referenceID"   class="form-control"  type="text">
    </div>
  </div>
</div

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" > Units: </label> 
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
  <input  id="Units" name="Units"   class="form-control"  type="text">
    </div>
  </div>
</div

<!-- Text input-->
<div class="form-group"> 
  <label class="col-md-4 control-label" >Month:</label>
    <div class="col-md-3 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   id="Month" name="Month" class="form-control selectpicker">
      <option value="Month" >Month</option>
      <option value="January ">January </option>
      <option  value="February">February</option>
      <option value="March " >March </option>
      <option  value="April ">April </option>
      <option  value="May">May</option>
      <option  value="June ">June </option>
      <option  value="July">July</option>
      <option  value="August">August</option>
	  <option  value="September">September</option>
	  <option  value="October">October</option>
	  <option  value="November">November</option>
	  <option  value="December ">December </option>
    </select>
  </div>
</div>
</div>
<!-- Text input-->
<div class="bootstrap-iso ">
     <div class="form-group ">
      <label class="control-label  col-md-4 " for="date">
      Due Date
      </label>
      <div class="col-md-3 inputGroupContainer">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>
       </div>
      </div>
     </div>
     </div> </div>

     <!-- button-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-3"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button  id="khan" name="submit" type="submit" class="btn btn-danger" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSearch <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
  
    </form>
   </div>
  </div>
 </div>
</div>
<div id='hh'></div>

<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

<?php



}else{

  echo"<script>
  alert('Sorry the Customer is not found thank you....!')
  </script>";
}
}
?>