<?php 


$email='';
if(isset($_POST['email'])){
    $email = $_POST["email"];

}

$password='';
if(isset($_POST['password'])){
    $password = $_POST["password"];

}


include "./config.php";
//MySQLi Prepared Statements

$login = "SELECT email,password FROM users WHERE email = ? ";
$stmt = mysqli_prepare($con, $login);
mysqli_stmt_bind_param($stmt ,"s",$email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$count = mysqli_stmt_num_rows($stmt );
    
if($count == 1){
    mysqli_stmt_bind_result($stmt,$rowEmail,$rowPassword);
    mysqli_stmt_fetch($stmt);
    if (password_verify($password ,$rowPassword )){
        session_start();
        $_SESSION["loggedUser"] = $email;
        if($rowEmail == 'admin@gmail.com'){
            header('Location: adminProfile.php');
        }else{
            header('Location: userProfile.php');

        }
    }else{
        header('Location: login.php');
        echo "invalid email and password";
    }
}

?>
