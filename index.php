<?php
include 'includes/header.php';
?>
<header>
    <div class="header-logo"><img src="img/webmajstrlogo.svg" alt="Logo stránky"></div>
    <nav class="navbar">
        <div class="dropdown">
            <button class="dropbtn">O Webu</button>
            <div class="dropdown-content">
                <a href="#">Internet</a>
                <a href="#">Webové prohlížeče</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Grafika</button>
            <div class="dropdown-content">
                <a href="#">Rozvržení</a>
                <a href="#">Barvy</a>
                <a href="#">Typografie</a>
            </div>
        </div>
        <a href="#news">HTML</a>
        <a href="#news">CSS</a>
        <a href="#news">Nástroje</a>
        <a href="#news">Kvíz</a>
    </nav>
<p><span id="lsOutput"></span> bude brzy mistrem webů!</p>
</header>
<?php
include 'includes/footer.php';
?>