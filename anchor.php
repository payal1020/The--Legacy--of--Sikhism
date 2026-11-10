<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Anchor_Home</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f5f5f5;
    padding-top:90px;
}

/* Navbar */
.navbar{
    width:100%;
    height:80px;
    background:#fff;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 50px;
    position:fixed;
    top:0;
    left:0;
    box-shadow:0 2px 10px rgba(0,0,0,0.2);
    z-index:1000;
}

/* Logo */
.logo h2{
    font-size:30px;
    color:#000;
}

.logo span{
    font-size:11px;
    color:#666;
    letter-spacing:3px;
}

/* Navigation */
nav ul{
    list-style:none;
    display:flex;
}

nav ul li{
    margin-left:25px;
}

nav ul li a{
    text-decoration:none;
    color:#000;
    font-size:15px;
    font-weight:bold;
    transition:0.3s;
}

nav ul li a:hover{
    color:#ff9800;
}

/* Button */
.btn{
    text-decoration:none;
    border:2px solid #000;
    color:#000;
    padding:10px 20px;
    border-radius:5px;
    transition:0.3s;
}

.btn:hover{
    background:#000;
    color:#fff;
}

/* Page Content */
.content{
    width:90%;
    margin:40px auto;
    text-align:center;
}

.content h1{
    color:#ff9800;
    margin-bottom:15px;
}
</style>

</head>
<body>
<header>
    <div class="logo">
        <H2>SIKH GURU HISTORY</h2>
        <span>KNOWLEDGE</span>
    </div>

    <?php
        include('navbar.php');
    ?>

</header>
<div class="content">
<h1>Welcome to Sikh Guru History</h1>
<p>Add your page content here.</p>
</div>

</body>
</html>