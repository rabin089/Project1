<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];

    //  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$connection=mysqli_connect('localhost','root','','user_management');
$query = "INSERT INTO user_details(user_name, email_address, password) VALUES ('$name','$email','$password')";
$result= mysqli_query($connection,$query);
 if($result){
    header("Location:loginForm.html");
 }
 else{
    echo "Failed to connect";
 }
}

?>