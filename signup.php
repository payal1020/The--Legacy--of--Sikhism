<?php
    include('db.php');

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password= $_POST["password"];


        $query="INSERT into users(name,email,password) values ('$name', '$email','$password')";
        mysqli_query( $conn ,$query );
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title> 

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    padding-top:100px;
    align-items:center;
    background:url("https://images.pexels.com/photos/18275863/pexels-photo-18275863.jpeg?cs=srgb&dl=pexels-soubhagya23-18275863.jpg&fm=jpg")
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    background-attachment:fixes;
}
/* Header */
header{
    width:100%;
    height:80px;
    background:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 60px;
    position:fixed;
    top:0;
    left:0;
    z-index:100;
}

.logo h2{
    font-size:28px;
    letter-spacing:2px;
}

.logo span{
    font-size:10px;
    color:white;
    letter-spacing:3px;
}

nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin:0 15px;
}

nav ul li a{
    text-decoration:none;
    color:#333;
    font-size:14px;
    font-weight:bold;
}

nav ul li a:hover{
    color:#007BFF;
} 


/* Dark Overlay */
body::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
}

/* Login Box */
.login-box{
    position:relative;
    width:370px;
    padding:40px;
    margin-top:40px;
    background:rgba(255,255,255,0.15);
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.3);
    text-align:center;
    color:#fff;
    box-shadow:0 8px 25px rgba(0,0,0,0.4);
}

.login-box h1{
    font-size:32px;
    margin-bottom:10px;
}

.login-box p{
    margin-bottom:30px;
    font-size:15px;
    color:#f2f2f2;
}

.input-box{
    margin:18px 0;
}

.input-box input{
    width:100%;
    padding:14px;
    border:none;
    outline:none;
    border-radius:30px;
    background:rgba(255,255,255,0.85);
    font-size:16px;
}

.input-box input::placeholder{
    color:#555;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:30px;
    background:#ff9800;
    color:white;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
    margin-top:15px;
}

button:hover{
    background:#e68900;
    transform:scale(1.03);
}

.links{
    margin-top:20px;
}

.links a{
    color:white;
    text-decoration:none;
    font-size:15px;
}

.links a:hover{
    text-decoration:underline;
}

.footer{
    margin-top:25px;
    font-size:13px;
    color:#eee;
}

@media(max-width:450px){
    .login-box{
        width:90%;
        padding:30px;
    }
}
</style>

</head>
<body>
    <header>
    <div class="logo">
        <H2>The legacy of Sikhism</h2>
        <span></span>
    </div>

    <?php
        include('navbar.php');
    ?>

    
</header>

<div class="login-box">

<h1>🪯 Signup</h1>

<p>Welcome to Sikh Guru History</p>

<form method="post" action="signup.php">

<div class="input-box">
    <input type="text" name="name" placeholder="Name" required>
    </div>

    <div class="input-box">
    <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="input-box">
    <input type="password" name="password" placeholder="Password" required>
    </div>

    <button type="submit">Signup</button>

</form>


<div class="links">
<a href="login.php">Already have an account?</a>
</div>

<div class="footer">
© 2026 Sikh Guru History
</div>


</div>

</body>
</html>