<?php
include 'includes/header.php';
?>
    <header>
        <div class="header-logo"><a href="zaciname.php"><img src="img/webmajstrlogo.svg" alt="Logo stránky"></a></div>
        <nav class="navbar">
            <div class="dropdown">
                <button class="dropbtn">O Webu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></button>
                <div class="dropdown-content">
                    <a href="internet.php">Internet</a>
                    <a href="wb.php">Webové prohlížeče</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Grafika <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg></button>
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
            <h2>Internet</h2>
            <p class="text">Internet je globální systém, ve kterém jsou navzájem propojeny počítačové sítě a jednotlivé uzly, které k ním patří. Nejčastěji se jedná o počítače, ale může to být i jakákoliv jiná výpočetní technika, která se může do tohoto systému zapojit pomocí protokolů <a href="https://cs.m.wikipedia.org/wiki/TCP/IP" target="_parent">TCP/IP.</a> Hlavní účel je vzájemné sdílení informací a komunikace.</p>
            <hr class="content-divider">
            <h4>Historie</h4>
            <p class="text">Internetový protokol vznikl na konci 60. let 20. stol. v Defense Advanced Research Projects Agency (DARPA), agentura amerického ministerstva obrany. Dalo by se říct, že první počítačová síť na Internetu byla ARPANET, kterou financovala již zmíněnmá DARPA a ministerstvem obrany USA. Spuštěná byla v říjnu 1969. O pár let později, v roce 1973, došlo k rozšíření sítí i do Evropy (Norsko a Velká Británie).</p>
            <p class="text">Zpočátku byly tyto sítě nedostupné pro širokou veřejnost. Využívali se převážně v armádě a později i a univerzitách. K rozšíření této celosvětové sítě sítí do domácností došlo v 90. letech 20. stol., kdy se na trhu začaly objevovat první stolní počítače, které byly finančně dostupné, byť pouze pro bohatší vrstvu společnosti.</p>
            <p class="text">Externí odkazy k této sekci:</p>
            <a href="https://www.youtube.com/watch?v=Dxcc6ycZ73M" class="fatLink ytLink" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-youtube" viewBox="0 0 24 16">
                    <path d="M17.36 20.988H6.536c-.306 0-.51-.205-.51-.511 0-.306.204-.51.51-.51h10.928c.306 0 .51.204.51.51 0 .306-.306.51-.612.51zM1.635 3.012C.714 3.012 0 3.73 0 4.648v12.56c0 .92.714 1.634 1.634 1.634h20.73c.92 0 1.636-.714 1.636-1.633V4.648c0-.92-.716-1.636-1.636-1.636zm7.863 4.393l6.23 3.472-6.23 3.575Z"/>
                </svg> &nbsp Co je to Internet (en)</a> <a href="https://cs.m.wikipedia.org/wiki/Internet" class="fatLink wikiLink" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-youtube" viewBox="0 0 24 16">
                    <path d="M12.09 13.119c-.936 1.932-2.217 4.548-2.853 5.728-.616 1.074-1.127.931-1.532.029-1.406-3.321-4.293-9.144-5.651-12.409-.251-.601-.441-.987-.619-1.139-.181-.15-.554-.24-1.122-.271C.103 5.033 0 4.982 0 4.898v-.455l.052-.045c.924-.005 5.401 0 5.401 0l.051.045v.434c0 .119-.075.176-.225.176l-.564.031c-.485.029-.727.164-.727.436 0 .135.053.33.166.601 1.082 2.646 4.818 10.521 4.818 10.521l.136.046 2.411-4.81-.482-1.067-1.658-3.264s-.318-.654-.428-.872c-.728-1.443-.712-1.518-1.447-1.617-.207-.023-.313-.05-.313-.149v-.468l.06-.045h4.292l.113.037v.451c0 .105-.076.15-.227.15l-.308.047c-.792.061-.661.381-.136 1.422l1.582 3.252 1.758-3.504c.293-.64.233-.801.111-.947-.07-.084-.305-.22-.812-.24l-.201-.021c-.052 0-.098-.015-.145-.051-.045-.031-.067-.076-.067-.129v-.427l.061-.045c1.247-.008 4.043 0 4.043 0l.059.045v.436c0 .121-.059.178-.193.178-.646.03-.782.095-1.023.439-.12.186-.375.589-.646 1.039l-2.301 4.273-.065.135 2.792 5.712.17.048 4.396-10.438c.154-.422.129-.722-.064-.895-.197-.172-.346-.273-.857-.295l-.42-.016c-.061 0-.105-.014-.152-.045-.043-.029-.072-.075-.072-.119v-.436l.059-.045h4.961l.041.045v.437c0 .119-.074.18-.209.18-.648.03-1.127.18-1.443.421-.314.255-.557.616-.736 1.067 0 0-4.043 9.258-5.426 12.339-.525 1.007-1.053.917-1.503-.031-.571-1.171-1.773-3.786-2.646-5.71l.053-.036z"/>
                </svg> &nbsp Wikipedia: Internet</a>
            <h4>WWW</h4>
            <p class="text">WWW je zkratkou pro World Wide Web, česky celosvětová síť, je nejznámějším systémem na Internetu. Slouží ke sdílení hypertextových dokumentů. Mnoho lidí zaměňuje pojmy Internet a WWW, ale jak již víme, tak WWW je pouze jednou složkou celého systému. V této síti se šíří speciální dokumenty obsahující hypertextové odkazy a multimediální obsah - webové stránky. Pro zobrazení jakéhokoliv webu je nutné, aby byl uživatel napojen na internet, měl webový prohlížeč a znal URL adresu serveru (vzdáleného počítače, který nám obsah poskytuje), který jej obsahuje. Autorem je Tim Berners Lee.</p>
            <img src="img/wwwmap.png" alt="Mapa WWW" class="contentImg">
            <h4>Připojení</h4>
            <p class="text">Přístup k nám může nabídnout poskytovatel internetových služeb (ISP - Internet Service Provider). Samotné zapojení zařízení do sítě pak může probíhat buď kabelově nebo bezdrátově. Při fyzickém zapojení se nejčastěji setkáme s telefonní linkou (technologie z řady DSL) či kabelovou přípojkou. Připojit se můžeme i k bezdrátovým sítím, pokud se nacházíme na místě, kde je signál. Nejčastější technologie jsou Wi-Fi a mobilní sítě „xG" (např. 4G, LTE, 5G, 6G a další).</p>
            <h4>Protokoly</h4>
            <p class="text">Protokoly v IT sféře představují sady standardů a pravidel podle kterých na vzájem komunikují dvě zařízení. Pokud obě koncové zařízení fungují podle stehjných pravidel (protokolů), pak si rozumí a mohou spolu sdílet informace (relativně) bezproblémově. Internet používá mimo jiné i stejnojmenný Internet Protcol, momentálně ve verzi 4 a 6 (IPv4 a IPv6). Celý systém je de facto řízen rodinou protokolů TCP/IP.</p>
            <p class="text">Dále se běžně setkáváme i těmito protokoly: HTTP a jeho zabezpečená verze HTTPS, DHCP (často používán na automatické přiřazení IP adresy zařízení uvbnitř nějaké sítě), FTP (přenos souborů), jeho zabezpečená verze SFTP, IMAP, POP3 (email, pošta) a další.</p>
        </section>
    </section>
<?php
include 'includes/footer.php';
?>