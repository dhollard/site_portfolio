<!-- Script réduction image en-tête au scroll -->
<script>
    //fonction qui déclenche les classes d'animation du header projet au scroll
    /*window.onscroll = function() {
        scrollFunction()
    };*/
    window.addEventListener('scroll', scrollFunction, {passive: true});


    function scrollFunction() {

        //fonction animation header
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("Header_projet").classList.add("header-scrolled");
            document.getElementById("Titre_page").classList.add("header-titre-scrolled");
            document.getElementById("Scroll_btn_header").classList.add("header-btn-scrolled");
        } else {
            document.getElementById("Header_projet").classList.remove("header-scrolled");
            document.getElementById("Titre_page").classList.remove("header-titre-scrolled");
            document.getElementById("Scroll_btn_header").classList.remove("header-btn-scrolled");
        }

    }
</script>

<!-- Script qui rend le bouton scroll header page projet fonctionnel -->
<script>
    function headerScrollButton() {
        window.scroll({
            top: 100,
            behavior: "smooth",
        });
    }
</script>

<!-- Script pour masquer l'invitation à scroller un cadre -->
<script>
    $(".cadre-content-wrapper").scroll(function() {

        $(this).delay(600).queue(function() {
            $(this).siblings(".cadre-instruction-tag").addClass("fade-out-tag").dequeue();
        });

    });
</script>

<!-- Script pour permutter entre la version mobile et desktop d'un cadre -->
<script>
    $(".switch-cadre").click(function() {

        // Vérifie si le cadre mobile voisin est masqué
        if ($(this).siblings(".cadre-mobile").hasClass("switch-off-cadre")) {
            $(this).siblings(".cadre-mobile").removeClass("switch-off-cadre");
            $(this).siblings(".cadre-desktop").addClass("switch-off-cadre");
            $(this).addClass("switch-to-desktop");

            // Vérifie le cas échéant, si le cadre desktop voisin est masqué
        } else if ($(this).siblings(".cadre-desktop").hasClass("switch-off-cadre")) {
            $(this).siblings(".cadre-desktop").removeClass("switch-off-cadre");
            $(this).siblings(".cadre-mobile").addClass("switch-off-cadre");
            $(this).removeClass("switch-to-desktop");
        } else {

        }

    });
</script>

<!-- Script pour déverouiller un cadre maquette afin de pouvoir le scroller -->
<script>
    $(".cadre-mobile.prevent-scrolling").on("dblclick", function() {

        $(this).removeClass("prevent-scrolling");

    });
</script>

<!-- Script pour re-vérouiller un cadre maquette quand on clique en dehors -->
<script>
    // Vérouiller si on clique sur autre chose qu'un contenu mobile
    $(document).click(function(e) {
        if (!$(e.target).hasClass("cadre-content-wrapper")) {

            $(".cadre-mobile").addClass("prevent-scrolling");

        } else {

        }

    });

    $(document).scroll(function(e) {
        if (!$(e.target).hasClass("cadre-content-wrapper")) {

            $(".cadre-mobile").addClass("prevent-scrolling");

        } else {

        }

    });
</script>

<!-- ********************* Scripts liés au module sommaire ********************* -->

<!-- Script qui masque le sommaire en début de page -->
<script>
    window.addEventListener('DOMContentLoaded', hideSom, {passive: true});
    window.addEventListener('scroll', hideSom);

    function hideSom() {
        // Vérifie le niveau de scroll
        if (document.body.scrollTop > 280 || document.documentElement.scrollTop > 280) {

            $("#Sommaire").removeClass("mask-sommaire");

        } else {
            $("#Sommaire").addClass("mask-sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("no-scroll");
        }
    };
</script>

<!-- Script pour afficher/masquer le sommaire sur desktop -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $("#Sommaire_switch_desktop").click(function() {
        if ($("#Sommaire").hasClass("show-sommaire")) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("no-scroll");

        } else {

            $("#Sommaire").addClass("show-sommaire");
            $("#Overlay_sommaire").addClass("show-overlay");
            $(root).addClass("no-scroll");

        }

    });
</script>

<!-- Script pour afficher/masquer le sommaire sur mobile -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $("#Sommaire_top_bar_mobile").click(function() {
        if ($("#Sommaire").hasClass("show-sommaire")) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("no-scroll");

        } else {

            $("#Sommaire").addClass("show-sommaire");
            $("#Overlay_sommaire").addClass("show-overlay");
            $(root).addClass("no-scroll");

        }

    });
