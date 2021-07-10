<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="./public/css/style.css">
<script src="./public/js/script_loginValidation.js"></script>


<div class="container">





<div class="card bg-light m-5">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Log In</h4>

	<form action="login_handler.php" name="regForm" method="POST"onsubmit="return validation()" >
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
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="password" type="password">
    </div> <!-- form-group// -->
     
    <div class="form-group">
        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block"/>
        <input type="reset" value="Clear" class="btn btn-primary btn-block" onclick="clear2();"/>

    </div> <!-- form-group// -->      
    <p class="text-center">Don't Have account? <a href="registration.php">sing on</a> </p>                                                                 
</form>
</article>
</div>

</div> 



</body>
</html>