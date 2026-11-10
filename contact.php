<?php
    include('db.php');

    if (!isset($_SESSION['email'])) {
        header('Location: index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_SESSION['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact(email, subject, message) VALUES('$email', '$subject', '$message')";
        mysqli_query($conn, $query);
        echo "<script>alert('Message sent, thank you for contacting us.')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us </title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f4f4;
}

/* Header */

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

/* Contact Section */

.contact{
    width:90%;
    max-width:1100px;
    margin:40px auto;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:30px;
}

/* Left Side */

.contact-info{
    flex:1;
    min-width:300px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

.contact-info h2{
    color:#ff6600;
    margin-bottom:20px;
}

.contact-info p{
    margin:15px 0;
    font-size:17px;
    color:#333;
}
/*navbar*/
.navbar{
    display:flex;
    justify-content:
    space between;
    align-items:center;
    padding:20px 50px;
    background:#fff;
    margin-bottom:40px;
}
/*contact section*/
.contact{
    margin-top:120px;
}

/* Right Side */

.contact-form{
    flex:1;
    min-width:300px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

.contact-form h2{
    color:#ff6600;
    margin-bottom:20px;
}

.contact-form input,
.contact-form textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:16px;
}

.contact-form textarea{
    resize:none;
    height:120px;
}

.contact-form button{
    width:100%;
    padding:12px;
    background:#ff6600;
    color:white;
    border:none;
    font-size:18px;
    border-radius:5px;
    cursor:pointer;
    transition:0.3s;
}

.contact-form button:hover{
    background:#cc5200;
}

/* Footer */

footer{
    background:#222;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:30px;
}

/* Responsive */

@media(max-width:768px){
.contact{
    flex-direction:column;
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
<section class="contact">

<div class="contact-info">

<h2>Get In Touch</h2>

<p><strong>📍 Address:</strong><br>
Punjab, India</p>

<p><strong>📞 Phone:</strong><br>
+91 98765 43210</p>

<p><strong>📧 Email:</strong><br>
gurusikhhistory@gmail.com</p>

<p><strong>🌐 Website:</strong><br>
www.gurusikhhistory.com</p>

<p>
If you have any questions about Sikh Gurus, Gurdwaras, or Sikh History, feel free to contact us.
</p>

</div>

<div class="contact-form">

<h2>Send Message</h2>

<form method="post" action="contact.php">


    <input type="text" name="subject" placeholder="Subject" required>

    <textarea name="message" placeholder="Write your message here..." required></textarea>

    <button type="submit">Send Message</button>

</form>

</div>

</section>

<footer>

<p>© 2026 Guru Sikh History | Designed by Payal</p>

</footer>

</body>
</html>