<?php $page_title = 'Наши объекты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		<section class="products-list-section section-default-bottom-padding">
			<div class="container">
				<div class="section-caption">
					<h1 class="tpg-h1 sc-title">Наши объекты</h1>
				</div>
				<div class="cards-list columns-3 md-columns-2 xs-columns-1">
					<?php for ($i=0; $i < 9; $i++): ?>
						<div class="item">
							<div class="project-card white-card">
								<a href="one-project.php" class="card-image">
									<img src="//placeimg.com/330/220/any" alt="">
								</a>
								<div class="card-content">
									<p class="tpg-note">Москва</p>
									<a href="one-project.php" class="card-caption">Автосалон «Ауди Центр»</a>
									<p class="excerpt">Краткий текст описания объекта, буквально несколько строк</p>
									<a href="one-project.php" class="btn btn-light btn-small">Подробнее</a>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<div class="pagination-wrap">
					<!-- ↓↓↓ Default Pagination Layout ↓↓↓ -->
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li class="current"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
					<!-- ↓↓↓ WP PageNavi Plagin Layout ↓↓↓ -->
					<!-- <div class="wp-pagenavi">
						<a class="first" href="">« Первая</a>
						<a class="previouspostslink" rel="prev" href="">«</a>
						<span class="extend">...</span>
						<span class="current">1</span>
						<a class="page larger" title="Page 2" href="">2</a>
						<a class="page larger" title="Page 3" href="">3</a>
						<a class="page larger" title="Page 4" href="">4</a>
						<a class="page larger" title="Page 5" href="">5</a>
						<span class="extend">...</span>
						<a class="larger page" title="Page 10" href="/">10</a>
						<span class="extend">...</span>
						<a class="nextpostslink" rel="next" href="">»</a>
						<a class="last" href="/">Последняя »</a>
					</div> -->
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