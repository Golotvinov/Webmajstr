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
            <h2>Rozložení (layout)</h2>
            <p class="text">Než začneme vyrábět webovou stránku (resp. něž začneme cokoliv kódovat či programovat) tak
                je nutné mít představu o tom co bude obsahem, komu bude applikace sloužit a jak bude vypadat. Při
                grafickém návrhu řešíme poslední složku. Máme-li jasné první dva body, můžeme začít s prvním krokem
                designu - rozložením stránky (layout-em). Nebo-li co kde bude. Layout nám definuje kde se na stránce
                bude nacházet každá jednotlivá sekce a každý ovládací prvek.</p>
            <hr class="content-divider">
            <h4>Základní pravidla</h4>
            <p class="text">Všechny webové stránky, až na drobné výjimky, dodržují stejná základní pravidla. Weby jsou
                velmi různorodé a každý z nich má jiný účel a cílí na jinou skupinu uživatel. Proto se design bude vždy
                nějak lišit. Níže ale najdete obecné normy, podle kterých je bezpečné se řídit.</p>
            <p class="text">V horní části je tzv. <b>hlavička (header)</b>, která zpravidla obsahuje logo a hlavní
                navigační panel. Často zde bývá umísťováno i hledací pole, jazykové mutace, přepnutí grafických
                nastavení (tmavý / světlý režim, volba velikost písma, ...), mapa stránky a další drobné prvky, které
                jsou důležité a které chceme, aby uživatel viděl na první dobrou.</p>
            <p class="text">Pod ní se zpravidla nachází <b>část s hlavním obsahem (main content area)</b>. Ta obsahuje
                veškeré informace a multimediální obsah na stránce. Často bývá rozdělena na více sekcí, ale není to
                nutné. Například právě na této stránce jsem zvolil tuto část rozdělit na 2 sekce: vlevo sekce, kde si
                uživatel může dělat poznámky; vpravo se pak nachází všechny články a informace, které chci pomocí
                Webmajstru sdělovat.</p>
            <p class="text">Dole najdeme <b>patičku (footer)</b>, kde je nejvhodnější umístit informace o autorském
                právu webu, info o autorech, adresu, kontaktní formulář (případně i s mapkou) a další užitečné odkazy.
            </p>
            <img src="img/layoutWebu.svg" alt="Obrázek typického layoutu webu" class="contentImg">
            <p class="text">Ať už zvolíme jakékoliv uspořádání elementů a sekcí na webu, na kterém děláme, je vždy nutné
                si klást pár důležitých otázek: Dává to smysl? Je to přehledné? Dokže se v tom uživatel dobře
                zorientovat aniž by k tomu potřeboval manuál? Jsou důležité prvky snadno dohledatelné? Pro nováčky může
                být hodně nápomocné podívat se na trendy a designy profesionálních webstránek. Nabrat inspiraci a vidět
                co skutečně funguje. Níže je pár odkazů, které vám k tomu mohou pomoci:</p>
            <a href="https://dribbble.com/shots/popular/web-design" class="fatLink" target="_blank">Dribbble</a>
            <a href="https://www.behance.net/galleries/ui-ux" class="fatLink" target="_blank">Behance</a>
            <a href="https://www.lapa.ninja/" class="fatLink" target="_blank">Lapa Ninja</a>
            <a href="https://www.csswinner.com/" class="fatLink" target="_blank">CSS Winner
                <a href="https://www.youtube.com/watch?v=a5KYlHNKQB8" class="fatLink ytLink" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                         class="bi bi-youtube" viewBox="0 0 24 16">
                        <path d="M17.36 20.988H6.536c-.306 0-.51-.205-.51-.511 0-.306.204-.51.51-.51h10.928c.306 0 .51.204.51.51 0 .306-.306.51-.612.51zM1.635 3.012C.714 3.012 0 3.73 0 4.648v12.56c0 .92.714 1.634 1.634 1.634h20.73c.92 0 1.636-.714 1.636-1.633V4.648c0-.92-.716-1.636-1.636-1.636zm7.863 4.393l6.23 3.472-6.23 3.575Z"/>
                    </svg>
                    &nbsp Základy layoutu a kompozice stránky (en)</a>
                <h4>Responzivní design</h4>
                <p class="text">V současnosti je potřeba brát ohled na všechna možná zařízení, kde se bude váš
                    obsah zobrazovat. Počítačové monitory mají různá rozlišení a různé poměry stran. Mobilní zařízení, jako jsopu např. tablety a smartphony zas potřebují design, který se bude snadno ovládat dotykem a obsah bude seřazen „úzce", roztáhne se do délky než-li do šířky.</p>
                <p class="text"><b>Mobile First</b> je filozofie a designový systém, který říká, že je lepší webové aplikace navrhovat prvně / přednostně pro mobilní zařízení. Víc než polovina uživatelů online přistupují k internetu ze svého smartphone-u ču tabletu, takže to určitě má svůj smysl. Není to však pravidlo a opět zavisí na účel webu a pro koho (a co) je hlavně určen. Google například bere v potaz responzivitu webu (jak dobře se zobrazuje na různá zařízení) a často upřednostňuje ve výsledcích weby, které jsou Mobile First, nebo mají dobře vyřešenou responzivitu.</p>
                <a href="https://search.google.com/test/mobile-friendly" class="fatLink" target="_blank">Test - Jak moc je web optimalizován pro mobilní zařízení?</a>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>