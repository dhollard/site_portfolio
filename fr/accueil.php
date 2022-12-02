<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/css/style-accueil.css">
        <title>Darius Hollard - Portfolio</title>
    </head>

    <body>

        <!-- navbar -->
        <?php include_once ('../assets/module/navbar.php'); ?>

        <main>

            <!-- Section 01 -->
            <div id="sec-home-01">

                <div class="col-left">
                    <h1 class="sec-title">Darius Hollard</h1>

                    <div class="job-box">
                        <div id="p-code-left">&lt;p&gt;</div>
                        <a href="#" id="job-1">
                            <p><span id="job-1-txt1">Web</span> <span id="job-1-txt2">Designer</span></p>
                        </a>
                        <div id="p-code-right">&lt;/p&gt;</div>
                    </div>
                    
                    <div class="job-box">
                        <a href="#" id="job-2">
                            <p>Motion designer</p>
                            <p>Motion designer</p>
                        </a>
                    </div>
                
                    <div class="job-box">
                        <a href="#" id="job-3">
                            <p><span id="job-3-txt1">Graphic</span> <span id="job-3-txt2">Designer</span></p>
                        </a>
                    </div>
                    
                </div>

                <div class="col-right">
                    
                    <a class="portrait-content" href="#">
                        <div id="square-1"></div>
                        <div id="square-2"></div>
                        <img class="portrait" src="/assets/img/portrait-dh.jpg">
                        <div id="parcours-box">
                            <svg width="auto" height="auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text id="bulle-txt" x="0" y="30" fill="white">Mon parcours</text>
                                <path id="path-parc-2" d="M154.5 71.5C160.333 84.1667 181 110.3 217 113.5" stroke="white" fill="none" stroke-width="11"/>
                                <path id="path-parc-1"d="M2 33.5C41.1667 46.1667 135.7 58.2 200.5 5" stroke="white" fill="none" stroke-width="11"/>
                            </svg>
                        </div>
                    </a>
                    
                </div>

                <div class="bottom-tab">
                    <a href="#" class="scroll-down">
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

                    <div>
                        <h2 class="sec-title">Bienvenue sur mon <span>portfolio.</span></h2>
                    </div>

                    <div class="btn-box">

                        <a href="#" class="welcome-btn">
                            <img src="/assets/svg/ico-picture-blanc.svg" alt="icone d'un soleil au dessus de deux collines">
                            <p>Voir mes projets</p>
                        </a>

                        <a href="#" class="welcome-btn">
                            <img src="/assets/svg/ico-sacoche-blanc.svg" alt="icone d'une sacoche de travail">
                            <p>Mon parcours & CV</p>
                        </a>

                        <a href="#" class="welcome-btn">
                            <img src="/assets/svg/ico-enveloppe-blanc.svg" alt="icone d'une enveloppe postale">
                            <p>Me contacter</p>
                        </a>

                        <a href="#" class="welcome-btn">
                            <img src="/assets/svg/ico-pouce-blanc.svg" alt="icone d'une pouce vers le haut">
                            <p>Où me suivre</p>
                        </a>

                        <a href="#" class="welcome-btn" id="easter-clue">
                            <img src="/assets/svg/ico-easter-blanc.svg" alt="icone d'un oeuf de pâques">
                            <p>Easter egg</p>
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
                        <a href="#" target="_blank">Maquette Figma</a>
                    </div>

                    <div class="process-btn-bloc">
                        <p>Détail du processus créatif :</p>
                        <a href="#" target="_blank">Page du projet</a>
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

        <footer>
            <div class="footer-container">

                <div id="footer-col-1">

                    <div id="foot-logo-box">
                        <!-- Easter Egg trouvé ! Bravo 🐇🥚 -->
                        <img src="/assets/svg/ico-pouce-blanc.svg" alt="logo DH">
                    </div>

                    <div id="foot-hr"></div>

                    <div id="foot-left-content">

                        <div class="left-title">
                            <p>Contact</p>
                        </div>

                        <div class="contact-mail">
                            <p>d.hollard.design@gmail.com</p>
                            <img src="/assets/svg/ico-pouce-blanc.svg" alt="copier vers presse-papier">
                        </div>

                        <div class="social-icons">
                            <a href="#">LinkedIn</a>
                            <a href="#">Instagram</a>
                        </div>

                    </div>

                </div>

                <div id="footer-col-2">
                    <a href="#">> Mentions légales</a>
                    <p>Copyright © 2022</p>
                    <p>Tous droits réservés à <span>Darius Hollard</span></p>
                </div>

            </div>

        </footer>

        <!-- A DEPLACER DANS MODULE END PAGE COMMUN -->

        <!-- Font preloader -->
        <div class="font-preloader" style="opacity:0">
            <span style="font-family:Alegreya; font-weight: 900;">texte</span>
            <span style="font-family:Alegreya; font-style:italic; font-size: 72px; font-weight: 700; color: #FF6666;">Designer</span>
        </div>

        <!-- Script interactions navbar -->
        <script defer src="/assets/script/navbar-interactions.js"></script>

    </body>
</html>