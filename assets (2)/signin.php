<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
session_start();
require('../controller/in.php');
$app = new Controller();

if (isset($_POST['sub'])){
    $account = $_POST['account'];
    $password = $_POST['password'];
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $app->loginUser($account, $password);
}


?>




<!DOCTYPE html>
<html>
<head>
<style type="text/css">
@media screen and (min-width: 501px) and (max-width : 55500px){
.row{width:500px; margin-top:16%; border:0.65px solid lightgrey; border-radius:10px;padding:20px; }
#sub{text-align:center;}
.container{
   
}
}
@media screen and (min-width: 0px) and (max-width :500px){
    .row{width:90%; margin-left:2.5%; margin-top:22%; padding:10px}
    form div{
    margin-top:10px
    }
}
body{
    text-align:center;
}

</style>
<title>signup page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>


<div class="container">
<center><div class="row">
    <img src='assets/logo.png' style='height:150px; width:220px' alt='company logo'/><br>
<form method="post" action="" />
<div class='form-group'>
<div class="col-lg-6">
<input type='email' placeholder="Email" id="email" name="account" required class='form-control' autofocus>
</div>

<div class="col-lg-6">
<input type='password' placeholder="password" id="password" name="password" required class='form-control'>
</div>

<div class='col-lg-12 text-center'>
<br>
<center><button type="submit" class="btn btn-success text-center" id="sub"  name='sub'>Sign-in</button> &nbsp <a href='index.php' class='btn btn-default'>Home</a> </center>
</div>
</div>
</form>
</div>
</center>
</div>








</body>