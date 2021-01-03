<?php
global $page;
require __DIR__ . '/blocks/header.php';
?>

<header>
    <div class="header-logo"><img src="../../../Downloads/BACKUP_WEBMAJSTR/img/webmajstrlogo.svg" alt="Logo stránky"></div>
    <nav class="navbar">
        <div class="dropdown">
            <button class="dropbtn">O Webu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg></button>
            <div class="dropdown-content">
                <a href="#">Internet</a>
                <a href="#">Webové prohlížeče</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Grafika <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg></button>
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


<?php
require $page;

require __DIR__ . '/blocks/footer.php';
