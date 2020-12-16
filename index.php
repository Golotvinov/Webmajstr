<?php
include 'includes/header.php';
?>

<body>
<section class="main">
    <img src="img/webmajstrlogo.svg" class="logo-big" alt="Logo stránky">
    <h1 class="hero">Vítá vás <span>Webmajstr</span>!</h1>
    <h3>Webmajstr je webová miniaplikace, která vám pomůže pochopit základy webového vývoje. Představí vám jak web
        funguje, fundamentální koncepty kódování, tipy a triky a nakonec vám nabídne i kvíz, kde si budete moci
        vyzkoušet své nově dobyté znalosti. </h3>

    <section class="webwireframe">
        <img src="img/webwireframe.svg" alt="Vektorové schéma prototypu webových stránek">
    </section>
    <div class="btn">
        <button id="button2" class="button" type="button">JDEME NA TO!</button>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Předtím než začneme prosím uveď svoje jméno:</h2>
            <br><br>
            <form>
                <label for="fname">Jméno</label>
                <input type="text" id="fname" name="fname">
            </form>
            <br>
            <button class="button" type="button">Hotovo!</button>
        </div>
    </div>
</section>

<script src="js/main.js"></script>
</body>

</html>