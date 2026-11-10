<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ten Sikh Gurus</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    padding-top:60px;
    background:#f4f4f4;
}
.container{
    margin-top:50px;
}
h1{
    text-align:center;
    margin:30px 0;
    color:darkblue;
}

.guru-section{
    display:flex;
    flex-wrap:wrap;
    justify content:center;
    gap:20px;
    padding:20px

}

.card{
    width:300px;
    background:white;
    border: radius 12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
    padding:20px;
    text-align:center;
    transition:.3s;
}

.card:hover{
    transform:scale(1.05);
}

.card img{
    width:200px;
    height:200px;
    border-radius:10px;
    object-fit:cover;
    display:block;
    margin:0 auto;
}

.card h2{
    margin-top:15px;
    color:darked;
    
}

.card p{
    margin-top:10px;
    color:#555;
    font-size:16px;
    line-height:24px;
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
</style>

</head>
<body>

<header>
    <div class="logo">
        <H2>The legacy of Sikhism</h2>
        <span>KNOWLEDGE</span>
    </div>

    <?php
        include('navbar.php');
    ?>


</header>
<div class="container">

<div class="guru-section">

<div class="card">
<img src="https://www.bing.com/th/id/OIP.EE2OheJAePVcnIzcFGifRAHaJM?w=193&h=240&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2"
<h2>Guru Nanak Dev Ji</h2>
<p class="years">(1469-1539)</p>
<p>Founder of Sikhism. He taught equality, honesty, and devotion to one God.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.X-22X27i-KN2mc3Xy4MaaAHaK8?w=193&h=285&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2" 
<h2>Guru Angad Dev Ji</h2>
<p class="years">(1504-1552)</p>
<p>Introduced the Gurmukhi script and promoted education.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.BNzvQcN7bNnsIcWGZ563LwHaK3?w=193&h=283&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2" 
<h2>Guru Amar Das Ji</h2>
<p class="years">(1479-1574)</p>
<p>Promoted equality and strengthened the Langar tradition.</p>
</div>

<div class="card"> 
<img src="https://www.bing.com/th/id/OIP.JaghFsb8B_qb1AGULAbhVQHaHa?w=193&h=193&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2"
<h2>Guru Ram Das Ji</h2>
<p class="years">(1534-1581)</p>
<p>Founded the city of Amritsar and encouraged humility.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.9twkrEaoqSNW_N4JXfc2awAAAA?w=193&h=211&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2"
<h2>Guru Arjan Dev Ji</h2>
<p class="years">(1563-1606)</p>
<p>Compiled the Adi Granth and built Harmandir Sahib.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.oceN3OF2FOWsZr78D1P77AHaNK?w=193&h=333&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2"
<h2>Guru Hargobind Ji</h2>
<p class="years">(1595-1644)</p>
<p>Introduced the concept of Miri and Piri.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.bdnNFWgQXRvo-ksE1RMW3gAAAA?w=193&h=246&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2" 
<h2>Guru Har Rai Ji</h2>
<p class="years">(1630-1661)</p>
<p>Known for kindness, environmental care, and helping others.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.WW6JGji7ZqWWypxZuVabUwHaEh?w=193&h=135&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2" 
<h2>Guru Har Krishan Ji</h2>
<p class="years">(1656-1664)</p>
<p>Served people suffering from illness despite his young age.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP.IgwIIcO_b8c-VPCsqEi5JAHaFj?w=193&h=145&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2" 
<h2>Guru Tegh Bahadur Ji</h2>
<p class="years">(1621-1675)</p>
<p>Remembered for sacrificing his life to protect religious freedom.</p>
</div>

<div class="card">
<img src="https://www.bing.com/th/id/OIP._E4pDUdRzmFhQJdbS9DBCQHaJQ?w=193&h=241&c=8&rs=1&qlt=90&r=0&o=6&pid=ImgAns&rm=2"
<h2>Guru Gobind Singh Ji</h2>
<p class="years">()1666-1708</p>
<p>Founded the Khalsa in 1699 and declared Guru Granth Sahib Ji as the eternal Guru.</p>
</div>

</div>

</div>

<footer>
<p>© 2026 Sikh Guru History | created by payal</p>
</footer>

</body>
</html>