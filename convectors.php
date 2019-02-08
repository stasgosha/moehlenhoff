<?php $page_title = 'Конвекторы'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><a href="production.php">Продукция</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		<section class="products-list-section section-default-bottom-padding">
			<div class="container">
				<div class="section-caption">
					<h1 class="tpg-h1 sc-title">Конвекторы Moehlenhoff</h1>
				</div>
				<div class="cards-list columns-4 lg-columns-3 md-columns-2 xs-columns-1">
					<?php for ($i=0; $i < 8; $i++): ?>
						<div class="item">
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