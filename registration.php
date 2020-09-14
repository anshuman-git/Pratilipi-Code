<?php

session_start();


$con = mysqli_connect('localhost', 'root', ''); 
mysqli_select_db($con, 'anshuman');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from users where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
    echo '<script>alert("Email already exists, please register using different Email ID ")</script>';
    echo '<script>window.location.href="register.php"</script>';
    
}
else{
    $reg = "insert into users (username, email, password) values ('$username', '$email', '$password')";
    mysqli_query($con, $reg);
    echo '<script>alert("Your registration is successful, kindly login to access homepage ")</script>';
    echo '<script>window.location.href="login.php"</script>';
}

?>