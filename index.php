<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#ffffff;
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
    position:absolute;
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

.btn{
    text-decoration:none;
    color:#000;
    border:2px solid #000;
    padding:10px 20px;
    transition:0.3s;
}

.btn:hover{
    background:#000;
    color:#fff;
}

/* Hero Section */
.hero{
    height:160vh;
    background:url("images/golden-temple.jpg") no-repeat center center/cover;
}

.overlay{
    width:100%;
    height:100%;/*
    background:rgba(0,100,200,0.45);*/
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.content{
    color:#fff;
}

.content h1{
    font-size:60px;
    letter-spacing:5px;
    margin-bottom:20px;
}

.content p{
    font-size:18px;
    margin-bottom:30px;
}
.hero p{
    font-size:20px;
    line height:40px;
    /*space*/
    max-width:1000px;
    margin:20px auto;
    color:white;
    text-align:center;
}
.hero{
    margin-bottom:20px;
}

.hero-btn{
    display:inline-block;
    text-decoration:none;
    color:#fff;
    border:2px solid #fff;
    padding:15px 30px;
    transition:0.3s;
}

.hero-btn:hover{
    background:#ffffff;
    color:#000;
}
</style>

</head>
<body>

<header>
    <div class="logo">
        <H2>The legacy of Sikhism </h2>
        <span></span>
    </div>

    <?php
        include('navbar.php');
    ?>

</header>

<section class="hero">
    <div class="overlay">
        <div class="content">
            <h1> Welcome to "The Legacy of Sikhism"</h1>
            <p>—A journey through the rich history, timeless teachings, and inspiring legacy of the Sikh Gurus. Discover the values of faith, equality, courage, compassion, and selfless service that have shaped Sikhism and continue to inspire people across the world. Explore the lives of the Ten Sikh Gurus, sacred Gurdwaras, and the heritage that stands as a symbol of unity, peace, and humanity.</p>
            <p>"Faith • Courage • Equality • Service"</p>
        </div>
    </div>
</section>

</body>
</html>