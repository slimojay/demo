<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
session_start();
require('../controller/in.php');
$app = new Controller();
$id = $_SESSION['id'];
//echo $id;
$app->auth($_SESSION['user']);
?>





<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
@media screen and (min-width: 501px) and (max-width : 55500px){
#logo{
    margin-left:25px; margin-top:10px;
    
}

.displaydivs {font-weight:500; font-size:17px; font-family:times new roman; text-align:center; margin-left:18px; width:320px;
box-shadow:3px 3px 12px 3px gold; border-radius:12px; }
.displaydivs p{font-weight:400; font-size:16px; font-family:times new roman; text-align:center;}
.sp{font-weight:500; font-size:17px; font-family:times new roman; text-align:center;}
#greydiv{height:300px; width:100%; padding:10px; background-color:dimgrey}
#dp {display:none;}
#list{
    border-radius:12px; position:relative; bottom:120px; z-index:555555555555555; border:0.5px solid black; color:black; width:80%; opcaity:1; padding:30px; background-color:white;
}

}

@media screen and (min-width: 0px) and (max-width :500px){
    .displaydivs {font-weight:500; font-size:17px; font-family:times new roman; text-align:center; margin-left:5%; width:90%; margin-top:30px; 
box-shadow:3px 3px 12px 3px gold; border-radius:12px; }
    #list{position:relative; top:-120px;}
   #greydiv{ height:200px; width:100%; padding:10px; background-color:dimgrey}
   #logo{
    margin-left:10px; margin-top:6px; 
    
}
#dp {display:block; left:85%; top:10px; position:absolute; float:right; z-index:3333333;}
body{width:100%;}
 
}
body{
    text-align:center;
}

</style>
<title>Profile page</title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device width, initial-scale=1.0">

   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
          
<meta name="viewport" content="width=device-width"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel = "stylesheet"
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    </head>
    <body style='text-align:center'>
        <div style='margin-top:-10px'>
            <p>
                
                	<div class="dropdown" id='dp'>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
   <i class='fa fa-bars'></i>
  </button>
  <center class="dropdown-menu" style='width:300px; font-size:15px; text-align:center; position:relative'><div>
    <p><a class="dropdown-item" href="#">Edit Profile</a></p>
    <p><a class="dropdown-item" href="#">About us</a>
    <p><a class="dropdown-item" href="#">Contact us</a>
    <p><a class="dropdown-item" href="logout.php">Logout</a>
  </div></center>
</div>
           
               	  <nav class="center col l-12 nav-wrapper grey lighten-5 nav-fixed " id="nav" style='position:fixed; z-index:100; font-family:times new roman; margin-top:0px'>
    <div class="">
	&nbsp &nbsp <img class="responsive-img left hide-on-med-and-don" height='40px' width='60px' src="assets/logo.png" id='logo'/>&nbsp &nbsp </a> <a href='profile.php'><b class="left green-text text-light-5 " style="margin-left:7px" id='bab-txt'> <span style='color:maroon; font-size:25px; font-weight:900; font-family:times new roman '> Global Enterprise </span></b></a>
	
      <div class="right hide-on-med-and-down" style='margin-right:25px; margin-left:10px;'>
          	<?php
          	echo '<span><a href="#" class="white green-text  btn waves-effect waves-light hide-on-medium-and-down">' . $_SESSION['user']. '</a></span>';
          	
          	if ($_SESSION['role'] == 'mentor'){
		    echo '<span><a href="#" class="white green-text  btn waves-effect waves-light hide-on-medium-and-down">Add Mentee</a></span>';
		}else if($_SESSION['role'] == 'mentee'){
		      echo '<span><a href="#list" class="white green-text  btn waves-effect waves-light hide-on-medium-and-down">Mentors</a></span>';
		}
		?>
        <span><a href="#" class="white green-text  btn waves-effect waves-light hide-on-medium-and-down">Edit Profile</a></span>
        <span><a href="#about-us" class="white green-text  btn waves-effect waves-light hide-on-medium-and-down">about us</a></span>
        <span><a href="#contact-us" class="white green-text btn waves-effect waves-light hide-on-medium-and-down">contact us</a><span> 
		
		
		<?php 

			
	echo '	<a href="logout.php" class="btn black lighten-2 white-text waves-effect waves-light hide-on-med-and-down"> Logout</a>';
		
		?>
		
	

       </p> </div>
       <div id='greydiv'>
            
       </div>
       <center><div id='list' style''>
        
           <div class='row black-text'>
           <?php $app->showList($_SESSION['role'], $id); ?>
       </div>
       </div>
       </center>
        
        
    </body>
</html>



