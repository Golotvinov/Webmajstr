<?php
include 'includes/header.php';
?>
    <header>
        <div class="header-logo"><a href="/zaciname.php"><img src="img/webmajstrlogo.svg" alt="Logo stránky"></a></div>
        <nav class="navbar">
            <div class="dropdown">
                <button class="dropbtn">O Webu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></button>
                <div class="dropdown-content">
                    <a href="/internet.php">Internet</a>
                    <a href="/wb.php">Webové prohlížeče</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Grafika <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></button>
                <div class="dropdown-content">
                    <a href="/layout.php">Rozvržení</a>
                    <a href="/barvy.php">Barvy</a>
                    <a href="/typografie.php">Typografie</a>
                </div>
            </div>
            <a href="/html.php">HTML</a>
            <a href="/styly.php">CSS</a>
            <a href="/nastroje.php">Nástroje</a>
            <a href="#" target="_blank">Kvíz
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
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                         class="bi bi-journals" viewBox="0 0 16 16">
                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                    </svg>
                    &nbsp Poznámky
                </h3>
                <div class="form-row">
                    <div class="col-8 mr-sm-2">
                        <input type="text" class="newNoteInput" placeholder="Přidat novou poznámku ..."
                               id="addtaskinput"/>
                        <input type="hidden" id="saveindex">
                    </div>
                    <button type="button" class=" notesBtn btnAdd" id="addtaskbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                        </svg> &nbsp Přidat
                    </button>
                    <button type="button" class="notesBtn btnEdit" id="savetaskbtn"
                            style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> &nbsp Upravit
                    </button>
                    <button type="button" id="deleteallbtn" class=" notesBtn btnDeleteAll"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;" fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        </svg> &nbsp Smazat vše
                    </button>
                </div>
                <div class="to-do-output">
                    <table id="addedtasklist">
                    </table>
                </div>
        </aside>
        <section id="main-content-area">
            <h2>Začínáme.</h2>
            <p class="description">Na Webmajstru si můžeš témata studovat v libovolném pořadí, ale doporučujeme se držet
                logicky navrženého pořadí, pokud s webovým designem a vývojem nemáš žádné předchozí zkušenosti. Postupuj
                v
                hlavní nabídce zleva doprava, od sekce <a href="/internet.php">O Webu</a> až po <a href="#">Kvíz</a>, ve kterém si
                budeš
                moci procvičit své zanlosti.</p>
            <p class="description">Tento projekt vznikl ve spolupráci s <a href="http://it.pedf.cuni.cz/" target="_blank">Katedrou informačních technologií a technické výchovy UK v Praze</a>.</p>
            <hr class="content-divider">
            <h3>Obash:</h3>
                <h4>O Webu</h4>
                <p class="description">Ideální místo začít. Zde se dozvíš co je internet a jak funguje a pak i něco málo o internetových prohlížečích, tedy o software-u, který slouží k jeho prohlížení.</p>
                <a href="/internet.php" class="fatLink">Internet</a><a href="/wb.php" class="fatLink">Webové prohlížeče</a>
                <h4>Grafika</h4>
            <p class="description">V této sekci se naučíš základní principy tvorby webového designu (webové grafiky).</p>
            <a href="/layout.php" class="fatLink">Rozvržení</a><a href="/barvy.php" class="fatLink">Barvy</a><a href="typografie.php" class="fatLink">Typografie</a>
                <h4>HTML</h4>
            <p class="description">HTML je kostrou každého webu a tudíž i základ pro webový vývoj. Chceš-li začít tvořit webové stránky, pak musíš tento značkovací jazyk perfektně ovládat.</p>
                <h4>CSS</h4>
            <p class="description">Kaskádové styly nám pomáhají web „obarvit", přidat animace, a de facto přeměnit grafický návrh na funkční web.</p>
                <H4>Nástroje</H4>
            <p class="description">Zde najdeš celou řadu užitečných nástrojů a aplikací, které jsme osobně vybrali, a které ti pomůžou s tvorbou webových stránek a aplikací. Ať už to bude grafika či vývoj.</p>
                <h4>Kvíz</h4>
            <p class="description">Chceš si zkusit jak moc dobře ovládáš základy webového designu a vývoje? Máme pro tebe připravený malý test, pomocí kterého zjistíš jak na tom jsi.</p>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>