<?php $page_title = 'Автосалон «Ауди Центр»'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><a href="projects.php">Наши объекты</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		<section class="post-content section-default-bottom-padding">
			<div class="container">
				<div class="section-caption">
					<h1 class="tpg-h1 sc-title">Автосалон «Ауди Центр»</h1>
				</div>
				<div class="big-photos-slider slider-dark-arrows slider-default-paddings">
					<div class="slide">
						<div class="image-card white-card">
							<img src="img/tmp/projects-slider-image-big.jpg" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="image-card white-card">
							<img src="img/tmp/projects-slider-image-big.jpg" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="image-card white-card">
							<img src="img/tmp/projects-slider-image-big.jpg" alt="">
						</div>
					</div>
					<div class="slide">
						<div class="image-card white-card">
							<img src="img/tmp/projects-slider-image-big.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="one-project-description">
					<div class="text tpg-typography">
						<p>С октября 2016 года завод по производству оборудования Moehlenhoff запущен в России. <br>Мы производим весь ассортимент конвекторов Moehlenhoff и решётку к ним. Предприятие выпускает внутрипольные конвекторы водяные с принудительной и естественной конвекцией, внутрипольные электрические конвекторы. Вся выпускаемая продукция комплектуется автоматикой Moehlenhoff. Технологическая линия оснащена передовым оборудованием для сборки и контроля качества. <br>Вся выпускаемая продукция комплектуется автоматикой Moehlenhoff. Технологическая линия оснащена передовым оборудованием для сборки и контроля качества.</p>
					</div>
					<div class="image">
						<img src="img/tmp/one-project-descr-image.png" alt="">
					</div>
				</div>
				<h3 class="tpg-h3 font-500 bigger-margin">Используемые продукты</h3>
				<div class="used-products-slider slider-default-paddings slider-dark-arrows">
					<?php for ($i=0; $i < 8; $i++): ?>
						<div class="slide">
							<div class="product-card white-card">
								<a href="one-product.php" class="card-image">
									<img src="img/tmp/product-image-small.png" alt="">
								</a>
								<div class="card-content">
									<a href="one-product.php" class="card-caption">Электрический отопительный прибор ESK</a>
									<p>Естественная конвекция</p>
									<p>Длина: от 750 мм до 4000 мм</p>
									<p>Теплопроизводительность: <br>от 220 до 1610 Вт</p>
									<a href="one-product.php" class="btn btn-light btn-small">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<div class="flex-center" style="padding-top: 20px;">
					<a href="#" class="btn">Рассчитать стоимость</a>
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
	</div>
<?php include('footer.php'); ?>