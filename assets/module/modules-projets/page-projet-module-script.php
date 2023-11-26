<!-- Script réduction image en-tête au scroll -->
<script>
    window.addEventListener('scroll', scrollFunction, {
        passive: true
    });

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

<!-- ********************* Scripts liés aux cadres scrollables ********************* -->

<!-- Script pour afficher la version plein écran d'un cadre scrollable -->
<script>
    $(".cadre-trigger").click(function() {
        // Ajoute la classe .open-overlay au .zone-fullscreen-cadre voisin pour l'afficher
        $(this).siblings(".zone-fullscreen-cadre").addClass("open-overlay");

        // Appelle la fonction qui bloque/débloque le scroll sur la page en fonction de l'état d'ouverture de l'overlay
        fullscreenStopScrollPage();
    });
</script>

<!-- Script pour masquer la version plein écran d'un cadre scrollable -->
<script>
    // En cliquant sur la croix prévu à cet effet
    $(".hide-cadre-btn").click(function() {
        // Retire la classe .open-overlay au .zone-fullscreen-cadre parent pour le masquer
        $(this).parents(".zone-fullscreen-cadre").removeClass("open-overlay");

        // Appelle la fonction qui bloque/débloque le scroll sur la page
        fullscreenStopScrollPage();

    });

    // En cliquant sur l'overlay noir
    $(".fullcadre-back-overlay").click(function() {
        // Retire la classe .open-overlay au .zone-fullscreen-cadre parent pour le masquer
        $(this).parent(".zone-fullscreen-cadre").removeClass("open-overlay");

        // Appelle la fonction qui bloque/débloque le scroll sur la page
        fullscreenStopScrollPage();

    });
</script>

<!-- Script pour permutter entre la version mobile et desktop d'un cadre quand cela est possible -->
<script>
    $(".switch-cadre").click(function() {

        // Vérifie si le cadre scrollable voisin ne possède PAS déjà la classe .force-mobile et l'applique le cas échéant
        if (!$(this).parent(".fullcadre-bottom-zone").siblings(".cadre-scrollable").hasClass("force-mobile")) {

            $(this).parent(".fullcadre-bottom-zone").siblings(".cadre-scrollable").addClass("force-mobile");

            // Remise à zéro de la position de scroll du cadre
            $(this).parent(".fullcadre-bottom-zone").siblings(".cadre-scrollable").find('.cadre-content-wrapper').scrollTop(0);

            // Retire la classe .force-mobile
        } else {

            $(this).parent(".fullcadre-bottom-zone").siblings(".cadre-scrollable").removeClass("force-mobile");

            // Remise à zéro de la position de scroll du cadre
            $(this).parent(".fullcadre-bottom-zone").siblings(".cadre-scrollable").find('.cadre-content-wrapper').scrollTop(0);
        }

    });
</script>

<!-- ********************* Scripts liés au module sommaire ********************* -->

<!-- Script qui masque le sommaire en début de page -->
<script>
    window.addEventListener('DOMContentLoaded', hideSom, {
        passive: true
    });
    window.addEventListener('scroll', hideSom);

    function hideSom() {
        // Vérifie le niveau de scroll
        if (document.body.scrollTop > 280 || document.documentElement.scrollTop > 280) {

            $("#Sommaire").removeClass("mask-sommaire");

        } else {
            $("#Sommaire").addClass("mask-sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("sommaire-no-scroll");
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
            $(root).removeClass("sommaire-no-scroll");

        } else {

            $("#Sommaire").addClass("show-sommaire");
            $("#Overlay_sommaire").addClass("show-overlay");
            $(root).addClass("sommaire-no-scroll");

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
            $(root).removeClass("sommaire-no-scroll");

        } else {

            $("#Sommaire").addClass("show-sommaire");
            $("#Overlay_sommaire").addClass("show-overlay");
            $(root).addClass("sommaire-no-scroll");

        }

    });
</script>

<!-- Script pour masquer le sommaire quand on clic sur un lien (sauf sur grand écran, où le sommaire ouvert ne gêne pas la lecture) -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $(".som-link").click(function() {
        if ($(window).outerWidth() < 1800) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("sommaire-no-scroll");

        } else {

        }

    });
</script>

<!-- Script pour masquer quand on clique sur l'overlay mobile -->
<script>
    var root = document.getElementsByTagName('html')[0];

    $("#Overlay_sommaire").click(function() {
        if ($(window).outerWidth() < 768) {

            $("#Sommaire").removeClass("show-sommaire");
            $("#Overlay_sommaire").removeClass("show-overlay");
            $(root).removeClass("sommaire-no-scroll");

        } else {

        }

    });
</script>

<!-- Script pour colorier le lien du sommaire correspondant à la partie en cours de consultation -->
<script>
    window.addEventListener('resize', progresSom);
    window.addEventListener('scroll', progresSom, {
        passive: true
    });

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

