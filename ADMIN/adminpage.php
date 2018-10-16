<!DOCTYPE html>

<?php


session_start();
 if($_SESSION['adminID']==''){

  header('Location:login.html');
 }
?>
<html lang="en">

    <head>
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>adminform</title>

        <!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    
    	<!-- Top content -->
        <div class="top-content">
        
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="customer/CustomerRegistration.php">Registration</a></li>
							<li><a href="VeiwCustomer/ixax.php">Veiw Customer</a></li>
							<li><a href="adminView/mainAdminView.php">Admin List</a></li>
							<li><a href="billUpdate/billUpdation.php">Bill Calculation</a></li>
							<li><a href="costPerUnit/mainCostPerUnit.php">Cost Per Unit Updation</a></li>
							<li><a href="commentView/mainCommentsView.php">Veiw Comments</a></li>
							<li><a href="logoutAdmin/logout.php">  Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
        
        	<div class="top-content-container">
	        	<div class="container">
					<div class="row">
						<div class="col-sm-12 text wow fadeInLeft">
							<h1 class="large-paragraph">Well Come To Admin Panel</h1>
							<div class="description">
								<p class="medium-paragraph">
									
								</p>
							</div>
						</div>
					</div>
	            </div>
            </div>
            
        </div>
        <div class="">
		
		<footer style=" background-color:rgba(128, 128, 128, 0.781);
  border-top: 2px solid rgb(40, 31, 162);
  color: rgba(255, 255, 255, 0.061);">   
		
		
		<div id="content_footer"></div>
    <div id="footer">
      <p style="color:black;" ><a href="index.html" style="color:black;">Home</a> | <a style="color:black;" href="examples.html">Examples</a> | <a href="page.html" style="color:black;">A Page</a> | <a style="color:black;" href="another_page.html">Another Page</a> | <a style="color:black;" href="contact.html">Contact Us</a></p>
      
    </div>
		
		
		</footer>
		
		
		</div>
    
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
    
    </body>

</html>