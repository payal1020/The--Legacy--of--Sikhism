<?php
echo "hello";
$hostname="localhost";
$username="root";
$password="";
$db="the_legacy_of_sikh";
$conn=mysqli_connect( $hostname,$username ,$password,$db);

if($_SERVER['REQUEST_METHOD']==="POST"){
    $id=$_POST["id"];
    $email=$_POST["email"];
    $user_password= $_POST["password"];
    $fullname=$_POST["fullname"];


    $query="INSERT into users(id,fullname,email,password) values ($id,'$fullname', '$email','$user_password')";
    mysqli_query( $conn ,$query );
    echo "data inserted sucesfully!!!!!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php "method="post">
        <input type="number"name="id" placeholder="enter your id">
        <input type="text"name="fullname" placeholder="enter your fullname">
        
        <br>

        <input type="text" name="email" placeholder="enter your email">
        <input type="text"name="password" placeholder="enter your password">
        <br>
        <button type="submit">INSERT</button>
</form>
    </body>
</html>