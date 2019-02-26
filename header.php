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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper">
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
							<div class="header-block d-none d-lg-block">
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
							<ul class="top-nav d-none d-lg-flex">
								<li><a href="production.php">Продукция</a></li>
								<li><a href="about.php">О компании</a></li>
								<li><a href="projects.php">Наши объекты</a></li>
								<li><a href="documents.php">Документы</a></li>
								<li><a href="news.php">Новости</a></li>
								<li><a href="events.php">Мероприятия</a></li>
								<li><a href="distributors.php">Дистрибьюторы</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
							<ul class="top-nav d-lg-none">
								<li>
									<a href="#" class="menu-opener">
										<div class="bars">
											<div class="bar"></div>
											<div class="bar"></div>
											<div class="bar"></div>
										</div>
										<span>Меню</span>
									</a>
								</li>
								<li class="no-flex"><a href="#"><i class="icon-calculate-white"></i></a></li>
								<li class="no-flex"><a href="#"><i class="icon-user-white"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>