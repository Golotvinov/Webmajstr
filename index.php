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
        <p>Vítej, <span id="lsOutput"></span>!</p>
    </header>
    <section class="content">
    <h2>Vyber si z hlavní nabídky téma, které tě zajímá.</h2>
        <p class="description">Na Webmajstru si můžeš témata studovat v libovolném pořadí, ale doporučujeme se držer>
    </section>
<?php
include 'includes/footer.php';
?>