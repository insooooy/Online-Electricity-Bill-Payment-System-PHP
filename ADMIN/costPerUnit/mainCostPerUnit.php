<!DOCTYPE html>
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title> Registration Form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script src="mainCostPerUnitJs.js"></script>
    </head>
    <?php
    
    session_start();
 if($_SESSION['adminID']==''){

  header('Location:../adminhtml.html');
 }
    ?>
    <body>
        <div class="container">
            <header>
                <h1>Bill Cost <span> Updation</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
            
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="#" id="form" method="POST" autocomplete="on"> 
                                <h1>Cost Per Unit Updation</h1> 
                                <p> 
                                    <label for="username" class="uname"  > 1 Kilowatt-hour(KWH)Cost</label>
                                    <input id="cost" name="username" required="required" type="text" placeholder="Enter Cost Per Unit... "/>
                                </p>
                                
                                
                                <p class="login button"> 
                                    <input type="submit"  id="update" value="Update" /> 
								</p>
                                <p class="change_link">
                                </p>
                                
                            </form>
                            
                        </div>
                        </div>
                        
                        <div id='result'></div>
						
                    </div>
                </div>  
            </section>
        </div>
        
    </body>
</html>