<?php

session_start();

$con = mysqli_connect('localhost', 'root', ''); 
mysqli_select_db($con, 'anshuman');

$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from users where email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION ['email'] = $email;
    echo '<script>window.location.href="index.php"</script>';
}
else{
    echo '<script>alert("Login not successful, Please try again ")</script>';
    echo '<script>window.location.href="login.php"</script>';
}

?>