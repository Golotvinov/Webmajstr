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
            <h2>HTML <img src="img/HTML5Logo.svg" alt="logo HTML" class="titleIcon"></h2>
            <p class="text">Hypertext Markup Language (zkratka HTML) je <a
                        href="https://cs.m.wikipedia.org/wiki/Zna%C4%8Dkovac%C3%AD_jazyk">značkovací jazyk</a> (nikoliv
                programovací), který je kostrou každé webové stránky. Každý kdo chce vývíjet webové stránky musí tuto
                technologii ovládat bezproblémově. Příponou HTML souborů je <b>.html</b> (a také .htm).</p>
            <hr class="content-divider">
            <h4>Historie</h4>
            <p class="text">Jazyk HTML vznikl v roce 1990 jako nástupce SGML (Standard Generalized Markup Language).
                Autorem je
                <a href="https://cs.m.wikipedia.org/wiki/Tim_Berners-Lee" target="_blank">Tim Berners Lee</a>, který
                také vytvořil <a href="internet.php">World Wide Web</a>. Byl totiž potřeba systém, který by umožňoval
                jednoduché sdílení dokumentů tím, že se na ně odkazuje (pomocí odkazu se dostat z jednoho dokumentu na
                jiný). A z toho důvodu vznikla nejzákladnější funkce HTML - hypertextový odkaz.</p>
            <p class="text">Standard jazyka se v čase měnil v závislosti na momentální potřeby rozvíjejícího se světa
                webu. V
                dnešní době je nejnovější verze 5 (<b>HTML5</b>).</p>
            <h4>Struktura a syntaxe</h4>
            <p class="text">HTML dokument je tvořen značky - <b>tagy</b> a <b>atributy</b>, které k nim patří (ne každý
                tag však potřebuje atributy).</p>
            <p class="text"><b>Tag</b> určuje co bude zač element, který chceme použít. Např. text, obrázek, tlačítko,
                pole na vyplnění a další.</p>
            <p class="text"><b>Atribut</b> je vlastnost elementu, rozšíření. Může ale nemusí být uveden u elementu. Může
                jich být uvedeno i více.</p>
            <pre>
                <code class="language-html">
                    &lt;nějakýTag&gt; &lt;/nějakýTag&gt; - Základní syntax. Otevření a uzavření tagu.
                    &lt;nějakýTag nějakýAtribut=""&gt; &lt;/nějakýTag&gt; - Základní syntax tag + atribut.

                    &lt;p&gt; Toto je paragraf. Značí se tagem p. &lt;/p&gt;
                    &lt;h1&gt; Toto je nadpis první úrovně. Představuje nejpodstatnější nadpis. Značí se tagem h1. &lt;/h1&gt;
                    &lt;b&gt; b jako bold (z ang.) udělá tučný text. &lt;/b&gt;

                    &lt;img src="img/obrazek.png"&gt; Tag img s atributem src který říká kde se obrázek nachází. Neuzavírá se.
                    &lt;div class="moje-klasa"&gt; Nějaký obsah, třeba text. &lt;/div&gt; - Div element s atributem class který určuje klasu.

                    &lt;!-- Toto je komentář. Ten je jen pro vás. Na stránce vidět nebude --&gt;
                </code>
            </pre>
            <p class="text">Každý platný HTML dokument (tedy i každá webová stránka) začíná <b>hlavičkou (header)</b>,
                ve které se nachází základní údaje o stránce, metadata, odkazy na externí skripty a styly, favikonka a
                další. Níže je základní syntax:</p>
            <pre>
                <code class="lang-html">
                    &lt;!DOCTYPE html&gt;
&lt;html lang="cs"&gt;

