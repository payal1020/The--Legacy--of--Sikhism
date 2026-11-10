<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>12 Famous Gurudwaras</title>

<style>
    
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#ffffff;
    padding-top:90px;
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
    color:#white;
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
    background:url("https://assets.cntraveller.in/photos/6368e175b1a90c7bd3798f45/master/w_1600%2Cc_limit/golden-temple-1.jpg") no-repeat center center/cover;
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

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f8f8f8;
}

header{
    background:#ff9933;
    color:white;
    text-align:center;
    padding:25px;
}

header h1{
    font-size:40px;
}

header p{
    margin-top:10px;
    font-size:18px;
}

.container{
    width:90%;
    margin:100px auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.card{

    margin-top:0px;
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
    transition:0.4s;
}

.card:hover{
    transform:scale(1.05);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h2{
    text-align:center;
    color:#ff6600;
    margin:15px 0;
}

.card p{
    padding:0 15px 20px;
    text-align:center;
    color:#444;
    line-height:1.6;
}

footer{
    background:#222;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:30px;
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
<!--<header>
<h1>10 Famous Gurudwaras</h1>
<p>Important Sikh Pilgrimage Places</p>
</header>-->

<div class="container">

<div class="card">
<img src="https://www.discoversikhism.com/images/gurdwara/sri_akal_takht/sri_akal_takht2.jpg" alt="">
<h2>Takht Sri Akal Takht Sahib</h2>
<p>located in amritsar punjab,established by Guru Hargobind Sahib Ji in 1606.</p>
</div>

<div class="card">
<img src="https://th.bing.com/th/id/R.c2634601efad55669dc3d52908a0201e?rik=4ONfIBLVsN4OtA&riu=http%3a%2f%2fdiscoversikhism.com%2fimages%2fgurdwara%2ftakht_sri_keshgarh_sahib%2ftakht_sri_keshgarh_sahib4.jpg&ehk=tPSVSgmKIaQZpplV1i9dJdqXp326X1KDbzW%2f6JV5NcE%3d&risl=&pid=ImgRaw&r=0" alt="">
<h2>Takht Sri Keshgarh Sahib</h2>
<p>Located in Anandpur Sahib where the Khalsa was founded in 1699.</p>
</div>

<div class="card">
<img src="https://dsgmc.in/Content/images/gurdwara-damdama-sahib-2.jpg" alt="">
<h2>Takht Sri Damdama Sahib</h2>
<p>Located in Talwandi Sabo, one of the five Takhts of Sikhism.</p>
</div>

<div class="card">
<img src="https://discoversikhism.com/images/gurdwara/takht_sri_hazur_sahib/takht_sri_hazur_sahib2.jpg" alt="">
<h2>Takht Sri Hazur Sahib</h2>
<p>Located in Nanded, Maharashtra. Associated with Guru Gobind Singh Ji.</p>
</div>

<div class="card">
<img src="https://hblimg.mmtcdn.com/content/hubble/img/patna/mmt/activities/m_activities_patna_takht_sri_patna_sahib_l_453_604.jpg" alt="">
<h2>Takht Sri Patna Sahib</h2>
<p>located in Patna,Bihar .it is the birthplace  of Guru Gobind Singh Ji .</p>
</div>

<div class="card">
<img src="https://www.discoversikhism.com/images/gurdwara/gurdwara_sri_fatehgarh_sahib/gurdwara_sri_fatehgarh_sahib9.jpg" alt="">
<h2>Sri Fatehgarh Sahib</h2>
<p>Built in memory of the younger Sahibzadas.</p>
</div>

<div class="card">
<img src="https://th.bing.com/th/id/R.6110809f3a0dc5c07e4cc916f033585d?rik=1HwMFCZJU7ZHJA&riu=http%3a%2f%2fwww.onefivenine.com%2fimages%2fdistrictimages%2fPunjab%2fMuktsar%2f3.jpg&ehk=caQTWi6D%2biTkso0Ev2TYx9zHDI%2bw1OgQ5BZIkbSnG%2bg%3d&risl=&pid=ImgRaw&r=0" alt="">
<h2>Sri Muktsar Sahib</h2>
<p>Historic place of the Battle of Muktsar and the Forty Liberated Ones.</p>
</div>

<div class="card">
<img src="https://s7ap1.scene7.com/is/image/incredibleindia/gurudwara-dukh-nivaran-sahib-patiala-punjab-1-attr-hero?qlt=82&ts=1726661683905" alt="">
<h2>Gurudwara Dukh Niwaran Sahib</h2>
<p>Located in Patiala and visited by thousands of devotees.</p>
</div>

<div class="card">
<img src="https://www.sikhnet.com/files/news/2011/7-July/Ber_Sahib.jpg" alt="">
<h2>Gurudwara Ber Sahib</h2>
<p>Located in Sultanpur Lodhi where Guru Nanak Dev Ji attained enlightenment.</p>
</div>

<div class="card">
<img src="https://tse4.mm.bing.net/th/id/OIP.liCnv21jRdCK33d5wAOdTQHaEK?r=0&w=1200&h=675&rs=1&pid=ImgDetMain&o=7&rm=3" alt="">
<h2>Gurudwara Kartarpur Sahib</h2>
<p>Located in Pakistan. Founded by Guru Nanak Dev Ji.</p>
</div>

<div class="card">
<img src="https://images.alphacoders.com/541/541010.jpg"alt="">
<h2>Sri Harminder sahib</h2>
<p>Located in Amritsar,Punjab. it was founded byGuru Arjan Dev Ji in 1581.</p>
</div>

<div class="card">
<img src="https://th.bing.com/th/id/R.3c657ada30aa0312fab39ea886a65eba?rik=NEEnILwHtKCvOQ&riu=http%3a%2f%2fdiscoversikhism.com%2fimages%2fgurdwara%2fgurdwara_sri_darbar_sahib_tarn_taran%2fgurdwara_sri_darbar_sahib_tarn_taran14.jpg&ehk=GtDVusF6qeZRE1ajtUiB81C9ICsjI0pwDmyR41COdOY%3d&risl=&pid=ImgRaw&r=0"alt="">
<h2>Sri Taran Taran Sahib</h2>
<p>located in Taran Taran,Punjab. it is famous for having one of the largest holy Sarovars in Sikhism.</p>
</div>

</div>

<footer>
<h3>© 2026 Sikh History Project | Created by Payal</h3>
</footer>

</body>
</html>