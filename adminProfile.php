<?php
    session_start();
    if( !isset($_SESSION["loggedUser"])){
        header('Location: login.php');

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Profile</title>
</head>
<body>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="./public/css/style.css">
<script src="./public/js/script_loginValidation.js"></script>
<?php
    include "./config.php";
    $email = $_SESSION["loggedUser"];
    $viewUser = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $viewUser);
    if (!$result){
        echo "ERROR:".mysqli_error($con);
    }
    $row = mysqli_fetch_array($result);
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $mobile = $row["mobile"];
    $age = $row["age"];
?>

<div class="container" style="text-align: center;">
    <div class="card bg-light m-5">
        <h1>admin Profile</h1>
        <hr>
        <label for="">firstName:</label>
        <p><?php echo "$firstName"; ?></p>
        
        <label for="">lastName:</label>
        <p><?php echo "$lastName"; ?></p>
        
        <label for="">email:</label>
        <p><?php echo "$email"; ?></p>

        <label for="">age:</label>
        <p><?php echo "$age"; ?></p>

        <label for="">mobile:</label>
        <p><?php echo "$mobile"; ?></p>


        <div class="form-group">
            <a href="logout.php">Click here to logout</a>
    </div> <!-- form-group// -->      
    </div>
</div> 



</body>
</html>