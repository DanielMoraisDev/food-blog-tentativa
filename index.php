<?php
require_once './config.php';
require_once './Controller/empresa_controller.php';
require_once './Controller/publicacao_controller.php';
require_once './Controller/usuario_controller.php';
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

<script>
	const loginShow = () => {
		event?.preventDefault();
		const modalLogin = document.querySelector('.modal_login');
		const modalOverlay = document.querySelector('.modal_overlay');

		modalLogin.classList.toggle('active');
		modalOverlay.classList.toggle('active');
	}
</script>

<?php if (isset($_SESSION['login_error'])) {
	$loginErromsg = $_SESSION['login_error'];
?>
	<script>
		window.addEventListener('DOMContentLoaded', () => {
			loginShow();
		});
	</script>
<?php unset($_SESSION['login_error']);
} ?>

<body>
	<div class="modal_overlay"></div>
	<?php if (!isset($_SESSION['nickname'])) ?>

	<div class="modal_login">
		<h1>Login</h1>
		<form action="login.php" method="post">
			<input type="text" placeholder="Digite seu nome" name="nickname">
			<input type="password" placeholder="Digite sua senha" name="senha">
			<div>
				<button onclick="loginShow()">Cancelar</button>
				<button type="submit">Entrar</button>
			</div>
			<?php if (isset($loginErromsg)) { ?>
				<p>Erro: Usuário ou senha incorretos</p>
			<?php } ?>
		</form>
	</div>
	<?php ?>
	<main>
		<section class="statistics">
			<?php if (!isset($_SESSION['nickname'])) { ?>
				<img class="photo-user" src="./Assets/logo/<?= $empresa[0]['logo'] ?>" alt="">
			<?php } else { ?>
				<img class="photo-user" src="./Assets/foto_usuario/<?= $usuario[0]['foto'] ?>" alt="">
			<?php } ?>

			<?php if (!isset($_SESSION['nickname'])) { ?>
				<p class="name-user"><?= $empresa[0]['nome'] ?></p>
			<?php } else { ?>
				<p class="name-user"><?= $usuario[0]['nome'] ?></p>
			<?php } ?>

		</section>
		<section class="publications">
			<h1>Publicações</h1>
			<div class="posts">
				<?php if (isset($_GET['post'])) { ?>
					<h3>Em breve. Sistema de visualizar publicacao.</h3>
				<?php } else { ?>
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
				<?php } ?>
			</div>
		</section>
		<section class="user-auth">
			<?php if (!isset($_SESSION['nickname'])) { ?>
				<button onclick="loginShow()" class="btn-auth">Login</button>
			<?php } else { ?>
				<button onclick="window.location.href='logout.php'" class="btn-auth">Sair</button>
			<?php } ?>
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