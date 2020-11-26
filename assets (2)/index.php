<?php



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Welcome come to test</title>
        <meta name='viewport' content='width=device-width'/>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
@media screen and (min-width: 0px) and (max-width : 500px){
   #bigger{
   display:none;
   }
   

}
@media screen and (min-width: 501px) and (max-width : 4500px){
  #mobile{display:none;}

}
</style>

        
        </head>
    <body style='text-align:center; font-family:times new roman; height:100%; width:100% '>
        <center  id='mobile' style='margin-top:14%;'><span style='font-size:32px'>Welcome To  Our Page </span> <br><br> <a class='btn btn-primary' href='signin.php'>LOG INTO YOUR ACCOUNT </a> <br><br> OR <br><br> <a class='btn btn-success' href='signup.php'>CREATE AN ACCOUNT</a></center>
     <center  id='bigger' style='margin-top:13%;'><span style='font-size:32px'>Welcome To  Our Page </span> <br><br> <a href='signin.php' class='btn btn-primary'>LOG INTO YOUR ACCOUNT </a> &nbsp OR &nbsp <a href='signup.php' class='btn btn-success'>CREATE AN ACCOUNT</a></center>
   
    </body>
</html>