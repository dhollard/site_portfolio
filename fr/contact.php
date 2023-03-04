<!doctype html>
<html lang="fr">

<head>
    <!-- Balises communes -->
    <?php include_once('../assets/module/head-module.php'); ?>

    <!-- Appels ressources page -->
    <link rel="stylesheet" href="/assets/css/style-contact.css">

    <!-- SEO et identité page -->
    <link rel="canonical" href="https://darius-hollard.com/fr/contact" />
    <title>Me contacter</title>
    <meta name="description" content="Les informations nécessaires pour me contacter ou me retrouver sur différents réseaux sociaux sont à votre disposition sur cette page." />

</head>

<body>

    <!-- navbar -->
    <?php include_once('../assets/module/navbar.php'); ?>

    <main>

        <!-- Section 01 -->
        <section id="sec-contact-01">

            <div class="form-zone">

                <div class="form-col">

                    <div class="form-box">
                        <h1 id="page-title">Me contacter</h1>

                        <form action="contact-mail.php" method="POST">
                            <div class="form-bloc">
                                <label for="sender_nom">Votre nom</label>
                                <input type="text" required name="sender_nom" placeholder="Pour mieux vous connaître">
                            </div>
                            
                            <div class="form-bloc">
                                <label for="sender_mail">Votre e-mail</label>
                                <input type="email" required name="sender_mail" placeholder="Pour pouvoir vous répondre">
                            </div>
                            
                            <div class="form-bloc">
                                <label for="sender_message">Votre message</label>
                                <textarea required name="sender_message" maxlength="5000" placeholder="De quoi souhaitez-vous parler ?"></textarea>
                            </div>
                        </form>

                        <div class="validation-bloc">
                            <button class="send-btn">Envoyer</button>
                        </div>
                        
                    </div>

                    <div id="alt-form">
                        <h3>Vous préférez me contacter directement par mail ?</h3>
                        <p>Envoyez votre message à <span class="mail-focus">contact@darius-hollard.com</span></p>
                    </div>
                </div>

                <div class="social-col">

                    <div class="sticky-group">

                        <a class="social-square" href="https://www.linkedin.com/in/darius-hollard/" target="_blank">
                            <div class="social-back" id="linkedin-background"></div>
                            <img src="/assets/svg/ico-linkedin-blanc.svg" alt="logo de LinkedIn">
                            <h2 class="social-title">LinkedIn</h2>
                        </a>

                        <a class="social-square" href="https://www.instagram.com/darius_hollard/" target="_blank">
                            <div class="social-back" id="insta-background"></div>
                            <img src="/assets/svg/ico-instagram-blanc.svg" alt="logo de Instagram">
                            <h2 class="social-title">Instagram</h2>
                        </a>

                        <a class="social-square" href="https://github.com/dhollard" target="_blank">
                            <div class="social-back" id="github-background"></div>
                            <img src="/assets/svg/ico-github-blanc.svg" alt="logo de GitHub">
                            <h2 class="social-title">GitHub</h2>
                        </a>

                    </div>

                </div>

            </div>

            

        </section>


    </main>

    <!-- Footer -->
    <?php include_once('../assets/module/footer.php'); ?>

    <!-- Appels et scripts de fin de page -->
    <?php include_once('../assets/module/end-page-module.php'); ?>

</body>

</html>