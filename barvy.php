<?php
include 'includes/header.php';
?>
    <header>
        <div class="header-logo"><a href="zaciname.php"><img src="img/webmajstrlogo.svg" alt="Logo stránky"></a></div>
        <nav class="navbar">
            <div class="dropdown">
                <button class="dropbtn">O Webu
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <a href="internet.php">Internet</a>
                    <a href="wb.php">Webové prohlížeče</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Grafika
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <a href="layout.php">Rozložení</a>
                    <a href="barvy.php">Barvy</a>
                    <a href="typografie.php">Typografie</a>
                </div>
            </div>
            <a href="html.php">HTML</a>
            <a href="styly.php">CSS</a>
            <a href="nastroje.php">Nástroje</a>
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
                    Poznámky
                </h3>
                <div class="form-row">
                    <div class="col-8 mr-sm-2">
                        <input type="text" class="newNoteInput" placeholder="Přidat novou poznámku ..."
                               id="addtaskinput"/>
                        <input type="hidden" id="saveindex">
                    </div>
                    <button type="button" class=" notesBtn btnAdd" id="addtaskbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;"
                             fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                            <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                        </svg>
                        &nbsp Přidat
                    </button>
                    <button type="button" class="notesBtn btnEdit" id="savetaskbtn"
                            style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;"
                             fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        &nbsp Upravit
                    </button>
                    <button type="button" id="deleteallbtn" class=" notesBtn btnDeleteAll">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-bottom: -2px;"
                             fill="currentColor" class="bi bi-journal-x" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        </svg>
                        &nbsp Smazat vše
                    </button>
                </div>
                <div class="to-do-output">
                    <table id="addedtasklist">
                    </table>
                </div>
        </aside>
        <section id="main-content-area">
            <h2>Barvy</h2>
            <p class="text">Zkušený web designer nikdy nevybírá barvy a barevné schéma pro web náhodně. Různé barvy slouží různým účelům, vyvolávají v nás určité pocity a emoce (i když se nám to nemusí zdát), sdělují nepřímo uživatelům o čem web je, co reprezentuje. Je to jakýsi nepsaný, neverbální jazyk, který komunikuje nějaké základní myšlenky projektu.</p>
            <hr class="content-divider">
            <h4>Základy barevné teorire:</h4>
            <p class="text">S barevnou teorií přišel v roce 1666 Isaac Newton, který udělal projekci barevného spektra do kruhu. S tímto barevným kruhem pracují grafici i v dnešní době, jelikož ukazuje na vztahy mezi jednotlivými barvami. Na webu pracujeme samozřejmě s RGB verzí barevného kruhu (existují i další typy jako např. RYB - red, yellow, blue; se kterou pracují převážně malíři).</p>
            <h4>Symbolika základních barev</h4>
            <p class="text">Zde je stručný seznam základních barev a jejich asociace. Při tvorbě barevné palety na web můžete vycházet z těchto principů, za které vděčíme hlavně psychologii. Při výběru dominantní barvy tedy hodně záleží na tom jaké bude hlavní téma webu a jak má působit na návštěvníka.</p>
            <p class="text">
            <ul class="no-margin-ul">
                <li><b style="color: var(--red)">Červená</b> - důležitost, láska. Dobrá pro zvýraznění nejpodstatnějších prvků na stránce. Často u chybových hlášení.</li>
                <li><b style="color: #ff4901">Oranžová</b> - energie, zábava. Často se používá v eshopech pro zvýraznění lepší ceny.</li>
                <li><b style="color: #eec806">Žlutá</b> - štěstí, pozornost. Vhodné použít při nějakém upozornění.</li>
                <li><b style="color: #00de0a">Zelená</b> - úspěch, příroda. Ideální pro správně zvolené objekty (např. správná odpověď) nebo jako potvrzení, že se něco povedlo.</li>
                <li><b style="color: #0239ff">Modrá</b> - důvěra, komfort, progres. Evokuje pocit bezpečí. Často používají software-ové firmy (IBM, Intel, Facebook, ...).</li>
                <li><b>Fialová</b> - luxus, kreativita. Luxusní zboží, loajalita.</li>
                <li><b style="color: #000000">Černá</b> - síla, sofistikovanost. Často dominantní barva ve fashion webech. Symbol lusuxu, exkluzivity.</li>
                <li><b style="color: #a4a4a4">Bílá</b> - čistota, zdraví, minimalismus. Používána obzvlášť často v medicíně, popisuje čistý, bezpečný produkt.</li>
            </ul>
            </p>
            <h4>Kombinace barev</h4>
            <p class="text">Nemusíme mít cit pro design, abychom správně navolili paletu. O vše se postará věda. Máme k dispozici pět základních barevných kombinačních systémů. Jen je potřeba brát v potaz, že <b>čím více barev - tím hůř se dělá balans</b>.</p>
            <p class="text">
            <ul class="no-margin-ul">
                <li><b>Komplementární</b> - barvy na protějších / opačných koncích barevného kruhu. Vysoký kontrast, křiklavé, velmi silný dojem.</li>
                <li><b>Analogové</b> - barvy, které jsou vedle sebe na kruhu. Doporučuje se používat s jinou, dominantní barvou.</li>
                <li><b>Triadická (triadic)</b> - tři barvy stejně vzdálené od sebe. Podobný výsledej jako komplementární systém, ale je zde více možností.</li>
                <li><b>Tetradická (tetradic)</b> - čtyři barvy stejně vzdálené od sebe. Nejlépe funguje zvolit jednu dominantní a 3 doplňující.</li>
                <li><b>Monochromatická</b> - různé odstíny stejné barvy.</li>
            </ul>
            </p>
            <img src="img/ColorWheel.svg" alt="Mapa WWW" class="contentImg">
            <h4>Užitečné odkazy k barvám</h4>
            <a href="https://color.adobe.com/cs/create/color-wheel" class="fatLink" target="_blank">Adobe Color</a>
            <a href="https://colordrop.io/" class="fatLink" target="_blank">Color Drop</a>
            <a href="https://colorhunt.co/" class="fatLink" target="_blank">Color Hunt</a>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>