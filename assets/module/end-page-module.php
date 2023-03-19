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
    }
</style>

<!-- Font preloader -->
<div class="font-preloader" style="opacity:0">
    <span style="font-family:Alegreya; font-weight: 900;">texte</span>
    <span style="font-family:Alegreya; font-style:italic; font-size: 72px; font-weight: 700; color: #FF6666;">Designer</span>
</div>

<!-- Retire la classe qui délaie les transitions au chargement après un délai -->
<script>document.addEventListener("DOMContentLoaded", function () {
    var elements = document.querySelectorAll(".wait-for-load");
        elements.forEach(function (element) {
            setTimeout(function () {
                element.classList.remove("wait-for-load");
            }, 10);
        });
    });
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