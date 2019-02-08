<?php $page_title = 'Контакты'; ?>
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
		<section class="requisites-section section-default-bottom-padding">
			<div class="container">
				<h1 class="tpg-h1">Компания Moehlenhoff</h1>
				<div class="row flex-column-reverse flex-lg-row">
					<div class="col-lg-8">
						<div class="bordered-map white-card">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12cfc2a508969fa47c6262a639f406f9f052ad03f841362ce4f17637ee13af26&amp;width=100%25&amp;height=516&amp;lang=ru_UA&amp;scroll=true"></script>
						</div>
						<div class="requisites-list">
							<div class="item">
								<div class="item-icon">
									<i class="icon-location"></i>
								</div>
								<div class="item-content">105187, Россия, г. Москва, <br>ул. Кирпичная, д. 48</div>
							</div>
							<div class="item">
								<div class="item-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="item-content">+7(495)773-64-78 <br><a href="mailto:info@mohlenhoff.org">info@mohlenhoff.org</a></div>
							</div>
							<div class="item">
								<div class="item-icon">
									<i class="icon-clock"></i>
								</div>
								<div class="item-content">Режим работы <br>Пн-Пт с 9.00-17.00</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="requisites-text">
							<h3 class="tpg-h3 font-500">Реквизиты</h3>
							<p>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «Климатик-М»</p>
							<p>Генеральный директор Смирнов Александр Игоревич</p>
							<p>Юридический адрес: 105062, Москва, <br>Подсосенский переулок, дом 13, офис 19</p>
							<p>Фактический адрес: 105187, Москва, <br>ул. Кирпичная, д. 48</p>
							<p>ОГРН 1147746842187</p>
							<p>ИНН 7709959199</p>
							<p>КПП 770901001</p>
							<p>Код отрасли по ОКПО 34570594</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>