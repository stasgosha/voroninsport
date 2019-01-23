<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Voronin Sport</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block">
							<a href="index.php" class="logo">
								<img src="img/logo.png" alt="">
							</a>
							<a href="tel:+74993913910" class="header-phone d-none d-sm-block">+7 (499) 391-391-0</a>
						</div>
						<div class="header-block">
							<ul class="socials-list d-none d-md-flex">
								<li>
									<a href="https://www.facebook.com/voroninteam/" target="_blank">
										<i class="icon-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/voroninsport/" target="_blank">
										<i class="icon-instagram"></i>
									</a>
								</li>
								<li>
									<a href="https://goo.gl/maps/vsM1PRRHdpL2" target="_blank">
										<i class="icon-location"></i>
									</a>
								</li>
							</ul>
							<div class="menu-opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
			</header>