<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
require('../controller/in.php');
$app = new Controller();

if (isset($_POST['sub'])){
   
     if (ctype_space($_POST['fname']) || ctype_space($_POST['lname']) || ctype_space($_POST['email'])){
           echo 'make sure firstname, lastname and email fields are not empty';
           exit;
       }
       $name = $_POST['fname'] . $_POST['lname'];
       $email = $_POST['email'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'this email address looks invalid';
		exit;
	}
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
       if (strlen($_POST['pass'] > 7)){
           echo 'password is too short, try at least 8 chars in length ' . strlen($_POST['pass']);
           exit;
       }
       if ($_POST['re-pass'] !== $_POST['pass']){
           echo 'passwords did not match';
           exit;
       }
       $role = $_POST['role'];
       $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
       $date =  date('l-d-m-Y H:i:s'); $last_login = '';
   
       $app->createAccount($name, $email, $password, $role, $date, $last_login);
}


?>




<!DOCTYPE html>
<html>
<head>
<style type="text/css">
@media screen and (min-width: 501px) and (max-width : 55500px){
.row{width:500px; margin-top:7%; border:0.65px solid lightgrey; border-radius:10px;padding:20px; }
#sub{text-align:center;}
#email{width:200px;}
form div{
    margin-top:17px
    }
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
    text-align:center; font-family:times new roman;
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
<input type='text' placeholder="Firstname" id="fname" name="fname" required class='form-control' autofocus>
</div>

<div class="col-lg-6">
<input type='text' placeholder="Lastname" id="lname" name="lname" required class='form-control' autofocus>
</div>

<div class="col-lg-6">
<input type='password' placeholder="password" id="password" name="pass" required class='form-control'>
</div>

<div class="col-lg-6">
<input type='password' placeholder="retype-password" onkeyup='comparePass()' id="re-password" name="re-pass" required class='form-control'>
</div>

<div class="col-lg-6">
<input type='email' placeholder="Your Email Address" id="email" name="email" required class='form-control' autofocus>
</div>

<div class="col-lg-6">
    <select name='role' required class='form-control'>
        <option value=''>select category</option>
        <option value='mentor'>mentor</option>
        <option value='mentee'>mentee</option>
    </select>
</div>
<div class='col-lg-12 text-center'>
<span id='display'></span><br>
<center><button type="submit" class="btn btn-success text-center" id="sub"  name='sub'>Sign-Up</button> &nbsp <a href='index.php' class='btn btn-default'>Home</a> </center>
</div>
</div>
</form>
</div>
</center>
</div>





<script>
    var pw = document.querySelector('#password')
    var re = document.querySelector('#re-password')
    function comparePass(){
        if (re.value !== pw.value){
            document.getElementById('display').style.color = 'red'
            document.getElementById('display').innerHTML = 'passwords do not match';
        }else{
            document.getElementById('display').style.color = 'green'
            document.getElementById('display').innerHTML = 'password correctly retyped';
        }
    }
</script>


</body>
