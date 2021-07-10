<?php 


$email='';
if(isset($_POST['email'])){
    $email=$_POST["email"];

}

$password='';
if(isset($_POST['password'])){
    $password=$_POST["password"];

}


include "./config.php";

$login = "SELECT email,password FROM users WHERE email = '$email' and password = '$password'";
$res = mysqli_query($con, $login);


$count = mysqli_num_rows($res);
    
if($count ==1){
    session_start();
    $_SESSION["loggedUser"] = $email;
    header('Location: profile.php');
}else{
    echo "invalid email and password";
}

?>