</script>

<!-- Script pour masquer le sommaire quand on clic sur un lien mobile -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $(".som-link").click(function() {
        if ($(window).width() < 992) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("no-scroll");

        } else {

        }

    });
</script>

<!-- Script pour masquer quand on clique sur l'overlay mobile -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $("#Overlay_sommaire").click(function() {
        if ($(window).width() < 992) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("no-scroll");

        } else {

        }

    });
</script>

<!-- Script pour animer le sommaire une fois, pour attirer l'attention -->
<script>
    let animOnce = 0;

    window.addEventListener('DOMContentLoaded', loadSom(eyeCatchSommaire));

    // Si au chargement le scroll est déjà bien entamé dans la page, ne pas jouer d'animation
    function loadSom(callback) {
        // Vérifie le niveau de scroll au chargement
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            animOnce = 1;
            callback();
        } else {
            // Ne rien faire
        }
    };

    window.addEventListener('scroll', eyeCatchSommaire, {passive: true});

    function eyeCatchSommaire() {

        // Vérifie le niveau de scroll suffisant pour agir
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            // Vérifie si l'animation a déjà été jouée une fois
            if (animOnce == 0) {

                $("#Sommaire").addClass("eyecatch-anim").delay(2000).queue(function() {
                    $("#Sommaire").removeClass("eyecatch-anim").dequeue();
                });
                animOnce = 1;

            } else if (animOnce == 1) {
                // Ne rien faire
            }
        } else {
            // Ne rien faire
        }


    }
</script>

<!-- Script pour colorier le lien du sommaire correspondant à la partie en cours de consultation -->
<script>
    window.addEventListener('resize', progresSom);
    window.addEventListener('scroll', progresSom, {passive: true});

    function progresSom() {

        var scrollPosition = $(window).scrollTop();

        // Déclencher fonction sur chaque élément .section-projet
        $('.section-projet').each(function() {
            var sectionTop = $(this).offset().top - 350;
            var sectionId = $(this).attr('id');
            var $somLink = $('.som-link[href="#' + sectionId + '"]');

            // Vérifie si .section-projet est visible
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + $(this).outerHeight()) {
                // Ajoute la classe 'current-link' au .som-link correspondant si il ne l'a pas déjà
                if (!$somLink.hasClass('current-link')) {
                    $somLink.addClass('current-link');
                }
            } else {
                // Retire la classe 'current-link' au .som-link si il l'a déjà
                if ($somLink.hasClass('current-link')) {
                    $somLink.removeClass('current-link');
                }
            }
        });
    }
</script>

<!-- Script pour que le sommaire mobile soit activable via glissement et pas juste clic -->
<script>
    $(document).ready(function() {
    var startY = 0;
    var threshold = 50; // Sensibilité ajustable du glissement

    $('#Sommaire_top_bar_mobile').on('mousedown touchstart', function(event) {
        startY = event.clientY || event.originalEvent.touches[0].clientY;
    });

    $(document).on('mousemove touchmove', function(event) {
        if (startY === 0) return;

        var currentPosition = event.clientY || event.originalEvent.touches[0].clientY;
        var distance = currentPosition - startY;

        if (distance > threshold) {
        // Glissement vers le bas, masquer #Sommaire
        $('#Sommaire').removeClass('show-sommaire');
        $("#Overlay_sommaire").removeClass("show-overlay");
        $(root).removeClass("no-scroll");
        } else if (distance < -threshold) {
        // Glissement vers le haut, afficher #Sommaire
        $('#Sommaire').addClass('show-sommaire');
        $("#Overlay_sommaire").addClass("show-overlay");
        $(root).addClass("no-scroll");
        } else {
        // Glissement pas assez prononcé, ne rien faire
        }
    });

    $(document).on('mouseup touchend', function() {
        startY = 0;
    });
    });
</script>

<!-- Script qui applique/retire la classe de blocage de transitions lors d'un window resize -->
<script>
    let resizeTimer;

    window.addEventListener("resize", () => {
        document.body.classList.add("resize-animation-stopper");
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            document.body.classList.remove("resize-animation-stopper");
        }, 400);

    });
</script>