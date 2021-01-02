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
            <a href="#news" target="_blank">Kvíz
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                    <path fill-rule="evenodd"
                          d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                </svg>
            </a>
        </nav>
        <p>Vítej, <span id="lsOutput"></span>!</p>
    </header>
    <section class="content">
        <h2>Začínáme.</h2>
        <p class="description">Na Webmajstru si můžeš témata studovat v libovolném pořadí, ale doporučujeme se držet
            logicky navrženého pořadí, pokud s webovým designem a vývojem nemáš žádné předchozí zkušenosti. Postupuj v
            hlavní nabídce zleva doprava, od sekce <a href="#">O Webu</a> až po <a href="#">Kvíz</a>, ve kterém si budeš
            moci procvičit své zanlosti.</p>
        <p class="description">Tento projekt vznikl ve spolupráci s <a href="http://it.pedf.cuni.cz/" target="_blank">Katedrou
                informačních technologií a technické výchovy UK v Praze</a>.</p>
        <div id="maincont"><h3>Obash:</h3>
            <h4>O Webu</h4>
            <h5>Internet</h5><h5>Webové prohlížeče</h5>
            <h4>Grafika</h4>
            <h5>Rozvržení</h5><h5>Barvy</h5><h5>Typografie</h5>
            <h4>HTML</h4>
            <h4>CSS</h4>
            <H4>Nástroje</H4>
            <h4>Kvíz</h4></div>
    </section>
<?php
include 'includes/footer.php';
?>