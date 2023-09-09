<!doctype html>
<html lang="fr">

    <head>
        <!-- Balises communes -->
        <?php include_once ('../assets/module/head-module.php'); ?>

        <!-- Appels ressources page -->
        <link rel="stylesheet" href="/assets/css/style-accueil.css">

        <!-- SEO et identité page -->
        <link rel="canonical" href="https://darius-hollard.com/fr/accueil"/>
        <title>Darius Hollard - Portfolio</title>
        <meta name="description" content="Site porfolio de Darius Hollard, designer polyvalent et rigoureux. Consultez mes réalisations de projets, mon parcours, mes infos de contact et d'autres surprises."/>
    </head>

    <body>

        <!-- Navbar -->
        <?php include_once ('../assets/module/navbar.php'); ?>

        <main>

            <!-- Section 01 -->
            <div id="sec-home-01">

                <div class="col-left">
                    <h1 class="sec-title">Darius Hollard</h1>

                    <div class="job-box">
                        <div id="p-code-left" class="wait-for-load">&lt;p&gt;</div>
                        <a href="/fr/projets" id="job-1">
                            <p><span id="job-1-txt1">Web</span> <span id="job-1-txt2">Designer</span></p>
                        </a>
                        <div id="p-code-right" class="wait-for-load">&lt;/p&gt;</div>
                    </div>
                    
                    <div class="job-box">
                        <a href="/fr/projets" id="job-2">
                            <p>Motion designer</p>
                            <p>Motion designer</p>
                        </a>
                    </div>
                
                    <div class="job-box">
                        <a href="/fr/projets" id="job-3">
                            <p><span id="job-3-txt1">Graphic</span> <span id="job-3-txt2">Designer</span></p>
                        </a>
                    </div>
                    
                </div>

                <div class="col-right">
                    
                    <a class="portrait-content wait-for-load" href="/fr/parcours" aria-label="Voir mon parcours">
                        <div id="square-1" class="no-resize-transition"></div>
                        <div id="square-2" class="no-resize-transition"></div>
                        <img class="portrait" src="/assets/img/portrait-dh.jpg" alt="photo portrait de Darius Hollard">
                        <div id="parcours-box">
                            <svg width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text id="bulle-txt" x="0" y="30" fill="white">Mon parcours</text>
                                <path id="path-parc-2" d="M154.5 71.5C160.333 84.1667 181 110.3 217 113.5" stroke="white" fill="none" stroke-width="11"/>
                                <path id="path-parc-1"d="M2 33.5C41.1667 46.1667 135.7 58.2 200.5 5" stroke="white" fill="none" stroke-width="11"/>
                            </svg>
                        </div>
                    </a>
                    
                </div>

                <div class="bottom-tab wait-for-load">
                    <a href="#sec-home-02" class="scroll-down" aria-label="Défiler vers le bas la page">
                        <span id="ch-1"></span>
                        <span id="ch-2"></span>
                        <span id="ch-3"></span>
                    </a>
                </div>
                
            </div>

            <div id="sec-home-02">

                <div class="blob-shape blob-type-01" id="blob-A"></div>
                <div class="blob-shape blob-type-02" id="blob-B"></div>

                <div class="mid-container">

                    <div class="welcome-bloc">
                        <h2 class="sec-title">Bienvenue sur mon <span>portfolio.</span></h2>

                        <p class="welcome-txt">Je m'appelle Darius Hollard, j'ai 
                        <?php
                        // Calcul de mon âge automatiquement
                        $anniversaire = 1995;
                        $anActuel = date("Y");
                        $age = $anActuel - $anniversaire;
                        echo $age;
                        ?>
                         ans et j'espère que vous passerez un bon moment en consultant ce site !</p>

                        <p class="welcome-txt">Je suis un designer polyvalent qui imagine et code des projets web. Je sais aussi créer des visuels, des animations 2D et faire pousser des tomates (on sait jamais, ça peut servir 👀🍅).</p>
                    </div>

                    <div class="btn-box">

                        <a href="/fr/projets" class="welcome-btn">
                            <img src="/assets/svg/ico-picture-blanc.svg" alt="icone d'un soleil au dessus de deux collines">
                            <p>Voir mes projets</p>
                        </a>

                        <a href="/fr/parcours" class="welcome-btn">
                            <img src="/assets/svg/ico-sacoche-blanc.svg" alt="icone d'une sacoche de travail">
                            <p>Mon parcours & CV</p>
                        </a>

                        <a href="/fr/contact" class="welcome-btn">
                            <img src="/assets/svg/ico-enveloppe-blanc.svg" alt="icone d'une enveloppe postale">
                            <p>Me contacter</p>
                        </a>

                        <a href="https://www.instagram.com/darius_hollard/" target="_blank" class="welcome-btn">
                            <img src="/assets/svg/ico-pouce-blanc.svg" alt="icone d'une pouce vers le haut">
                            <p>Où me suivre</p>
                        </a>

                        <a class="welcome-btn" id="easter-clue">
                            <img src="/assets/svg/ico-easter-blanc.svg" alt="icone d'un oeuf de pâques">
                            <p>Easter egg</p>

                            <div class="popover-easter">
                                <p id="clue-message">🔎 Inspectez en bas</p>
                            </div>
                        </a>

                    </div>

                </div>
                
            </div>

            <div id="sec-home-03">
                
                <div class="mid-container">

                    <div class="title-box">
                        <h2 class="sec-title">Envie d'en savoir plus sur le processus de création de ce portfolio ?</h2>
                    </div>

                    <div class="process-btn-bloc">
                        <p>Prototype interactif du site :</p>
                        <a href="https://www.figma.com/file/MteIU7aD4xXnPuOax6YnlT/Porfolio-perso-V1?node-id=0%3A1&t=MthQvsCoa1aIF2xx-1" target="_blank">Maquette Figma</a>
                    </div>

                    <div class="process-btn-bloc">
                        <p>Détail du processus créatif :</p>
                        <a href="/fr/projets" target="_blank">Page du projet</a>
                    </div>

                    <div class="process-btn-bloc">
                        <p>Documentation du code :</p>
                        <a href="https://github.com/dhollard/site_portfolio" target="_blank">Repository GitHub</a>
                    </div>

                    <!-- Vous pouvez aussi utiliser les outils développeurs ;) -->

                </div>

                <div class="blob-shape blob-type-03" id="blob-C"></div>

            </div>

        </main>

        <!-- Footer -->
        <?php include_once ('../assets/module/footer.php'); ?>

        <!-- Script pop-over indice easter egg-->
        <script>
            var button = document.querySelector('#easter-clue');
            var popover = document.querySelector('.popover-easter');
            var message = document.querySelector('#clue-message');

            button.addEventListener('click', function() {
                popover.classList.add('show');
                if (message.textContent === '🔎 Inspectez en bas') {
                    message.textContent = '👀 Lire entre les lignes';
                    } else {
                        message.textContent = '🔎 Inspectez en bas';
                    }
                    setTimeout(function() {
                    popover.classList.remove('show');
                    }, 2000);
                });
        </script>

        <!-- Appels et scripts de fin de page -->
        <?php include_once ('../assets/module/end-page-module.php'); ?>   

    </body>
</html>