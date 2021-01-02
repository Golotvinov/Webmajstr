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
        <aside>
            <div class="todoList">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                    </svg> &nbsp Poznámky</h3>
                <form>
                    <input type="text" id="newNote" placeholder="Vlož novou poznámku ..."> <a href="#0" class="add-todo">
                        <button id="newNoteBtn" class="button" type="button">Vložit!</button>
                    </a>
                </form>
            </div>
        </aside>
        <section id="main-content-area">
            <h2>Začínáme.</h2>
            <p class="description">Na Webmajstru si můžeš témata studovat v libovolném pořadí, ale doporučujeme se držet
                logicky navrženého pořadí, pokud s webovým designem a vývojem nemáš žádné předchozí zkušenosti. Postupuj
                v
                hlavní nabídce zleva doprava, od sekce <a href="#">O Webu</a> až po <a href="#">Kvíz</a>, ve kterém si
                budeš
                moci procvičit své zanlosti.</p>
            <p class="description">Tento projekt vznikl ve spolupráci s <a href="http://it.pedf.cuni.cz/"
                                                                           target="_blank">Katedrou
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
    </section>
<?php
include 'includes/footer.php';
?>