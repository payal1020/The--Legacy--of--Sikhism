<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sikh Guru History</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

html{
    scroll-behavior:smooth;
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
    color:#000;
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
    color:#ff9933;
}

.btn{
    text-decoration:none;
    color:#000;
    border:2px solid #000;
    padding:10px 20px;
    transition:.3s;
}

.btn:hover{
    background:#000;
    color:#fff;
}

/* Hero Section */

.hero{
    height:100vh;
    background:url("images/history.jpg") no-repeat center center/cover;
}

.overlay{
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.55);
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.content{
    color:#fff;
    width:70%;
}

.content h1{
    font-size:60px;
    margin-bottom:20px;
}

.content p{
    font-size:20px;
    line-height:1.8;
    margin-bottom:30px;
}

.hero-btn{
    text-decoration:none;
    color:#fff;
    border:2px solid #fff;
    padding:15px 30px;
    transition:.3s;
}

.hero-btn:hover{
    background:#fff;
    color:#000;
}

/* History Section */

.history{
    display:flex;
    justify-content:space-between;
    gap:25px;
    padding:70px 60px;
    background:#f4f4f4;
}

.box{
    flex:1;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
    transition:.3s;
}

.box:hover{
    transform:translateY(-10px);
}

.box h2{
    color:#ff9933;
    margin-bottom:15px;
}

.box p{
    color:#555;
    line-height:1.8;
}

/* Footer */

footer{
    background:#000;
    color:#fff;
    text-align:center;
    padding:20px;
    font-size:16px;
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

<section class="hero">

<div class="overlay">

<div class="content">

<h1>SIKH GURU HISTORY</h1>

<p>
sikhism is one of the world's major religions.it was founded by Guru Nanak Dev Ji in the punjab region in the 15th century. sikhism teachrs belief in one God (ik onkar),equality of all people,honest living,selfless service 
(seva),and remembring God through prayer.the religion was guided by 10 Sikh Gurus.in 1708, Guru Gobind Singh Ji declared Guru Granth Sahib Ji as the internal Guru of Sikhs .
</p>

<a href="#history" class="hero-btn">Explore History</a>

</div>

</div>

</section>

<section class="history" id="history">

<div class="box">
<h2>History of Sikhism</h2>
<p>
Sikhism was founded by Guru Nanak Dev Ji in the 15th century. It teaches belief in one God, equality, honesty, kindness, and selfless service to humanity.
</p>
</div>

<div class="box">
<h2>Ten Sikh Gurus</h2>
<p>
The Ten Sikh Gurus guided the Sikh community from Guru Nanak Dev Ji to Guru Gobind Singh Ji. Their teachings continue through Guru Granth Sahib Ji.
</p>
</div>

<div class="box">
<h2>Sikh Values</h2>
<p>
The core values of Sikhism include Naam Japna, Kirat Karni, Vand Chhakna, equality, compassion, and service to humanity.
</p>
</div>

</section>

<footer>
<p>© 2026 Sikh Guru History | Educational Project</p>
</footer>

</body>
</html>