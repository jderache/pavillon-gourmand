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
    <title>Un moment - Le Pavillon Gourmand</title>
</head>

<body>
    <div class="hero">
        <div class="hero-content">
            <header>
                <h1>Le pavillon gourmand</h1>
                <nav>
                    <ul class="menu">
                        <li class="menu-item"><a href="./lieu.php">Un lieu</a></li>
                        <li class="menu-item active"><a href="./moment.php">Un moment</a></li>
                        <li class="menu-item"><a href="./nous-trouver.php">Nous trouver</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <img src="./public/images/0/header2.webp" srcset="./public/images/576/header2_w576.webp 576w, ./public/images/768/header2_w768.webp 768w, 
				./public/images/992/header2_w992.webp 992w, ./public/images/1200/header2_w1200.webp 1200w,
				./public/images/1400/header2_w1400.webp 1400w" />
    </div>
    <main>
        <section>
            <div class="content bg-blue">
                <h2>Un lieu</h2>
                <p>Univers singulier, identitaire et façonné par l’homme. Essences de bois brulé, pierre de Savoie et
                    cristal taillé, la salle, apaisante et épurée, accueille l’authentique transparence réconfort</p>
            </div>
            <img src="./public/images/0/content1.webp" srcset="./public/images/576/content1_w576.webp 576w, ./public/images/768/content1_w768.webp 768w, 
				./public/images/992/content1_w992.webp 992w, ./public/images/1200/content1_w1200.webp 1200w,
				./public/images/1400/content1_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
        <section class="reverse">
            <div class="content bg-blue">
                <h2>Le jardin</h2>
                <p>Inspiration quotidienne, dans son jus, le végétal
                    s’exprime au gré du temps, dans ses moindres
                    mouvements, discret ou profus, libre d’être soi.</p>
            </div>
            <img src="./public/images/0/content10.webp" srcset="./public/images/576/content10_w576.webp 576w, ./public/images/768/content10_w768.webp 768w, 
				./public/images/992/content10_w992.webp 992w, ./public/images/1200/content10_w1200.webp 1200w,
				./public/images/1400/content10_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
        <section>
            <div class="content bg-blue">
                <h2>Esprits engagés</h2>
                <p>Épouser une identité unique, pousser jusqu’à l’ultime sa passion sensible et émotionnelle, curieuse
                    et libre d’être.</p>
            </div>
            <img src="./public/images/0/maps.webp" srcset="./public/images/576/maps_w576.webp 576w, ./public/images/768/maps_w768.webp 768w, 
				./public/images/992/maps_w992.webp 992w, ./public/images/1200/maps_w1200.webp 1200w,
				./public/images/1400/maps_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
    </main>
</body>

</html>

<?php

include 'parts/footer.php';