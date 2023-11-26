<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../../../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-2023-communication-wotbus.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/projet/2023-communication-wotbus/" />
    <title>Communication visuelle - WotBus</title>
    <meta name="description" content="Projet réalisé en 2023 - Création de supports de communication pour WotBus" />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../../../assets/module/navbar.php'); ?>

    <main>

        <!-- ********** Section en-tête page projet ********** -->
        <section id="Header_projet">
            <h1 id="Titre_page">Communication visuelle WotBus</h1>
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
                                    <p>Welwot avait besoin de supports de communication afin d'accompagner le lancement du service WotBus et son déploiement sur des réseaux de transport.</p>

                                    <p>J'ai donc conçu un ensemble de supports print afin de s'adresser aux différentes cibles de WotBus : les réseaux de transport en commun, les commerçants et les usagers des bus.</p>

                                    <p>Cette panoplie de supports devait aussi être capable de couvrir différents contextes. Par exemple un salon professionnel, des campagnes de distribution de flyers, de l'affichage publicitaire ou de la signalétique dans les bus.</p>

                                    <p>Vous trouverez sur cette page une partie de cette panoplie de supports (utilisez les flèches pour faire défiler les visuels d'un même groupe).</p>
                                </div>
                            </div>


                            <div class="infos-projet">
                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_01" class="titre-infos-projet">Type de projet</p>
                                    <p>Graphisme</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_02" class="titre-infos-projet">Rôle effectué</p>
                                    <p>Graphic designer</p>
                                </span>

                                <span class="bloc-infos-projet">
                                    <p id="Info_resume_03" class="titre-infos-projet">Durée du projet</p>
                                    <p>Avril 2023</p>
                                    <p class="info-projet-secondaire">puis retouches au fil du temps</p>
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

        </section>

        <section id="Visuels-projet" class="section-projet">

            <!-- Bloc parent carrousel  -->
            <div class="section-bloc">

                <!-- Titre carrousel -->
                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <p class="phrase-forte">Communication "tout public" WotBus</p>
                    </div>
                </div>

                <div class="section-ligne">

                    <div class="section-colonne full-col carrousel" data-current-index="0">

                        <div class="carrousel-inner">

                            <figure class="bloc-visuel">
                                <picture>
                                    <source srcset="img/depliant-wotbus-recto.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/depliant-wotbus-recto.png" type="image/png" width="100%" height="auto">
                                    <img src="img/depliant-wotbus-recto.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Dépliant 3 volets (2 plis roulés) - recto</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                    
                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>

                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/depliant-wotbus-verso.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/depliant-wotbus-verso.png" type="image/png" width="100%" height="auto">
                                    <img src="img/depliant-wotbus-verso.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Dépliant 3 volets (2 plis roulés) - verso</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                                
                            </figure>

                        </div>
                           

                    </div>

                </div>

            </div>

            <!-- Bloc parent carrousel  -->
            <div class="section-bloc">

                <!-- Titre carrousel -->
                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <p class="phrase-forte">Communication ciblant les commerçants</p>
                    </div>
                </div>

                <div class="section-ligne">

                    <div class="section-colonne full-col carrousel" data-current-index="0">

                        <div class="carrousel-inner">

                            <figure class="bloc-visuel">
                                <picture>
                                    <source srcset="img/affiche-wotbus-commerce.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/affiche-wotbus-commerce.png" type="image/png" width="100%" height="auto">
                                    <img src="img/affiche-wotbus-commerce.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affiche (format A3)</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/flyer-commerce-wotbus-recto.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/flyer-commerce-wotbus-recto.png" type="image/png" width="100%" height="auto">
                                    <img src="img/flyer-commerce-wotbus-recto.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Flyer (format A5) - recto</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/flyer-commerce-wotbus-verso.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/flyer-commerce-wotbus-verso.png" type="image/png" width="100%" height="auto">
                                    <img src="img/flyer-commerce-wotbus-verso.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Flyer (format A5) - verso</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Bloc parent carrousel  -->
            <div class="section-bloc">

                <!-- Titre carrousel -->
                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <p class="phrase-forte">Communication dans les bus et les abribus</p>
                    </div>
                </div>

                <div class="section-ligne">

                    <div class="section-colonne full-col carrousel" data-current-index="0">

                        <div class="carrousel-inner">

                            <figure class="bloc-visuel">
                                <picture>
                                    <source srcset="img/affiche-bus-voyageur.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/affiche-bus-voyageur.png" type="image/png" width="100%" height="auto">
                                    <img src="img/affiche-bus-voyageur.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affiche (format A3) - variante 01</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/affiche-online-voyageur.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/affiche-online-voyageur.png" type="image/png" width="100%" height="auto">
                                    <img src="img/affiche-online-voyageur.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affiche (format A3) - variante 02</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/affiche-abribus-wotbus.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/affiche-abribus-wotbus.png" type="image/png" width="100%" height="auto">
                                    <img src="img/affiche-abribus-wotbus.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affichage pour les abribus (format A4)</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Bloc parent carrousel  -->
            <div class="section-bloc">

                <!-- Titre carrousel -->
                <div class="section-ligne">
                    <div class="section-colonne full-col">
                        <p class="phrase-forte">Autres supports de communication</p>
                    </div>
                </div>

                <div class="section-ligne">

                    <div class="section-colonne full-col carrousel" data-current-index="0">

                        <div class="carrousel-inner">

                            <figure class="bloc-visuel">
                                <picture>
                                    <source srcset="img/carte-reseau-wotbus.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/carte-reseau-wotbus.png" type="image/png" width="100%" height="auto">
                                    <img src="img/carte-reseau-wotbus.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affichage pour présentoir plexiglas (format A4) - carte du réseau WotBus</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <!-- PNG plus compact que WEBP dans ce cas -->
                                    <source srcset="img/sticker-bus-wotbus.png" type="image/png" width="100%" height="auto">
                                    <img src="img/sticker-bus-wotbus.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Adhésif signalétique destiné aux vitres des bus</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                            <figure class="bloc-visuel hide-carrousel">
                                <picture>
                                    <source srcset="img/affiche-feedback-qrcode.webp" type="image/webp" width="100%" height="auto">
                                    <source srcset="img/affiche-feedback-qrcode.png" type="image/png" width="100%" height="auto">
                                    <img src="img/affiche-feedback-qrcode.png" width="100%" height="auto" alt="">
                                </picture>

                                <figcaption class="legende-visuel">Affichage pour présentoir plexiglas (format A4) - récolte d'avis lors d'événements</figcaption>

                                <div class="carrousel-controls">
                                    <button class="prev-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>

                                    <button class="next-btn-carrousel">
                                        <span class="ico-btn-carrousel"></span>
                                    </button>
                                </div>
                            </figure>

                        </div>

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