<!-- Script réduction image en-tête au scroll -->
<script>
    //fonction qui anim le header au scroll
    window.onscroll = function() {
        scrollFunction()
    };

    /* function scrollFunction() {
        //vérification taille écran
        if (window.matchMedia("(min-width:992px)").matches) {

            //fonction animation header grand écran
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("Header_projet").style.height = "400px";
                document.getElementById("Titre_page").style.fontSize = "42px";
                document.getElementById("Titre_page").style.transform = "translateY(80px)";
                document.getElementById("Scroll_btn_header").style.transform = "translateY(200px)";
            } else {
                document.getElementById("Header_projet").style.height = "100vh";
                document.getElementById("Titre_page").style.fontSize = "58px";
                document.getElementById("Titre_page").style.transform = "translateY(0px)";
                document.getElementById("Scroll_btn_header").style.transform = "translateY(0px)";
            }

        } else {

            //fonction animation header petit écran
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("Header_projet").style.height = "400px";
                document.getElementById("Titre_page").style.fontSize = "42px";
                document.getElementById("Titre_page").style.transform = "translateY(100px)";
                document.getElementById("Scroll_btn_header").style.transform = "translateY(200px)";
            } else {
                document.getElementById("Header_projet").style.height = "100vh";
                document.getElementById("Titre_page").style.fontSize = "42px";
                document.getElementById("Titre_page").style.transform = "translateY(0px)";
                document.getElementById("Scroll_btn_header").style.transform = "translateY(0px)";
            }

        }
    
    }*/

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

    // changement taille texte responsive malgré fonction précédente
    /* window.addEventListener('resize', fontChangeOnResize);

     function fontChangeOnResize() {
         if (window.matchMedia("(min-width:992px)").matches) {

             
             if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {

                 document.getElementById("Titre_page").style.fontSize = "42px";
                 document.getElementById("Titre_page").style.transform = "translateY(80px)";

             } else {

                 document.getElementById("Titre_page").style.fontSize = "58px";
             }
             
         } else {

             document.getElementById("Titre_page").style.fontSize = "42px";

         }
     } */
</script>

<!-- Script bouton scroll header page -->
<script>
    function headerScrollButton() {
        window.scroll({
            top: 100,
            behavior: "smooth",
        });
    }
</script>