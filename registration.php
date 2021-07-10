<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="./public/js/script_registrationValidation.js"></script>

</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="./public/css/style.css">

<div class="container">





<div class="card bg-light m-5">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>

	<form action="registration_handler.php" method="POST" name="regForm" onsubmit="return validation()">
    
    <label for=""></label>
    <label for=""></label>

    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="firstName" class="form-control" placeholder="First name" type="text">
        <input name="lastName" class="form-control ml-1" placeholder="Last name" type="text">

    </div> <!-- form-group// -->

    <label for=""></label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <label for=""></label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+970</option>
		    <option value="1">+972</option>
		</select>
    	<input name="mobile" class="form-control" placeholder="Phone number" type="text">
	</div> <!-- form-group end.// -->
    <label for=""></label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="age" class="form-control" placeholder="Age" type="age">
    </div> <!-- form-group// -->
    <label for=""></label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
     
    <div class="form-group">
    <input type="submit" name="submit" value=" Create Account  " class="btn btn-primary btn-block"/>
        <input type="reset" value="Clear" class="btn btn-primary btn-block" onclick="clear2();"/>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div>

</div> 



</body>
</html>