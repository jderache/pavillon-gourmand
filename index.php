<!DOCTYPE html>
<html lang="fr">

<?php
// Random number entre 1 et 3 
$random = rand(1, 3);
?>

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
	<title>Le Pavillon Gourmand</title>
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
						<li class="menu-item"><a href="./nous-trouver.php">Nous trouver</a></li>
					</ul>
				</nav>
			</header>
			<p>Restaurant gastronomique végétal & lacustre <br /> 3* MICHELIN ANNECY</p>
		</div>
		<div class="hero-img">
			<div class="gradient"></div>
			<img src="./public/images/0/header<?= $random ?>.webp" srcset="./public/images/576/header<?= $random ?>_w576.webp 576w, ./public/images/768/header<?= $random ?>_w768.webp 768w, 
				./public/images/992/header<?= $random ?>_w992.webp 992w, ./public/images/1200/header<?= $random ?>_w1200.webp 1200w,
				./public/images/1400/header<?= $random ?>_w1400.webp 1400w" />
		</div>
	</div>
	<main>
		<section>
			<div class="content bg-blue">
				<h2>Un lieu</h2>
				<p>Univers singulier, identitaire et façonné par l’homme. Essences de bois brulé, pierre de Savoie et cristal taillé, la salle, apaisante et épurée, accueille l’authentique transparence réconfort</p>
			</div>
			<img src="./public/images/0/content1.webp" srcset="./public/images/576/content1_w576.webp 576w, ./public/images/768/content1_w768.webp 768w, 
				./public/images/992/content1_w992.webp 992w, ./public/images/1200/content1_w1200.webp 1200w,
				./public/images/1400/content1_w1400.webp 1400w" loading="lazy" alt="" />
		</section>
		<section class="reverse">
			<div class="content bg-brown">
				<h2>Un moment</h2>
				<p>Par le prisme culinaire, entre pudeur et force vitale, le monde du vivant s’exprime jusqu’à la quintessence. Sublimé, il livre son émotion ultime</p>
			</div>
			<img src="./public/images/0/content2.webp" srcset="./public/images/576/content2_w576.webp 576w, ./public/images/768/content2_w768.webp 768w, 
				./public/images/992/content2_w992.webp 992w, ./public/images/1200/content2_w1200.webp 1200w,
				./public/images/1400/content2_w1400.webp 1400w" loading="lazy" alt="" />
		</section>
		<section>
			<div class="content bg-green">
				<h2>Nous trouver</h2>
				<p>Un lieu unique dans un écrin de nature.</p>
			</div>
			<a href="https://www.google.fr/maps/place/13+Rue+Jean+Mermoz,+74940+Annecy-le-Vieux/@45.9161113,6.1442034,17z/data=!3m1!4b1!4m6!3m5!1s0x478b8fbdedcb3ecf:0x368a8f59ad0ef7b1!8m2!3d45.9161113!4d6.1467783!16s%2Fg%2F11c5pl8nd8?entry=ttu" target="_blank" title="Ouverture Google Maps (nouvelle fenêtre)">
				<img src="./public/images/0/maps.webp" srcset="./public/images/576/maps_w576.webp 576w, ./public/images/768/maps_w768.webp 768w, 
					./public/images/992/maps_w992.webp 992w, ./public/images/1200/maps_w1200.webp 1200w,
					./public/images/1400/maps_w1400.webp 1400w" loading="lazy" alt="" />
			</a>
		</section>
	</main>
</body>

</html>

<?php

include 'parts/footer.php';
