<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2022-site-wotbus.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2022-site-wotbus/" />
    <title>Site internet - WotBus</title>
    <meta name="description" content="Projet réalisé en 2022 - Création du site internet de la solution WotBus" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Site internet WotBus</h1>
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
                                    <p>L'entreprise Welwot a déployé son nouveau service intitulé "WotBus" pendant l'année 2022. J'ai été chargé de superviser la création d'un site pour accompagner ce lancement.</p>

                                    <p>Le concept de WotBus est de fournir aux utilisateurs de bus une plateforme qui regroupe des infos, des petites annonces ainsi qu'un accompagnement à bord en temps réel. Le point fort du site est de géolocaliser son contenu à proximité des lignes de bus, le rendant facilement accessible en transport.</p>

                                    <p>J'ai dû imaginer un site simple mais visuellement plaisant, dans un délai court et en répondant à plusieurs objectifs bien distincts.</p>

                                    <p>Premièrement, faire office de vitrine explicative pour le produit. Ensuite, donner un point d'accès au service pour les voyageurs et les créateurs des petites annonces (commerçants).</p>

                                    <p>Je me suis inspiré de la logique des sites de produits ciblant à la fois des consommateurs et des commerces, comme ceux de livraison de nourriture par exemple.</p>

                                    <p>J'ai designé la maquette et les visuels du site, développé la majeure partie du front-end et coordonné le projet, afin que les autres collaborateurs présents avancent efficacement en respectant les délais prévus.</p>
                                </div>
                            </div>


                            <div class="infos-projet">
                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_01" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-01.php'); ?></p>
                                    <p>Gestion de projet</p>
                                    <p>UI/UX design</p>
                                    <p>Développement</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_02" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-02.php'); ?></p>
                                    <p>Chef de projet, Product Designer et développeur</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_03" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-03.php'); ?></p>
                                    <p>3 mois (2022)</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_04" class="titre-infos-projet"><?php include('../../../assets/module/modules-projets/infotitre-resume-proj-04.php'); ?></p>
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
                                    <video class="bloc-video mobile-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-mobile.webm" type="video/webm">
                                        <source src="video/showreel-mobile.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video class="bloc-video desktop-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/showreel-desktop.webm" type="video/webm">
                                        <source src="video/showreel-desktop.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo vidéo du site www.wotbus.com, <a href="https://www.wotbus.com/" target="_blank">cliquez-ici pour découvrir le site.</a></figcaption>

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