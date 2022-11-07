<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/css/style-accueil.css">
        <title>Darius Hollard - Portfolio</title>
    </head>

    <body>

        <?php include_once ('../assets/module/navbar.php'); ?>

        <main>

            <div id="sec-home-01">
                <div class="col-left">
                    <h2 class="sec-title">Darius Hollard</h2>

                    <div class="job-box">
                        <div id="p-code-left">&lt;p&gt;</div>
                        <a href="#" id="job-1">
                            <p><span id="job-1-txt1">Web</span> <span id="job-1-txt2">Designer</span></p>
                        </a>
                        <div id="p-code-right">&lt;/p&gt;</div>
                    </div>
                    
                    <div class="job-box">
                        <a href="#" id="job-2">
                            <p>Motion Designer</p>
                        </a>
                    </div>
                
                    <div class="job-box">
                        <a href="#" id="job-3">
                            <p>Graphic Designer</p>
                        </a>
                    </div>
                    
                </div>

                <div class="col-right">
                    <div style="width:100%; height:100%; background:#261624; margin:auto;"></div>
                </div>

                <div class="bottom-tab">

                </div>
                
            </div>

            <div style="height:2000px;"></div>

            <div id="sec-home-02"></div>

            <div id="sec-home-03"></div>

        </main>
    </body>

    <!-- Script interactions navbar -->
    <script>
        const navBar = document.querySelector(".navbar");
        const hamburger = document.querySelector(".nav-toggle");
        const navMenu = document.querySelector(".nav-menu");
        const navOverlay = document.querySelector(".nav-overlay");

        // ajouter ou retirer la classe .active lorsqu'on clique sur nav-toggle
        hamburger.addEventListener("click", () => {
            navBar.classList.toggle("active");
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
            navOverlay.classList.toggle("active");
        })

        // retirer la classe .active lorsqu'on clique sur un lien du menu hamburger
        document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
            navBar.classList.remove("active");
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
            navOverlay.classList.remove("active");
        }))

        // déclencher la fonction reset quand on change la taille de la fenêtre
        window.onresize = reset;

        // retire la classe .active lorsque la fenêtre dépasse les 992px
        function reset(){
            if(window.innerWidth >= 992){
                //laptop ou +
                navBar.classList.remove("active");
                hamburger.classList.remove("active");
                navMenu.classList.remove("active");
                navOverlay.classList.remove("active");
            }
            else {
                //mobile
            }

        }
    </script>
</html>