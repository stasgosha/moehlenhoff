<?php $page_title = 'Дистрибьюторы'; ?>
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
		<section class="distributors-section section-default-bottom-padding">
			<div class="container">
				<div class="row margin-bottom-big">
					<div class="col-lg-8">
						<h1 class="tpg-h1 d-none d-lg-block">Наши дистрибьюторы</h1>
						<div class="section-caption d-lg-none">
							<h1 class="tpg-h1 sc-title">Наши дистрибьюторы</h1>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="select-field fullwidth city-select">
							<select>
								<option value="1">Все города</option>
								<option value="2">Москва</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="bordered-map white-card">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12cfc2a508969fa47c6262a639f406f9f052ad03f841362ce4f17637ee13af26&amp;width=100%25&amp;height=518&amp;lang=ru_UA&amp;scroll=true"></script>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="distributors-list mCustomScrollbar" data-mcs-theme="dark">
							<div class="distributor-card white-card current">
								<div class="card-number">
									<span>1</span>
								</div>
								<p class="card-caption">Интерма</p>
								<p>Адрес: г. Москва, ул. Кирпичная, д. 48 <br>Телефон: +7 495 780-70-00 <br>Cайт: <a href="//interma.ru" target="_blank">www.interma.ru</a> <br>E-mail: <a href="mailto:sale@interma.ru">sale@interma.ru</a></p>
							</div>
							<div class="distributor-card white-card">
								<div class="card-number">
									<span>2</span>
								</div>
								<p class="card-caption">Интерма</p>
								<p>Адрес: г. Москва, ул. Кирпичная, д. 48 <br>Телефон: +7 495 780-70-00 <br>Cайт: <a href="//interma.ru" target="_blank">www.interma.ru</a> <br>E-mail: <a href="mailto:sale@interma.ru">sale@interma.ru</a></p>
							</div>
							<div class="distributor-card white-card">
								<div class="card-number">
									<span>3</span>
								</div>
								<p class="card-caption">Интерма</p>
								<p>Адрес: г. Москва, ул. Кирпичная, д. 48 <br>Телефон: +7 495 780-70-00 <br>Cайт: <a href="//interma.ru" target="_blank">www.interma.ru</a> <br>E-mail: <a href="mailto:sale@interma.ru">sale@interma.ru</a></p>
							</div>
							<div class="distributor-card white-card">
								<div class="card-number">
									<span>4</span>
								</div>
								<p class="card-caption">Интерма</p>
								<p>Адрес: г. Москва, ул. Кирпичная, д. 48 <br>Телефон: +7 495 780-70-00 <br>Cайт: <a href="//interma.ru" target="_blank">www.interma.ru</a> <br>E-mail: <a href="mailto:sale@interma.ru">sale@interma.ru</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>