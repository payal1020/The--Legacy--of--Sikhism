<?php
    echo '<nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="history.php">HISTORY</a></li>
                <li><a href="gurus.php">GURUS</a></li>
                <li><a href="gurudwaras.php">GURUDWARAS</a></li>
                <li><a href="symbols.php">SYMBOLS</a></li>
                <li><a href="gallery.php">GALLERY</a></li>';

    if (isset($_SESSION['email'])) {
        echo '
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>';
    } else {
        echo '
            <li><a href="login.php">LOGIN</a></li>';
    }

    echo '  </ul>
        </nav>';
?>