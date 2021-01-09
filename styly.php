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
            <h2>CSS <img src="img/CSS3Logo.svg" alt="logo CSS" class="titleIcon"></h2>
            <p class="text">CSS (zkratka pro Cascading Style Sheets, česky kaskádové styly) je v informatice jazyk,
                pomocí kterého definujeme vizuální styl webového obsahu. Po vytvoření kostry webu v HTML můžeme pomocí
                CSS upravit pozici (kde co bude), barvy, styl písma, animace a další. De facto „obarvíme" a částečně i
                rozhýbeme některé části webové stránky, tvoříme samotný design. Spolu s
                <a href="html.php">HTML</a> a Javascriptem (případně ještě s PHP) tvoří základní bloky světa webových
                stránek.</p>
            <hr class="content-divider">
            <h4>Struktura a syntaxe</h4>
            <p class="text">Kaskádové styly mají velmi jednoduchou syntaxi. Vypíšeme si element, který chceme nějak
                modifikovat (<b>selektor</b>) a pak do složených závorek <b>{ }</b> napíšeme vlastnost(i) + jejich hodnoty. Styly můžeme
                psát rovnou v HTML dokuemntech pomocí tzv. inline stylů nebo, a to je mnohem častější, do zvláštního
                .css souboru. Druhá varianta má výhodu v tom, že je vše přehlednější a je dobře strukturované.</p>
            <p class="text">Css soubory rychle „rostou" a proto také vznikají i různé způsoby a filozofie jak je správně
                organizovat. Obecně je dobré začít nejobecnějšími pravidly. Tedy styly, které se týkají celého dokumentu
                a globální úpravy a pravidla (html, body, root atd.).
            <p class="text">Příklad inline stylů:</p>
            <pre>
                <code class="language-css">
                   &lt;p style="color: green; font-size: 16px;"&gt;Tento paragraf bude obarven do zelena a velikost písma bude 16px.&lt;/p&gt;
                </code>
            </pre>
            <p class="text">Příklad zápisu, který bychom umístili buď přimo v HTML dokumentu (&lt;style&gt; zde bude CSS
                &lt;/style&gt;) nebo v externím .css dokumentu (často pojmenován jako style.css):</p>
            <pre>
                <code class="language-css">
                    element {
                        vlastnost: hodnota;
                    }

                   p {
                        color: green;
                        font-size: 16px;
                    }

                    h1 {
                        font-family: "Poppins", sans-serif;
                        color: #ff3333
                    }

                    div {
                        width: 500px;
                    }

                    /* Takto se v CSS (a v Javascriptu např.) zapisuje komentář. */
                    /* Komentář může být i víceřádkový.
                    img {
                        width: 500px;
                        height: 200px;
                    }
                    */
                </code>
            </pre>
            <p class="text">Pokud nějaké elementy na stránce sdílí stejné vlastnosti tak je můžeme oddělit čárkou a
                definovat jim společná pravidla. Optimalizujeme tím kód a zpřehledníme ho.</p>
            <pre>
                <code class="language-css">
                    h1,
                    h2,
                    h3 {
                        padding-top: 5%;
                    }

                    button,
                    footer {
                        border-bottom: 1px solid black;
                    }
                </code>
            </pre>
            <h5>Specificita</h5>
            <p class="text">Můžeme mixovat způsoby zápisu CSS, tedy vložit je pomocí &lt;style&gt; &lt;/style&gt; uvnitř HTML dokumentu, pomocí inline stylama u každého elementu, nebo jako externí soubor. Toto se však rozhodně nedoporučuje! V případě ale, že máme vlastnosti jednoho prvku nadefinované na více místech v CSS (třeba jednou inline a pak v externím souboru) tak který zápis má přednost? Co když máme u elementu ID i třídu? Tomu se říká specificita a pravidla jsou taková:</p>
            <p class="text">
            <ul class="no-margin-ul">
                <li><b>Inline styly</b> - jsou hierarchicky nejvýš a mají přednost před ostatními!</li>
                <li><b>ID</b> - ID-ečka mají prioritu před třídama (id > class).</li>
                <li><b>Klasy, pseudo-klasy, atributy</b> - .class, :hover, :focus a další.</li>
                <li><b>Elementy</b> - všechny prvky typu h1, h2, p, img, div, button atd.</li>
            </ul>
            </p>
            <h4>Cvičení</h4>
            <p class="text">Jednotlivá cvičení můžete vyplňovat přímo zde, nebo u sebe ve vlastním textovém editoru.
                Pokud nefunguje vyplnění zde, stačí kliknout nahoře vpravo na „Edit on CodePen" a vypracovat to tam.</p>
            <h5 class="h5-margin-top">Cvičení 1: Základy</h5>
            <p class="text">Změňte barvu <b>h2</b> nadpisu na <span style="color: var(--red);">červenou</span> a velikost písma u <b>span</b>-u na <b>18px</b>.</p>
            <p class="codepen" data-height="381" data-theme-id="light" data-default-tab="css,result" data-user="aleksgo" data-slug-hash="mdrjpeZ" data-editable="true" style="height: 381px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Cvičení 1: Základy">
  <span>See the Pen <a href="https://codepen.io/aleksgo/pen/mdrjpeZ">
  CSS Cvičení 1: Základy</a> by Aleks (<a href="https://codepen.io/aleksgo">@aleksgo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
            <h4>Pokročilé volby selektorů</h4>
            <p class="text">Při psaní v HTML často uvádíme atribut ID či třídy právě z toho důvodu, abychom mohli lépe odchytit daný prvek v CSS či v Javascriptu.</p>
            <pre>
                <code class="language-css">
                    .mojeTrida {
                        display: grid;
                        margin: 0 auto;
                    }

                    #mojeId {
                        background-color: 1px solid rgb(0, 219, 171);
                    }
                </code>
            </pre>
            <p class="text">Co když budu chtít zvolit nějaký element, který se uvnitř nějakého jiného elementu?</p>
            <pre>
                <code class="language-css">
                    header > a {
                        text-decoration: none;
                    }

                    /* Tagy typu "a" (odkazy), které se nachází uvnitř rodičovského h2 elementu, nebudou mít žádnou dekoraci textu. */
                </code>
            </pre>
            <pre>
                <code class="language-css">
                    section button {
                        display: inline-block;
                    }

                    /* Všechny prvky typu "button", které se nachází uvnitř v selection, budou mít vlastnost display: inline-block. */
                </code>
            </pre>
            <p class="text">Kompletní seznam selektorů a pseudoselektorů nakdete na w3schools, konkrétní odkaz níže.</p>
            <a href="https://www.w3schools.com/cssref/css_selectors.asp" class="fatLink linkBotPad" target="_blank">w3schools - Seznam selektorů v CSS</a>
            <p class="text">Ještě se podíváme na nejpoužívanější pseudo-třídu <b>hover</b>, která slouží k definování toho co se má stát po najetí myší na daný prvek.</p>
            </pre>
            <pre>
                <code class="language-css">
                    h3:hover {
                        background-color: pink;
                    }

                    /* Když najedem myší na h3 element, tak se obarví do růžova. */
                </code>
            </pre>
            <h4>Cvičení</h4>
            <p class="text">Jednotlivá cvičení můžete vyplňovat přímo zde, nebo u sebe ve vlastním textovém editoru.
                Pokud nefunguje vyplnění zde, stačí kliknout nahoře vpravo na „Edit on CodePen" a vypracovat to tam.</p>
            <h5 class="h5-margin-top">Cvičení 2: Pokročilé selektory</h5>
            <p class="text">Vyberte všechny odkazy v seznamu a aplikujte jím následující pravidla:</p>
            <p class="text">
            <ul class="no-margin-ul">
                <li><b>display:</b> block</li>
                <li><b>color:</b> white</li>
                <li><b>text-decoration:</b> none</li>
                <li><b>text-align:</b> center</li>
                <li><b>padding:</b> 14px 16px</li>
            </ul>
            </p>
            <p class="text">Dále po najetí myší na odkaz se má změnit barva pozadí (vyberte libovolnou barvu).</p>
            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="aleksgo" data-slug-hash="XWjBBOg" data-editable="true" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Cvičení 2">
  <span>See the Pen <a href="https://codepen.io/aleksgo/pen/XWjBBOg">
  CSS Cvičení 2</a> by Aleks (<a href="https://codepen.io/aleksgo">@aleksgo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
            <h4>Vlastnosti (properties)</h4>
            <p class="text">Selektory jsou celkem intuitivní. Je to v podstatě jakýkoliv prvek / element z <a
                        href="https://cs.wikipedia.org/wiki/Document_Object_Model" target="_blank">DOM</a>-u. Jaké vlastnosti ale můžeme upravovat u každého z nich nemusí být na první pohled jasné. Obecně však platí, že to co má smysl nějak měnit tak měnit lze. Chcete aby byl text poloprůhledný a na pozadí byl přes celou obrazovku obrázek? Není problém. Upravovat ale velikost písma u obrázků není moc logické ...</p>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Properties_Reference" class="fatLink linkBotPad" target="_blank">MDN - Seznam nejpoužívanějších selektorů</a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" class="fatLink" target="_blank linkBotPad">MDN - Kompletní seznam selektorů</a>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>