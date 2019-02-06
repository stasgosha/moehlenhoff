<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="first-screen-section">
			<div class="main-slider">
				<?php for ($i=0; $i < 7; $i++): ?>
					<div class="slide">
						<div class="slide-bg" style="background-image: url(img/tmp/main-slider-slide.jpg);"></div>
						<div class="container">
							<div class="slide-content">
								<div class="slider-features">
									<div class="item">
										<div class="feature-card">
											<div class="card-icon">
												<i class="icon-plan"></i>
											</div>
											<div class="card-text">
												<p class="tpg-h4">Индивидуальный дизайн</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="feature-card">
											<div class="card-icon">
												<i class="icon-medal"></i>
											</div>
											<div class="card-text">
												<p class="tpg-h4">Немецкое качество изготовления</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="feature-card">
											<div class="card-icon">
												<i class="icon-box"></i>
											</div>
											<div class="card-text">
												<p class="tpg-h4">Полная <br>комплектация</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="feature-card">
											<div class="card-icon">
												<i class="icon-gears"></i>
											</div>
											<div class="card-text">
												<p class="tpg-h4">Любые инженерные решения</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</section>
		<section class="categories-section section-default-paddings">
			<div class="container">
				<div class="cards-list columns-3">
					<div class="item">
						<a href="#" class="category-card">
							<div class="card-name">
								<div class="tpg-h3">Конвекторы</div>
							</div>
							<div class="card-image">
								<img src="img/categories/convectors.png" alt="">
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#" class="category-card">
							<div class="card-name">
								<div class="tpg-h3">Решетки</div>
							</div>
							<div class="card-image">
								<img src="img/categories/grates.png" alt="">
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#" class="category-card">
							<div class="card-name">
								<div class="tpg-h3">Элементы управления</div>
							</div>
							<div class="card-image">
								<img src="img/categories/control-panels.png" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="about-section section-default-bottom-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="pretty-image">
							<img src="img/tmp/about-image.jpg" alt="">
							<div class="lines"></div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="section-caption left-aligned">
							<h2 class="tpg-h2 sc-title">Компания Moehlenhoff</h2>
						</div>
						<div class="tpg-typography">
							<p>ООО «Системные конвекторы» — российская компания учреждённая в 2015 году. Цель — производство конвекторов Moehlenhoff и решётки к ним в России.  Для этого, с 2014 года с немецкими коллегами велись переговоры, результатами которых явились соглашения о переносе производства в Россию.</p>
							<p>С октября 2016 года завод по производству оборудования Moehlenhoff запущен в России.  Мы производим весь ассортимент конвекторов Moehlenhoff и решётку к ним. Предприятие выпускает внутрипольные конвекторы водяные с принудительной и естественной конвекцией, внутрипольные электрические конвекторы. Вся выпускаемая продукция комплектуется автоматикой Moehlenhoff. Технологическая линия оснащена передовым оборудованием для сборки и контроля качества.</p>
							<a href="about.php" class="btn left-shift">Читать подробнее</a>
						</div>
						<div class="gray-plusses-bg rows-3"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="our-projects-section section-default-bottom-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="projects-descriptions-wrapper">
							<div class="section-caption left-aligned no-line no-margin">
								<h2 class="sc-title tpg-h2">Наши проекты</h2>
							</div>
							<div class="projects-descriptions-slider">
								<?php for ($i=0; $i < 7; $i++): ?>
									<div class="slide">
										<p class="tpg-note">Москва</p>
										<p class="tpg-h3 font-500">Автосалон «Ауди Центр»</p>
										<p class="tpg-body-1 short-description">Краткий текст описания объекта, буквально несколько строк</p>
										<div class="project-equipment-info">
											<p class="pei-caption">Оборудование:</p>
											<a href="#">Конвекторы Mohlenhoff QSK-EC</a><br>
											<a href="#">Линейная решетка</a><br>
											<a href="#">Альфа-Базис</a>
										</div>
										<a href="project-page.php" class="btn left-shift">Читать подробнее</a>
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="photos-slider our-projects-photos-slider">
							<?php for ($i=0; $i < 7; $i++): ?>
								<div class="slide">
									<!-- Image Size: 639x419 -->
									<img src="img/tmp/projects-slider-image.jpg" alt="">
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="news-section section-default-bottom-padding">
			<div class="container">
				<div class="section-caption">
					<h3 class="tpg-h2 sc-title">Новости</h3>
				</div>
				<div class="news-slider slider-default-paddings slider-dark-arrows">
					<div class="slide">
						<div class="news-card white-card">
							<a href="#" class="card-image">
								<img src="//placeimg.com/240/240/any" alt="">
							</a>
							<div class="card-content">
								<p class="tpg-note card-date">23 апреля 2019</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Для этого, с 2014 года с немецкими коллегами велись переговоры</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card white-card">
							<a href="#" class="card-image">
								<img src="//placeimg.com/240/240/any" alt="">
							</a>
							<div class="card-content">
								<p class="tpg-note card-date">23 апреля 2019</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Для этого, с 2014 года с немецкими коллегами велись переговоры</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card white-card">
							<a href="#" class="card-image">
								<img src="//placeimg.com/240/240/any" alt="">
							</a>
							<div class="card-content">
								<p class="tpg-note card-date">23 апреля 2019</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Для этого, с 2014 года с немецкими коллегами велись переговоры</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="gray-dots-bg"></div>
				<div class="flex-center">
					<a href="news.php" class="section-more-link">Все новости</a>
				</div>
			</div>
		</section>
		<section class="solutions-section">
			<div class="container">
				<div class="solutions-white-content">
					<h3 class="tpg-h2 card-caption">Мы открыты к <span>любым</span> инженерным решениям!</h3>
					<p>У нас есть возможность производства технологически любых приборов. Вы можете выбрать  индивидуальную геометрию и цветовое решение.</p>
				</div>
				<div class="solutions-purple-content">
					<a href="tel:+74957837000" class="phone-link">+7 (495) 783-70-00</a>
					<p>Остались вопросы? <br>Звоните прямо сейчас!</p>
				</div>
			</div>
		</section>
		<section class="articles-section section-default-paddings">
			<div class="container">
				<div class="section-caption">
					<h3 class="tpg-h2 sc-title">Статьи</h3>
				</div>
				<div class="articles-slider slider-default-paddings slider-dark-arrows">
					<div class="slide">
						<div class="news-card article-card white-card">
							<div class="card-content">
								<p class="tpg-note card-date">Тема статьи</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Современное направление строительства подразумевает большие площади остекления</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card article-card white-card">
							<div class="card-content">
								<p class="tpg-note card-date">Тема статьи</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Современное направление строительства подразумевает большие площади остекления</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card article-card white-card">
							<div class="card-content">
								<p class="tpg-note card-date">Тема статьи</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Современное направление строительства подразумевает большие площади остекления</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card article-card white-card">
							<div class="card-content">
								<p class="tpg-note card-date">Тема статьи</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Современное направление строительства подразумевает большие площади остекления</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="news-card article-card white-card">
							<div class="card-content">
								<p class="tpg-note card-date">Тема статьи</p>
								<a href="#" class="card-caption">Краткий заголовок новости</a>
								<p class="excerpt">Современное направление строительства подразумевает большие площади остекления</p>
								<a href="#" class="btn btn-light btn-small">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="gray-dots-bg"></div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>