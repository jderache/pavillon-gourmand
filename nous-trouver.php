<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Le Pavillon Gourmand, restaurant gastronomique à Paris. Venez déguster nos plats cuisinés avec des produits frais et de saison." />
    <meta name="keywords" content="restaurant, gastronomique, paris, cuisine, produits, frais, saison" />
    <meta name="author" content="Le Pavillon Gourmand" />
    <link rel="preload" href="./public/css/style.css" as="style" />
    <link rel="preload" href="./public/fonts/LaBelleAurore.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="./public/fonts/ChangaOne.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./public/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./public/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./public/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./public/images/favicon/site.webmanifest" />
    <title>Nous trouver - Le Pavillon Gourmand</title>
</head>

<body>
    <div class="hero">
        <div class="hero-content">
            <header>
                <a class="hero-heading" href="./index.php">
                    <img class="logo" src="./public/images/logo.webp" alt="Le Pavillon Gourmand" width="84" height="61" />
                    <h1>Le pavillon gourmand</h1>
                </a>
                <nav>
                    <ul class="menu">
                        <li class="menu-item"><a href="./lieu.php">Un lieu</a></li>
                        <li class="menu-item"><a href="./moment.php">Un moment</a></li>
                        <li class="menu-item active"><a href="./nous-trouver.php">Nous trouver</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="hero-img">
            <div class="gradient"></div>
            <img src="./public/images/0/header3.webp" srcset="./public/images/576/header3_w576.webp 576w, ./public/images/768/header3_w768.webp 768w, 
                    ./public/images/992/header3_w992.webp 992w, ./public/images/1200/header3_w1200.webp 1200w,
                    ./public/images/1400/header3_w1400.webp 1400w" />
        </div>
    </div>
    <main>
        <section>
            <div class="content bg-gray">
                <h2>Accès</h2>
                <p>13 rue Jean Mermoz <br /> 74940 Annecy-le-Vieux, FRANCE</p>
            </div>
            <img src="./public/images/0/maps.webp" srcset="./public/images/576/maps_w576.webp 576w, ./public/images/768/maps_w768.webp 768w, 
				./public/images/992/maps_w992.webp 992w, ./public/images/1200/maps_w1200.webp 1200w,
				./public/images/1400/maps_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
        <section class="center">
            <div class="content bg-black">
                <h2>Nous contacter</h2>
                <a href="mailto:contact@pavillion-gourmand.fr">Mail : contact@pavillion-gourmand.fr</a>
                <a href="tel:+33450230790">Tél. : +33 (0)4 50 23 07 90</a>
                <h2>Services</h2>
                <p>Mardi soir</p>
                <p>Mercredi midi & soir</p>
                <p>Jeudi midi & soir</p>
                <p>Vendredi midi & soir</p>
                <p>Samedi midi & soir</p>
                <p>Dimanche midi</p>
            </div>
        </section>
    </main>
</body>

</html>

<?php

include 'parts/footer.php';
