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
	<title><?= $page_title ?> - Moehlenhoff</title>
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
						<div class="header-top">
							<div class="header-block">
								<a href="index.php" class="logo">
									<img src="img/logo.png" alt="">
								</a>
							</div>
							<div class="header-block">
								<ul class="header-buttons">
									<li>
										<a href="#" class="btn btn-light btn-small">
											<i class="icon-calculate"></i>
											<span>Программа рассчета</span>
										</a>
									</li>
									<li>
										<a href="#" class="btn btn-light btn-small">
											<i class="icon-user"></i>
											<span>Личный кабинет</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="header-bottom">
							<ul class="top-nav">
								<li><a href="#">Продукция</a></li>
								<li><a href="#">О компании</a></li>
								<li><a href="#">Наши объекты</a></li>
								<li><a href="#">Документы</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Мероприятия</a></li>
								<li><a href="#">Дистрибьюторы</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>