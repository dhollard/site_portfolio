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