&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Název stránky&lt;/title&gt;
&lt;/head&gt;
                </code>
            </pre>
            <h5>Vysvětlení bloku</h5>
            <p class="text">
            <ul class="no-margin-ul">
                <li><b>&lt;!DOCTYPE html&gt;</b> - deklarace dokumentu HTML5.</li>
                <li><b>&lt;html lang="cs"&gt;</b> - hlavní jazyk dokumentu bude čeština (cs).</li>
                <li><b>&lt;head&gt;</b> - počátek / otevření bloku head (hlavičky)</li>
                <li><b>&lt;meta charset="UTF-8"&gt;</b> - deklarace kódování stránky. Většinou se používá <b>UTF-8</b>
                    jelikož obsahuje prakticky všechny znaky, které budeme chtít použít.
                </li>
                <li><b>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</b> - určuje
                    responzivitu, tedy, že stránka je (případně bude) responzivní.
                </li>
                <li><b>&lt;title&gt;Název stránky&lt;/title&gt;</b> - Název stránky. Objeví se v okně či podokně
                    prohlížeče.
                </li>
                <li><b>&lt;/head&gt;</b> - Uzavření hlavičky.</li>
            </ul>
            </p>
            <p class="text">Toto je základ, který musí být vždy obsažen v hlavičce. Zbytek je nepovinný, i když skoro
                určitě budete muset ve svých projektech přidat odkazy na externí zdroje (kaskádové styly, písma atd) a
                favikonky.</p>
            <h5 class="h5-margin-top">Další elementy v hlavičce:</h5>
            <pre>
            <code class="lang-html">
                &lt;link rel="stylesheet" href="css/style.css"&gt;
                &lt;link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"&gt;
                &lt;link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"&gt;
            </code>
            </pre>
            <p class="text">První řádek odkazuje na zdroj kaskádových stylů (<a href="styly.php">CSS</a>), druhý načítá písma (fonty) z Google Font Api a třetí přidává favikonku. Samozřejmě, že dle potřeb tam toho můžeme přidat mnohem víc.</p>
            <h5 class="h5-margin-top">Body, hlavní obsah</h5>
            <p class="text">Hlavička není zobrazována, uživatel jí nevidí. Část, kterou reálně vidíme se nachází v sekci <b>body</b>, v těle. Tam patří, s trochou nadsázky, všechny ostatní tagy, krom těch, které jsou v headeru. Podívejme se tedy na příklad co tam můžeme mít. Příklad obsahu body:
                <pre>
                <code class="lang-html">
                    &lt;body&gt;
                    &lt;h1&gt;Vítejte na mém prvním webu&lt;/h1&gt;
                    &lt;br&gt;
                    &lt;p&gt;Toto je můj první web. Zatím není moc krásný, ale za to je plně funkční.&lt;/p&gt;
                    &lt;img src="img/obrazek.png"&gt;
                    &lt;/body&gt; &lt;!-- Uzavřít body tag je potřeba až za patičkou! Zde pouze pro ukázku! --&gt;
                </code>
            </pre>
                <h5 class="h5-margin-top">Footer (patička)</h5>
                <p class="text">V patičce se klasicky nachází informace o autorovi webu, případně kontaktní údaje a další užitečné zdroje. Pro nás v HTML může být důležité přidání externích Javascript souborů. Příklad základního složení footeru:</p>
            <pre>
                <code class="lang-html">
                    &lt;footer&gt;
                    &lt;p&gt;&copy Můj první web&lt;/p&gt;
                    &lt;/footer&gt; &lt;!-- Uzavřeme footer --&gt;
                    &lt;/body&gt; &lt;!-- Uzavřeme body --&gt;
                    &lt;/html&gt; &lt;!-- Uzavřeme celý HTML dokument. --&gt;
                    &lt;!-- Pod /html už nesmí nic být. --&gt;
                </code>
            </pre>
            <h4 class="h5-margin-top">Cvičení</h4>
            <p class="text">Jednotlivá cvičení můžete vyplňovat přímo zde, nebo u sebe ve vlastním textovéím editoru. Pokud nefunguje vyplnění zde, stačí kliknout nahoře vpravo na „Edit on CodePen" a vypracovat to tam.</p>
            <p class="codepen" data-height="370" data-theme-id="light" data-default-tab="html,result" data-user="aleksgo" data-slug-hash="jOMKbVb" data-editable="true" style="height: 370px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Příklad HTML stránky">
  <span>See the Pen <a href="https://codepen.io/aleksgo/pen/jOMKbVb">
  Příklad HTML stránky</a> by Aleks (<a href="https://codepen.io/aleksgo">@aleksgo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
                <p class="text">Další užitečné zdroje na studium HTML:</p>
            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" class="fatLink" target="_blank">MDN - Mozilla Web Docs</a>
            <a href="https://www.w3schools.com/html/default.asp" class="fatLink" target="_blank">w3schools - HTML</a>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>