<!-- Script qui mémorise que l'utilisateur à déjà ouvert le sommaire au moins une fois et retire l'anim du sommaire -->
<script>
    function SetSommaireVisited() {
        // Définir le contenu de la constante à ajouter au localStorage navigateur
        const myConstant = "Affirmatif";
        // Ajout de la constante
        localStorage.setItem("SommaireVisited", myConstant);
        // Suppression de l'animation du sommaire
        $("#Sommaire").removeClass("eyecatch-anim");
    }

    // Appel de la fonction en cas de clic sur l'élément sommaire
    document.getElementById("Sommaire").addEventListener("click", SetSommaireVisited);

    // Appel de la fonction en cas de clic non relaché sur l'élément (nécessaire pour version petit format)
    document.getElementById("Sommaire").addEventListener("mousedown", SetSommaireVisited);

    // Appel de la fonction en cas d'appuie du doigt sur mobile
    document.getElementById("Sommaire").addEventListener("touchstart", SetSommaireVisited);
</script>

<!-- Script qui applique une animation au sommaire si il n'a jamais été ouvert -->
<script>
    function checkSommaireStatus() {
        // On vérifie si SommaireVisited présent dans localStorage est égal à "Affirmatif"
        if (localStorage.getItem("SommaireVisited") !== "Affirmatif") {
            // On ajoute une animation infinie sur le sommaire pour attirer l'attention de l'utilisateur
            $("#Sommaire").addClass("eyecatch-anim");
        } else {
            // On n'ajoute pas d'animation aux éléments de sommaire car l'utilisateur les connaient déjà
        }
    }

    // Appel de la fonction au chargement de la page
    document.addEventListener("DOMContentLoaded", checkSommaireStatus);
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
                $(root).removeClass("sommaire-no-scroll");
            } else if (distance < -threshold) {
                // Glissement vers le haut, afficher #Sommaire
                $('#Sommaire').addClass('show-sommaire');
                $("#Overlay_sommaire").addClass("show-overlay");
                $(root).addClass("sommaire-no-scroll");
            } else {
                // Glissement pas assez prononcé, ne rien faire
            }
        });

        $(document).on('mouseup touchend', function() {
            startY = 0;
        });
    });
</script>

<!-- Script de gestion des éléments carrousel -->
<script>
    // Utiliser la fonction initializeCarrousel sur chaque carrousel présent sur la page
    $(document).ready(function() {
        $(".carrousel").each(function() {
            initializeCarrousel($(this));
        });
    });

    // Récupère le contenu du carrousel
    function initializeCarrousel(carrousel) {
        const currentIndexAttr = "data-current-index";
        const pictures = carrousel.find(".carrousel-inner figure");
        const totalPictures = pictures.length;

        // Récupère le bouton précédent et lui attribut la valeur "-1" au clic
        carrousel.find(".prev-btn-carrousel").on("click", function() {
            navigateCarrousel(carrousel, -1);
        });

        // Récupère le bouton précédent et lui attribut la valeur "+1" au clic
        carrousel.find(".next-btn-carrousel").on("click", function() {
            navigateCarrousel(carrousel, 1);
        });

        // Permet de permutter entre les images du carrousel en modifiant la valeur de "data-current-index" et en ajoutant/retirant la classe hide-carrousel
        function navigateCarrousel(carrousel, direction) {
            let currentIndex = parseInt(carrousel.attr(currentIndexAttr));
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = totalPictures - 1;
            } else if (currentIndex >= totalPictures) {
                currentIndex = 0;
            }

            pictures.addClass("hide-carrousel");
            pictures.eq(currentIndex).removeClass("hide-carrousel");

            carrousel.attr(currentIndexAttr, currentIndex);
        }

        // Masquer tous les éléments sauf le premier lors de l'initialisation (redondance avec le HTML au cas où)
        pictures.not(":first").addClass("hide-carrousel");
    }
</script>

<!-- <script>
    // Utiliser la fonction initializeCarrousel sur chaque carrousel présent sur la page
    $(document).ready(function() {
        $(".carrousel").each(function() {
            initializeCarrousel($(this));
        });
    });

    // Récupère le contenu du carrousel
    function initializeCarrousel(carrousel) {
        const currentIndexAttr = "data-current-index";
        const pictures = carrousel.find(".carrousel-inner picture");
        const totalPictures = pictures.length;

        // Récupère le bouton précédent et lui attribut la valeur "-1" au clic
        carrousel.find(".prev-btn-carrousel").on("click", function() {
            navigateCarrousel(carrousel, -1);
        });

        // Récupère le bouton précédent et lui attribut la valeur "+1" au clic
        carrousel.find(".next-btn-carrousel").on("click", function() {
            navigateCarrousel(carrousel, 1);
        });

        // Permet de permutter entre les images du carrousel en modifiant la valeur de "data-current-index" et en ajoutant/retirant la classe hide-carrousel
        function navigateCarrousel(carrousel, direction) {
            let currentIndex = parseInt(carrousel.attr(currentIndexAttr));
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = totalPictures - 1;
            } else if (currentIndex >= totalPictures) {
                currentIndex = 0;
            }

            pictures.addClass("hide-carrousel");
            pictures.eq(currentIndex).removeClass("hide-carrousel");

            carrousel.attr(currentIndexAttr, currentIndex);
        }

        // Masquer tous les éléments sauf le premier lors de l'initialisation (redondance avec le HTML au cas où)
        pictures.not(":first").addClass("hide-carrousel");
    }
</script> -->