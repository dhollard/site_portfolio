<!-- Script réduction image en-tête au scroll -->
<script>
    //fonction qui déclenche les classes d'animation du header projet au scroll
    window.onscroll = function() {
        scrollFunction()
    };

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
    $(".cadre-content-wrapper").scroll(function () {

        /*setTimeout(function() {
            $(this).siblings(".cadre-instruction-tag").addClass("fade-out-tag");
            console.log("Le trigger marche");
        }, 800);*/

        /*$(this).siblings(".cadre-instruction-tag").delay(2000).addClass("fade-out-tag");*/

        $(this).delay(600).queue(function(){
            $(this).siblings(".cadre-instruction-tag").addClass("fade-out-tag").dequeue();
        });

        
    });
</script>

<!-- Script pour permutter entre la version mobile et desktop d'un cadre -->
<script>
    $(".switch-cadre").click(function () {

    //$(this).siblings(".cadre-mobile").removeClass("switch-off-cadre");
    //$(this).siblings(".cadre-desktop").addClass("switch-off-cadre");
    //console.log("Confirmation détection condition");

    // Vérifie si le cadre mobile voisin est masqué
    if ($(this).siblings(".cadre-mobile").hasClass("switch-off-cadre")) {
        $(this).siblings(".cadre-mobile").removeClass("switch-off-cadre");
        $(this).siblings(".cadre-desktop").addClass("switch-off-cadre");
        $(this).addClass("switch-to-desktop");
        //console.log("If working");

    // Vérifie le cas échéant, si le cadre desktop voisin est masqué
    } else if ($(this).siblings(".cadre-desktop").hasClass("switch-off-cadre")) {
        $(this).siblings(".cadre-desktop").removeClass("switch-off-cadre");
        $(this).siblings(".cadre-mobile").addClass("switch-off-cadre");
        $(this).removeClass("switch-to-desktop");
        //console.log("Else If working");
    } else {
        //console.log("Else triggered");
    }

    });
</script>

<!-- Script pour déverouiller un cadre maquette afin de pouvoir le scroller -->
<script>
    
    $(".cadre-mobile.prevent-scrolling").on("dblclick", function () {
        
        $(this).removeClass("prevent-scrolling");

    });

</script>

<!-- Script pour re-vérouiller un cadre maquette quand on clique en dehors -->
<script>
    /*$('html').on("click", function(e) {
        if(!$(e.target).hasClass('cadre-mobile') ) {
            console.log("Lock it");
        } else {
            console.log("Failed if");
        }
    });​*/

    $(document).click(function(e) {
        if (!$(e.target).hasClass("cadre-content-wrapper")) {
            //console.log($(e.target));
            $(".cadre-mobile").addClass("prevent-scrolling");

        } else {
            console.log("Else triggered");
        }

    });

</script>