<!-- CSS Preload :hover icons -->
<style type="text/css">
    body::after {
        position: absolute;
        width: 0;
        height: 0;
        overflow: hidden;
        z-index: -1;
        content:
            /* footer */
            url('/assets/svg/ico-linkedin-primary.svg') url('/assets/svg/ico-instagram-primary.svg') url('/assets/svg/ico-github-primary.svg') url('/assets/svg/ico-copyto-primary.svg')
            /* pages projets */
            url('/assets/svg/ico-sommaire-full-blanc.svg') url('/assets/svg/ico-fleche-primary100.svg') url('/assets/svg/ico-fleche-rotative-primary.svg') url('/assets/svg/ico-main-gesture-amb120.svg') url('/assets/svg/ico-souris-gesture-amb120.svg') url('/assets/svg/ico-endbloc-projet-amb20.svg');
    }
</style>

<!-- Font preloader -->
<div class="font-preloader" style="opacity:0">
    <span style="font-family:Alegreya; font-weight: 900;">texte</span>
    <span style="font-family:Alegreya; font-style:italic; font-size: 72px; font-weight: 700; color: #FF6666;">Designer</span>
</div>

<!-- Retire la classe qui délaie les transitions au chargement après un délai -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var elements = document.querySelectorAll(".wait-for-load");
        elements.forEach(function(element) {
            setTimeout(function() {
                element.classList.remove("wait-for-load");
            }, 10);
        });
    });
</script>

<!-- Script pout bloquer les transitions CSS en cas de redimensionnement du navigateur sur les éléments qui possèdent la classe .no-resize-transition -->
<script>
    (function() {
        let timer = 0;
        window.addEventListener('resize', function() {
            if (timer) {
                clearTimeout(timer);
                timer = null;
            } else {
                // Ajoute la classe 'stop-transitions' aux éléments qui ont la classe 'no-resize-transition'
                const elements = document.querySelectorAll('.no-resize-transition');
                elements.forEach(function(element) {
                    element.classList.add('stop-transitions');
                });
            }

            timer = setTimeout(function() {
                // Retire la classe 'stop-transitions' des éléments qui ont la classe 'no-resize-transition'
                const elements = document.querySelectorAll('.no-resize-transition');
                elements.forEach(function(element) {
                    element.classList.remove('stop-transitions');
                });
                timer = null;
            }, 25);
        });
    })();
</script>

<!-- Script interactions navbar -->
<script defer src="/assets/script/navbar-interactions.js"></script>

<!-- Script Cookie Consent -->
<script defer src="/assets/libraries/CookieConsent/cookieconsent.js"></script>
<script defer src="/assets/libraries/CookieConsent/cookieconsent-init.js"></script>

<!-- Script pour bouton copy to clipboard -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyButton = document.querySelector('.copy-button');
        var copyMsg = document.querySelector('.copy-message');
        var textToCopy = document.querySelector('#text-to-copy').textContent;
        copyButton.addEventListener('click', function() {
            var tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.value = textToCopy;
            tempInput.select();
            document.execCommand('copy');
            tempInput.remove();
            copyMsg.classList.add('copied-msg');
            copyButton.classList.add('copied-img');
            setTimeout(function() {
                copyMsg.classList.remove('copied-msg');
                copyButton.classList.remove('copied-img');
            }, 1000);
        });
    });
</script>

<!-- Script d'ajout du visuel cookie pour Cookie Consent-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ciblage du conteneur cookie
        var boite = document.getElementById('cc_div');

        // Création du contenu à insérer
        var string = `<img id="cookie-img" src="/assets/img/cookie.png" alt="photo d'un cookie" width="200px">`;

        // Insertion de l'image
        boite.insertAdjacentHTML('afterbegin', string);
    });
</script>