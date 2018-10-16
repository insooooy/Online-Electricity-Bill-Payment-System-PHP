<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form</title>
	
	  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

   $(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});
</script>
<link rel="stylesheet" href="RegisHTML.css">
</head>
<body style="  background-image: url('image/coding-699318.jpg');">
<?php

include 'test2.php';
?>
	    <div class="container">

    <form class=" form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b style="color: white;font-style: italic;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">Registration Form</b></h2></center></legend><br>

<!-- Text input-->


<div class="form-group">
<span style="color:red;">*<?php

echo $usernameErr;
?></span>
  <label class="col-md-4 control-label " style=" font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:burlywood;" > Username:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group success">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="username" placeholder="New admin Username" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
<span style="color:red;">*<?php

 echo $passwordErr;
?></span>
  <label class="col-md-4 control-label"style=" font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:burlywood;" > Password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="New User password" class="form-control"  type="password">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <span style="color:red;">*<?php

 echo $departmentErr;
?></span>
  <label class="col-md-4 control-label" style="font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color: burlywood;">Department / Office:</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker">
      <option >Select your Department/Office</option>
      <option value="SE">Department of Engineering</option>
      <option  value="TO">Tresurer's Office</option>
      <option value="AO" >Accounting Office</option>
      <option  value="MPDC">MPDC</option>
      <option  value="MCTC">MCTC</option>
      <option  value="MCR">MCR</option>
      <option  value="MO">Mayor's Office</option>
      <option  value="Tourism Office">Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
<span style="color:red;">*<?php
 echo $username2Err;
?></span>
  <label class="col-md-4 control-label" style="font-style: italic; font-size: 15px;font-family: Arial, Helvetica, sans-serif; color:burlywood;">Username:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="username2" placeholder=" Admin Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
<span style="color:red;">*<?php
 echo $password2Err;
?></span>
  <label class="col-md-4 control-label"style=" font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:burlywood;" >Password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password2" placeholder=" Admin Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
<span style="color:red;">*<?php
echo $conpasswordErr;
 echo $passmatchErr;
?></span>
  <label class="col-md-4 control-label" style=" font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:burlywood;" >Confirm Password:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
	   <span style="color:red;">*<?php echo $emailErr;
 
?></span>
  <label class="col-md-4 control-label" style="font-style: italic; font-size: 15px; font-family: Arial, Helvetica, sans-serif; color:burlywood">E-Mail:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
<span style="color:red;">*<?php
 echo $contactErr;
?></span>
  <label class="col-md-4 control-label"style="font-style: italic; font-size: 15px;font-family: Arial, Helvetica, sans-serif; color:burlywood;">Contact No:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact" placeholder="(+92)" class="form-control" type="text">
    </div>
  </div>
</div>
<div class="form-group" style="margin-right:20px">
<span style="color:red;">*<?php
 echo $termErr;
?></span>
    
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="checkbox" name="terms"><b style=""><a href="http://">I accept Terms and Conditions</a> </b>
    </div>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="submit" type="submit" class="btn btn-danger" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegister Now <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
</body>