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
            </p>
</section>
</section>
