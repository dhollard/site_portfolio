<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2021-site-welwot.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2021-site-welwot/" />
    <title>Site internet - Welwot</title>
    <meta name="description" content="Projet réalisé en 2021 - Création du site internet de l'entreprise Welwot" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Site internet Welwot</h1>
            <div id="Scroll_btn_header" onclick="headerScrollButton()">
                <span class="scroll-btn-header-icon"></span>
            </div>
        </section>

        <!-- ********** Section "résumé du projet" ********** -->
        <section id="Resume_projet" class="section-projet">

            <div class="section-bloc">
                <div class="section-ligne">

                    <div class="section-colonne full-col">

                        <div class="module-resume">

                            <div class="txt-resume-projet">
                                <h2 class="titre-section">01 - Résumé du projet</h2>

                                <div class="bloc-texte">
                                    <p>Peu après la création de la start-up Welwot début 2021, j'ai été chargé de créer l'ensemble de son identité visuelle.</p>

                                    <p>Cette démarche nécessitait la création d'un site internet pour mettre en avant des solutions SaaS et permettre l'accès à un espace client.</p>

                                    <p>Ce projet m'a donné l'opportunité d'exprimer ma créativité en réalisant un travail important d'illustration et d'animation. J'ai veillé à souligner l'aspect moderne et innovant des solutions de Welwot au travers du site.</p>

                                    <p>Pour intégrer ces nombreux visuels au site, j'ai opté pour une technologie d'animation SVG orientée web (Lottie). Son approche 100 % SVG permet en effet d'afficher des animations complexes en ayant un impact quasi-nul sur le temps de chargement.</p>

                                    <p>J'ai travaillé en collaboration avec d'autres développeurs pour certains éléments back-end du site et pour expérimenter avec Lottie. La gestion du projet, le design, les animations et le code front ont été à ma charge et validés au fur et à mesure avec ma hiérarchie.</p>
                                </div>
                            </div>


                            <div class="infos-projet">
                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_01" class="titre-infos-projet">Type de projet</p>
                                    <p>Gestion de projet</p>
                                    <p>UI/UX design</p>
                                    <p>Développement</p>
                                    <p>Motion design</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_02" class="titre-infos-projet">Rôle effectué</p>
                                    <p>Chef de projet, product Designer et développeur</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_03" class="titre-infos-projet">Durée du projet</p>
                                    <p>4 mois (2021)</p>
                                    <p class="info-projet-secondaire">puis mises à jours ponctuelles en 2022 et 2023</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_04" class="titre-infos-projet">Commanditaire</p>
                                    <p>Welwot</p>
                                    <p class="info-projet-secondaire">(start-up IoT)</p>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="section-bloc">

                <div class="section-ligne">

                    <div class="section-colonne full-col">

                        <figure class="zone-cadre-video">

                            <div class="cadre-scrollable">
                                <!-- Fausse barre de navigateur -->
                                <?php include('../../../assets/module/modules-projets/navibar-cadre-desk.php'); ?>

                                <div class="cadre-content-wrapper">
                                    <!-- Vidéo format mobile -->
                                    <video id="Video_showreel_mob" class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-mobile.webm" type="video/webm">
                                        <source src="video/showreel-mobile.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video id="Video_showreel_desk" class="bloc-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-desktop.webm" type="video/webm">
                                        <source src="video/showreel-desktop.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo vidéo du site www.welwot.com, <a href="https://www.welwot.com/" target="_blank">cliquez-ici pour découvrir le site.</a></figcaption>

                        </figure>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <div id="Overlay_sommaire" class="">

    </div>

    <!-- Pre-footer pages projets -->
    <?php include_once('../../../assets/module/modules-projets/end-bloc-projet.php'); ?>

    <!-- Footer -->
    <?php include_once('../../../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../../../assets/module/end-page-module.php'); ?>

    <!-- Appel scripts spéciaux pages projets -->
    <?php include_once('../../../assets/module/modules-projets/page-projet-module-script.php'); ?>

</body>

</html>