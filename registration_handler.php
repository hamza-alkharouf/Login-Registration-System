<?php 


$firstName = '';
if(isset($_POST['firstName'])){
    $firstName = $_POST["firstName"];

}
$lastName = '';
if(isset($_POST['lastName'])){
    $lastName = $_POST["lastName"];
 
}
$email = '';
if(isset($_POST['email'])){
    $email = $_POST["email"];

}
$mobile = '';
if(isset($_POST['mobile'])){
    $mobile = $_POST["mobile"];

}
$age = '';
if(isset($_POST['age'])){
    $age = $_POST["age"];

}
$password = '';
if(isset($_POST['password'])){
    $password = $_POST["password"];
    $passwordHashed = password_hash($password , PASSWORD_DEFAULT);

}


include "./config.php";

$inserUser = "INSERT INTO users(firstName, lastName, email, mobile, age, password) values( ? , ? , ? , ? , ? , ? ) ";
$stmt = mysqli_prepare($con, $inserUser);
mysqli_stmt_bind_param($stmt ,"ssssss",$firstName,$lastName,$email,$mobile,$age ,$passwordHashed);
$result = mysqli_stmt_execute($stmt);

if(isset($_POST['submit'])){
    if ( $result ){
        header('Location: login.php');
    }else{
        echo "Error:".mysqli_stmt_error($stmt);
    
    }
}


?>
