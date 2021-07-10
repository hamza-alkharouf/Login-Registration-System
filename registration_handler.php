<?php 


$firstName='';
if(isset($_POST['firstName'])){
    $firstName=$_POST["firstName"];

}
$lastName='';
if(isset($_POST['lastName'])){
    $lastName=$_POST["lastName"];

}
$email='';
if(isset($_POST['email'])){
    $email=$_POST["email"];

}
$mobile='';
if(isset($_POST['mobile'])){
    $mobile=$_POST["mobile"];

}
$age='';
if(isset($_POST['age'])){
    $age=$_POST["age"];

}
$password='';
if(isset($_POST['password'])){
    $password=$_POST["password"];

}


include "./config.php";

$inserUser = "INSERT INTO users(firstName, lastName, email, mobile, age, password) values('$firstName', '$lastName', '$email', '$mobile', '$age', '$password' ) ";
$res = mysqli_query($con, $inserUser);

if(isset($_POST['submit'])){
    if ( $res ){
        header('Location: login.php');
    }else{
        echo "Error:".mysqli_error($con);
    
    }
}


?>
