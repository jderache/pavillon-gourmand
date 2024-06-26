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
                <a class="hero-heading" href="./index.php">
                    <img class="logo" src="./public/images/logo.webp" alt="Le Pavillon Gourmand" width="84" height="61" />
                    <h1>Le pavillon gourmand</h1>
                </a>
                <nav>
                    <ul class="menu">
                        <li class="menu-item"><a href="./lieu.php">Un lieu</a></li>
                        <li class="menu-item active"><a href="./moment.php">Un moment</a></li>
                        <li class="menu-item"><a href="./nous-trouver.php">Nous trouver</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="hero-img">
            <div class="gradient brown"></div>
            <img src="./public/images/0/header2.webp" srcset="./public/images/576/header2_w576.webp 576w, ./public/images/768/header2_w768.webp 768w, 
                    ./public/images/992/header2_w992.webp 992w, ./public/images/1200/header2_w1200.webp 1200w,
                    ./public/images/1400/header2_w1400.webp 1400w" />
        </div>
    </div>
    <main>
        <section>
            <div class="content bg-brown">
                <h2>Âme végétale et lacustre</h2>
                <p>Reflet d’un garde-manger nourricier, la cuisine, brut et authentique dessine ses lignes dans ses courbes sauvages et charnelles sans contour</p>
                <a class="btn" href="./public/pdf/menu.pdf" target="_blank" title="Notre menu (nouvelle fenêtre)">Notre menu</a>
            </div>
            <img src="./public/images/0/content1.webp" srcset="./public/images/576/content2_w576.webp 576w, ./public/images/768/content2_w768.webp 768w, 
				./public/images/992/content2_w992.webp 992w, ./public/images/1200/content2_w1200.webp 1200w,
				./public/images/1400/content2_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
        <section class="reverse">
            <div class="content bg-brown">
                <h2>La cueillette</h2>
                <p>Inspiration quotidienne, dans son jus, le végétal s’exprime au gré du temps, dans ses moindres mouvements, discret ou profus, libre d’être soi.</p>
            </div>
            <img src="./public/images/0/content7.webp" srcset="./public/images/576/content7_w576.webp 576w, ./public/images/768/content7_w768.webp 768w, 
				./public/images/992/content7_w992.webp 992w, ./public/images/1200/content7_w1200.webp 1200w,
				./public/images/1400/content7_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
        <section>
            <div class="content-image">
                <div class="content bg-brown">
                    <h2>Verre du terroir</h2>
                    <p>Explorer un territoire et rendre à la vigne la beauté des racines locales, les cépages d’ici, écho aux flacons d’ailleurs, la pertinence d’une équipe sommelière en totale cohérence</p>
                    <a class="btn" href="./public/pdf/carte-des-vins.pdf" target="_blank" title="La carte des vins (nouvelle fenêtre)">La carte des vins</a>
                </div>
                <img src="./public/images/0/content9.webp" srcset="./public/images/576/content9_w576.webp 576w, ./public/images/768/content9_w768.webp 768w,
                    ./public/images/992/content9_w992.webp 992w, ./public/images/1200/content9_w1200.webp 1200w,
                    ./public/images/1400/content9_w1400.webp 1400w" loading="lazy" alt="" />
            </div>
            <img src="./public/images/0/content8.webp" srcset="./public/images/576/content8_w576.webp 576w, ./public/images/768/content8_w768.webp 768w,
                    ./public/images/992/content8_w992.webp 992w, ./public/images/1200/content8_w1200.webp 1200w,
                    ./public/images/1400/content8_w1400.webp 1400w" loading="lazy" alt="" />
        </section>
    </main>
</body>

</html>

<?php

include 'parts/footer.php';
