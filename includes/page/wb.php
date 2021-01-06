<section id="main-content-area">
<h2>Webové prohlížeče</h2>
            <p class="text">Abychom mohli konzumovat obsah Internetu budeme potřebovat dvě věci: Zařízení, které
                má přístup k Internetu, a program, pomocí kterého si budeme moci samotné webové stránky prohlížet - tzv.
                webový prohlížeč. Vzhledem k tomu, že se na tuto stránku nyní díváte, obě tyto podmínky splňujete.
                Webový prohlížeč je tudíž aplikace / program, která nám umožňuje stáhnout a zobrazit dokumenty z
                webserverů. Jakoukoliv internetovou stránku otevřeme pomocí webového prohlížeče.</p>
            <hr class="content-divider">
            <h4>Jaké máme webové prohlížeče</h4>
            <p class="text">V dnešní době máme velký výběr aplikací na zobrazování webového obsahu (webových
                stránek a aplikací). Většina z nich je multiplatformní - mají tedy verzi pro více operačních systémů
                (nejčastěji Linux, Windows, MacOS, Android a iOS).</p>
            <p class="text">Zde je stručný seznam těch nejpouživanějších:</p>
            <a href="https://www.mozilla.org/cs/firefox/new/" target="_blank"><img src="img/FirefoxLogo.svg" alt="Logo prohlížeče Mozilla Firefox" title="Mozilla Firefox" class="browser-icon"></a>
            <a href="https://www.google.com/intl/cs/chrome/" target="_blank"><img src="img/GoogleChromeLogo.svg" alt="Logo prohlížeče Google Chrome" title="Google Chrome" class="browser-icon"></a>
            <a href="https://www.chromium.org/Home" target="_blank"><img src="img/ChromiumLogo.svg" alt="Logo prohlížeče Chromium" width="100px" height="100px" title="Chromium" class="browser-icon"></a>
            <a href="https://www.microsoft.com/cs-cz/edge" target="_blank"><img src="img/EdgeLogo.svg" alt="Logo prohlížeče Microsoft Edge" title="Microsoft Edge" class="browser-icon"></a>
            <a href="https://www.apple.com/safari/" target="_blank"><img src="img/SafariLogo.svg" alt="Logo prohlížeče Apple Safari" width="100px" height="100px" title="Apple Safari" class="browser-icon"></a>
            <a href="https://brave.com/" target="_blank"><img src="img/BraveLogo.svg" alt="Logo prohlížeče Brave" width="85px" height="100px" title="Brave Browser" class="browser-icon"></a>
            <p class="text">Každý z těchto programů plní stejnou fundamentální roli, avšak každý z nich se trochu liší („pod kapotou" se však některé liší velmi výrazně). Základní funkce jako záložky, nastavení domovské stránky, blokování vyskakovacích oken, uložení hesel a stažení různých doplňků mají všechny. Každý vývojář se ale zaměřuje na něco trochu jiného.
            <p class="text">Google například nabízí uživatelům pohodlí při používání a jednoduchost za cenu horších podmínek ochrany soukromí. Zkrátka tam platíte svými daty Googlu za to, že vám nabízí úzkou integrovanost Chromu s dalšími z řady svých produktů.</p>
            <p class="text">Mozilla vyvíjí Firefox a cílí jak na pokročilejší, tak i na „obyčejné" uživatele. Slibuje výbornou ochranu soukromí, automatické blokování reklam a sledovacích prvků na netu a open source přístup (svobodný zdrojový kód).</p>
            <h4>Vykreslení obsahu</h4>
            <p class="text">Architektura webového prohližeče není moc náročná Skládá se primárně z těchto částí:</p>
            <ul>
                <li><b>Uživatelské rozhraní</b> (tlačítka, obrázky, políčka na vyplnění, ovládací prvky atd.)</li>
                <li><b>Browser Engine</b> - jádro prohlížeče (např. Chromium pro Google Chrome nebo stejnojmenný Chromium)</li>
                <li><b>Rendering Engine</b> - vykreslovací jádro. Slouží k převodu kódu do čitelné, přijatelné podoby pro uživatele (Blink pro Chrome a Operu, Gecko / Quantum pro Firefox, WebKit pro Safari a Chrome na iOS a další)</li>
            </ul>
            <p class="text">Vznikají tedy malé rozdíly, hlavně po vizuální stránce (ale i při některých skriptech), což je pro webového vývojáře nežádoucí. Je potřeba zajistit každému užuivateli optimální (a tedy i konzistentní) výsledek. Otázka je - Co s tím? Odpověď - Otestovat důsledně webovou stránku alespoň ve dvou různých prohližečích, které používají jiné vykreslovací jádro (nejčastěji nějaké prohlížeč založený na Chromium + Firefox, jelikož mají největší tržní podíl). A pak je zapotřebí v kaskádových stylech přidat u některých parametrů, které prohlížeče vykreslují jinak, předpony jako jsou -webkit, -moz, -ms a další. Více informací o tom najdeš v sekci <a href="styly.php" target="_parent">CSS</a>.</p>
</section>
</section>

