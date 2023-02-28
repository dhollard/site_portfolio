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

                    <div>
                        <h1 id="page-title">Me contacter</h1>

                        <form action="contact-mail.php" method="POST">
                            <div class="form-bloc">
                                <label for="sender_nom">Votre nom</label>
                                <input type="text" name="sender_nom" placeholder="">
                            </div>
                            
                            <div class="form-bloc">
                                <label for="sender_mail">Votre e-mail</label>
                                <input type="email" name="sender_mail" placeholder="Un e-mail pour vous répondre">
                            </div>
                            
                            <div class="form-bloc">
                                <label for="sender_message">De quoi souhaitez-vous parler ?</label>
                                <textarea name="sender_message" placeholder="Votre message"></textarea>
                            </div>
                        </form>

                        <button>Envoyer</button>
                    </div>

                    <div id="alt-form">
                        <p>Vous préférez me contacter directement par mail ?</p>
                        <p>Envoyez votre message à contact@darius-hollard.com</p>
                    </div>
                </div>

                <div class="social-col">

                    <a class="social-square" href="https://www.linkedin.com/in/darius-hollard/" target="_blank">
                        <img src="/assets/svg/ico-linkedin-blanc.svg" alt="logo de LinkedIn">
                        <h2 class="social-title">LinkedIn</h2>
                    </a>

                    <a class="social-square" href="https://www.instagram.com/darius_hollard/" target="_blank">
                        <img src="/assets/svg/ico-instagram-blanc.svg" alt="logo de Instagram">
                        <h2 class="social-title">Instagram</h2>
                    </a>

                    <a class="social-square" href="https://github.com/dhollard" target="_blank">
                        <img src="/assets/svg/ico-github-blanc.svg" alt="logo de GitHub">
                        <h2 class="social-title">GitHub</h2>
                    </a>

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