<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2023-ui-voyageur-wotbus.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2023-ui-voyageur-wotbus/" />
    <title>Interface utilisateur - WotBus</title>
    <meta name="description" content="Projet réalisé en 2023 - Création d'une interface complexe pour la solution WotBus" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Interface voyageur WotBus</h1>
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
                                    <p>La réalisation d'une interface web pour le service WotBus a été pour moi un projet de longue durée en 2023. J'ai été chargé de créer cette plateforme et d'en assurer l'accès depuis le site internet du service.</p>

                                    <p>Le principe de WotBus est de fournir une solution MaaS qui regroupe des infos, des petites annonces ainsi qu'un accompagnement à bord des bus en temps réel. Le point fort du concept est de garantir la proximité entre ce contenu et les lignes de bus, le rendant ainsi facilement accessible en transport.</p>
                                        
                                    <p>En se connectant depuis l'intérieur d'un bus, on peut alors se synchroniser avec le véhicule et obtenir des fonctionnalités supplémentaires (recevoir une notification avant son arrêt, suivre le trajet en temps réel...).</p>

                                    <p>L'interface a été pensée principalement pour un usage mobile, la version desktop reprend donc un layout centré pour simplifier le développement (à l'instar d'Instagram).</p>

                                    <p>Pour mener ma mission à bien, j'ai d'abord réalisé un travail conséquent de prototypage, afin d'optimiser l'expérience utilisateur au maximum avant de passer au développement.</p>
                                        
                                    <p>J'ai ensuite codé le front-end de l'interface en utilisant des langages web. J'ai pu compter sur l'aide d'autres développeurs, en particulier pour le back-end. J'ai également coordonné les tâches de chacun et le planning du projet.</p>
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
                                    <p>7 mois (2023)</p>
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
                                        <source src="video/video-mobile-ligne-interactive.webm" type="video/webm">
                                        <source src="video/video-mobile-ligne-interactive.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video class="bloc-video desktop-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/video-ligne-interactive.webm" type="video/webm">
                                        <source src="video/video-ligne-interactive.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo vidéo la ligne interactive de bus de l'interface voyageur. Pour y accéder, rendez-vous sur <a href="https://www.wotbus.com/" target="_blank">www.wotbus.com</a> et utilisez la section dédiée de l'accueil.</figcaption>

                        </figure>

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
                                        <source src="video/video-mobile-fil-annonce.webm" type="video/webm">
                                        <source src="video/video-mobile-fil-annonce.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>

                                    <!-- Vidéo format ordinateur -->
                                    <video class="bloc-video desktop-video" width="100%" height="auto" autoplay playsinline loop muted>
                                        <source src="video/video-fil-annonce.webm" type="video/webm">
                                        <source src="video/video-fil-annonce.mp4" type="video/mp4">
                                        Votre navigateur ne peut pas lire cette vidéo.
                                    </video>
                                </div>
                            </div>

                            <figcaption class="legende-visuel">Démo vidéo du fil d'annonces de l'interface voyageur. Pour y accéder, rendez-vous sur <a href="https://www.wotbus.com/" target="_blank">www.wotbus.com</a> et utilisez la section dédiée de l'accueil.</figcaption>

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