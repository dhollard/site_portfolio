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

            <div style="height:2000px;"></div>

            <div id="sec-home-02"></div>

            <div id="sec-home-03"></div>

        </main>

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