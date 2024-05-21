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
	<title>Le Pavillon Gourmand</title>
</head>

<body>
	<div class="hero">
		<div class="hero-content">
			<header>
				<h1>Le pavillon gourmand</h1>
				<nav>
					<ul class="menu">
						<li class="menu-item"><a href="./index.html">Un lieu</a></li>
						<li class="menu-item"><a href="./menu.html">Un moment</a></li>
						<li class="menu-item"><a href="./contact.html">Nous trouver</a></li>
					</ul>
				</nav>
			</header>
			<p>Restaurant gastronomique végétal & lacustre <br /> 3* MICHELIN ANNECY</p>
		</div>
		<img />
	</div>
	<main>
		<section>
			<div class="content" style="background-color: var(--blue);">
				<h2>Un lieu</h2>
				<p>Univers singulier, identitaire et façonné par l’homme. Essences de bois brulé, pierre de Savoie et cristal taillé, la salle, apaisante et épurée, accueille l’authentique transparence réconfort</p>
			</div>
			<img src="./public/images/logo.webp" alt="dwadaw">
		</section>
		<section class="reverse">
			<div class="content" style="background-color: var(--brown);">
				<h2>Un moment</h2>
				<p>Par le prisme culinaire, entre pudeur et force vitale, le monde du vivant s’exprime jusqu’à la quintessence. Sublimé, il livre son émotion ultime</p>
			</div>
			<img src="./public/images/logo.webp" alt="dwadaw">
		</section>
		<section>
			<div class="content" style="background-color: var(--green);">
				<h2>Nous trouver</h2>
				<p>Un lieu unique dans un écrin de nature.</p>
			</div>
			<img src="./public/images/logo.webp" alt="dwadaw">
		</section>
	</main>
</body>

</html>

<?php

include 'parts/footer.php';
