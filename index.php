<?php
require_once './config.php';
require_once './Controller/empresa_controller.php';
require_once './Controller/publicacao_controller.php';
?>

<!doctype html>
<html lang="pt-BR">

<head>
	<title><?= $empresa[0]['nome'] ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<main>
		<section class="statistics">
			<img class="logo-enterprise" src="./Assets/logo/<?= $empresa[0]['logo'] ?>" alt="">
			<p class="name-enterprise"><?= $empresa[0]['nome'] ?></p>

		</section>
		<section class="publications">
			<h1>Publicações</h1>
			<div class="posts">
				<?php foreach ($publicacoes as $publicacao) { ?>
					<article class="post">
						<h2><?= $publicacao['titulo_prato'] ?></h2>
						<img src="./Assets/publicacao/<?= $publicacao['foto'] ?>" alt="">
						<div class="location">
							<p><?= $publicacao['local'] ?></p>
							<p><?= $publicacao['cidade'] ?></p>
						</div>
					</article>
				<?php } ?>
			</div>
		</section>
		<section class="user-auth">
			<button class="btn-auth">Entrar</button>
		</section>
	</main>
	<footer>
		<p class="name-enterprise"><?= $empresa[0]['nome'] ?></p>
		<div class="container-medias-contact-enterprise">
			<a class="link-media-contact" href=""><img src="./Assets/icones/Instagram.svg" alt=""></a>
			<a class="link-media-contact" href=""><img src="./Assets/icones/Twitter.svg" alt=""></a>
			<a class="link-media-contact" href=""><img src="./Assets/icones/Whatsapp.svg" alt=""></a>
			<a class="link-media-contact" href=""><img src="./Assets/icones/Globe.svg" alt=""></a>
		</div>
		<p>Copyright - 2024</p>
	</footer>
</body>

</html>