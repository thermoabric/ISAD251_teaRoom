
<?php
session_start();


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fabulous tea rooms </title>

    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Work+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> 
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr.js"></script> 
	<link rel="stylesheet" href="css/login.css">
  

  <script src="js/jquery-2.1.4.js"></script>
	<script src="js/main.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>


  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.3.1.js"></script>
</head>
<body>
  
  <header>
	  
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><img src="images/logo_edit.png"  alt=""/><h1 class="navbar-brand navbar-brand2" href="#">Fabulous tea rooms</h1>
       	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       		<span class="navbar-toggler-icon"></span>
      	</button>
		  
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
         	<ul class="navbar-nav mr-auto">
          		<li class="nav-item active"> <a class="nav-link" href="index.php">Home</a> </li>
           		<li class="nav-item"> <a class="nav-link" href="#"><font color="white">Tea room near You </font></a> </li>
           		
             		<li class="nav-item"> <a class="nav-link" href="#"><font color="white">About Us</font> </a> </li>
					<li class="nav-item"> <a class="nav-link" href="Registration.php"><font color="white">Register</font> </a> </li>
           	
         	</ul>
		
			<span class="nav-item"><a class="nav-link" href="#"><font color="white">My basket</font></a></span> 
			<span class="nav-item"><a class="nav-link" href="#"><font color="white">My Account</font></a></span>    
		<font color="white">	
	<?php 
  if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']  ==true)
    { 

      echo $_SESSION["email"] 	;
    
    }
  elseif (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']  ==false)
    {
      echo '<a href="registration.php"><span></span></a></li>';
    }
  ?>
  </font>	
  <?php
   if(isset($_SESSION['email'])){ ?>
 
    
  <span class="nav-item"><a class="nav-link" href="logout.php" style="text-decoration:none"><font color="white">Logout</font></a></span>
  
<?php }else{ ?>
 <span class="nav-item"><a class="nav-link" href="login.php" style="text-decoration:none"><font color="white">Login</a></span>
<?php } ?>



		</div>	
    </nav>
	
	
    
	
	
	
	
	
	
	
	