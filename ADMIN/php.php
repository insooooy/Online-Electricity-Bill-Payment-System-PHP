<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Registration Form</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CustomerRECSS.css">

</head>
<?php

include 'customerPhp.php';

?>
<body>
	<div class="container">
  <div class="row">
  <form action=""  method="post" class="col-xs-12 col-sm-12 col-md-12">
 
  <h2>Please fill all mandatory(*) fields</h2>
  <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder=" Enter Customer Name *" name="name" required>
    </div>
	 <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder=" Enter Father-Name *" name="fname" required>
    </div>

	<div class="form-group">
      <input type="text" class="form-control" id="surname" placeholder="Enter NIC NO *" name="NIC" required>
    </div>
    <div class="form-group">
    	<select name="gender" class="form-control" placeholder="seclet gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
 
</select>
<?php

echo $name;
?>

<div class="form-group">
      <input type="text" class="form-control" id="name" placeholder=" Enter Meter-NO *" name="meterNO" required>
    </div>
    </div>
		<div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email *" name="email" required>
    </div>
	<div class="form-group">
      <input type="text" class="form-control" id="pwd" placeholder="Enter Address *" name="address" required>
   </div>

    <button type="submit" class="btn btn-success">Submit <i class="glyphicon glyphicon-send"></i></button>
  </form>
  </div>
</div>
</body>
</html>