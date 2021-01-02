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
    <h2>Začínáme.</h2>
        <p class="description">Na Webmajstru si můžeš témata studovat v libovolném pořadí, ale doporučujeme se držet logicky navrženého pořadí, pokud s webovým designem a vývojem nemáš žádné předchozí zkušenosti. Postupuj v hlavní nabídce zleva doprava, od sekce O Webu až po Kvíz, ve kterém si budeš moci procvičit své zanlosti</p>
    </section>
<?php
include 'includes/footer.php';
?>