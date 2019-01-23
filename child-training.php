<?php $page_title = 'Детская спортивная школа'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-header">
			<div class="container">
				<div class="page-header-inner">
					<div class="page-header-block">
						<h1 class="tpg-h1"><?= $page_title ?></h1>
					</div>
					<div class="page-header-block no-flex">
						<ul class="page-header-links">
							<li><a href="schedule.php" class="btn btn-white">Расписание тренировок</a></li>
							<li><a href="prices.php" class="btn btn-white">Стоимость</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumbs-section">
			<div class="container">
				<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="index.php">
							<span itemprop="name">Главная</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="trainings.php">
							<span itemprop="name">Тренировки</span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="functional-training.php.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
			</div>
		</div>
		<section class="about-section section-default-bottom-padding">
			<div class="container">
				<div class="row padding-bottom-big">
					<div class="col-lg-6 margin-bottom-large lg-margin-bottom-no">
						<div class="numbered-caption">
							<div class="number">01</div>
							<div class="text">
								<h3 class="tpg-h2">Тренировки для детей</h3>
							</div>
						</div>
						<div class="tpg-typography">
							<p>Cостояние Вселенной в определённый момент времени в прошлом, когда плотность энергии (материи) и кривизна пространства-времени были очень велики — порядка планковских значений. Это состояние, вместе с последующим этапом эволюции Вселенной, пока плотность энергии (материи) оставалась высокой, называют также Большим Взрывом. <br>Космологическая сингулярность является одним из примеров гравитационных сингулярностей.</p>
							<p>Это состояние, вместе с последующим этапом эволюции Вселенной, пока плотность энергии (материи) оставалась высокой, называют также Большим Взрывом. <br>Космологическая сингулярность является одним.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="photos-slider">
							<div class="slide">
								<img src="img/temp/slide-child.jpg" alt="">
							</div>
							<div class="slide">
								<img src="img/temp/slide-child.jpg" alt="">
							</div>
							<div class="slide">
								<img src="img/temp/slide-child.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="cards-list columns-4 md-columns-2 xs-columns-1 padding-top-big">
					<div class="item">
						<div class="white-card">
							<div class="card-icon">
								<i class="icon-forest"></i>
							</div>
							<div class="card-content">
								<p>Уникальное расположение. парк Олимпийской деревни – огромная зеленая зона</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="card-icon">
								<i class="icon-route"></i>
							</div>
							<div class="card-content">
								<p>Безопасная лыжероллерная и лыжная трассы непосредственно в парке</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="card-icon">
								<i class="icon-gym"></i>
							</div>
							<div class="card-content">
								<p>Светлый, просторный спортивный зал с панорамными окнами</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="card-icon">
								<i class="icon-equipment"></i>
							</div>
							<div class="card-content">
								<p>Специальное оборудование <br>в зале для повышения результатов</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="groups-by-age-section">
			<div class="container">
				<div class="add-lines fullwidth">
					<h3 class="tpg-h3">Записывайте детей в группы по возрастам</h3>
				</div>
				<div class="groups-by-age-list">
					<div class="item">
						<div class="age">5-6 лет</div>
						<p>Подготовительная</p>
					</div>
					<div class="item">
						<div class="age">7-8 лет</div>
						<p>Детская</p>
					</div>
					<div class="item">
						<div class="age">8-10 лет</div>
						<p>Старшая детская</p>
					</div>
					<div class="item">
						<div class="age">10-12 лет</div>
						<p>Средняя</p>
					</div>
					<div class="item">
						<div class="age">12-14 лет</div>
						<p>Старшая</p>
					</div>
					<div class="item">
						<div class="age">14-16 лет</div>
						<p>Юниорская</p>
					</div>
				</div>
				<div class="add-lines fullwidth">
					<button class="btn">Записаться на пробное занятие</button>
				</div>
			</div>
		</section>
		<section class="who-we-are-section">
			<div class="container">
				<div class="row align-items-end flex-column-reverse flex-lg-row">
					<div class="col-lg-6 margin-top-large lg-margin-top-no md-flex-center">
						<div class="image-with-label">
							<div class="label">Лично подбирает <br>тренерский состав и <br>проводит занятия</div>
							<div class="image">
								<img src="img/section-images/voronin.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="numbered-caption">
							<div class="number">02</div>
							<div class="text">
								<h3 class="tpg-h2">Тренерский штаб</h3>
							</div>
						</div>
						<div class="tpg-typography">
							<p class="tpg-body-2 text-uppercase">Дмитрий воронин</p>
							<p>Проблема существования космологической сингулярности является одной из наиболее серьёзных проблем физической космологии. Дело в том, что никакие наши сведения о том, что произошло после Большого Взрыва, не могут дать нам никакой информации о том, что происходило до этого. <br>Попытки решения проблемы существования этой сингулярности идут в нескольких направлениях: во-первых, считается.</p>
						</div>
						<blockquote class="blockquote">
							<div class="blockquote-content">
								<p class="tpg-body-1">Мастер спорта международного класса по лыжным гонкам, победитель и призёр Чемпионатов Мира и этапов Кубка Мира по лыжероллерам, трёхкратный чемпион России в спринте. Дипломированный педагог.</p>
							</div>
							<div class="blockquote-image d-none d-sm-block">
								<img src="img/section-images/medal.png" alt="">
							</div>
						</blockquote>
					</div>
				</div>
				<div class="cards-list columns-3 sm-columns-1 margin-top-huge">
					<div class="item">
						<div class="white-card">
							<div class="card-image fullwidth">
								<img src="//placeimg.com/370/360/people?v=1" alt="">
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Фамилия Имя</p>
								<p>Победитель и призёр Чемпионатов Мира и этапов Кубка Мира по лыжероллерам.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="card-image fullwidth">
								<img src="//placeimg.com/370/360/people?v=2" alt="">
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Фамилия Имя</p>
								<p>Победитель и призёр Чемпионатов Мира и этапов Кубка Мира по лыжероллерам.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="card-image fullwidth">
								<img src="//placeimg.com/370/360/people?v=3" alt="">
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Фамилия Имя</p>
								<p>Победитель и призёр Чемпионатов Мира и этапов Кубка Мира по лыжероллерам.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="add-lines">
					<a href="coaching-staff.php" class="btn btn-wide xs-fullwidth">Вся команда</a>
				</div>
			</div>
		</section>
		<section class="prices-section">
			<div class="container">
				<div class="numbered-caption">
					<div class="number">03</div>
					<div class="text">
						<h3 class="tpg-h2">Стоимость абонементов</h3>
					</div>
				</div>
				<div class="cards-list columns-3 md-columns-1 margin-bottom-huge">
					<div class="item">
						<div class="white-card">
							<div class="big-price-card">
								<p class="bpc-caption">на 10 месяцев</p>
								<div class="bpc-prices-list margin-bottom-huge">
									<div class="item fullwidth">
										<div class="bpc-price-block">
											<p class="bpc-label after">+ подарок</p>
											<p class="bpc-price"><span>100 000</span> руб</p>
										</div>
									</div>
								</div>
								<div class="bpc-content">
									<button href="#" class="btn btn-wide">Записаться</button>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="big-price-card">
								<p class="bpc-caption">на 5 месяцев</p>
								<div class="bpc-prices-list margin-bottom-huge">
									<div class="item fullwidth">
										<div class="bpc-price-block">
											<p class="bpc-label after">+ подарок</p>
											<p class="bpc-price"><span>55 000</span> руб</p>
										</div>
									</div>
								</div>
								<div class="bpc-content">
									<button href="#" class="btn btn-wide">Записаться</button>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="white-card">
							<div class="big-price-card">
								<p class="bpc-caption">на 1 месяц</p>
								<div class="bpc-prices-list margin-bottom-huge">
									<div class="item fullwidth">
										<div class="bpc-price-block">
											<p class="bpc-price"><span>12 000</span> руб</p>
										</div>
									</div>
								</div>
								<div class="bpc-content">
									<button href="#" class="btn btn-wide">Записаться</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="add-lines fullwidth margin-bottom-big">
					<h3 class="tpg-h3">что входит в стоимость тренировок</h3>
				</div>
				<div class="row align-items-lg-end">
					<div class="col-lg-6 margin-bottom-large lg-margin-no">
						<ol class="tpg-ol columns-2 xs-columns-1">
							<li>Подготовка плана тренировок</li>
							<li>Подготовка плана тренировок</li>
							<li>Подготовка плана тренировок</li>
							<li>Подготовка плана тренировок</li>
							<li>Подготовка плана тренировок</li>
							<li>Подготовка плана тренировок</li>
						</ol>
					</div>
					<div class="col-lg-6 lg-padding-left-giant">
						<a href="tel:+74993913910" class="orange-phone margin-bottom-normal">+7 (499) 391-391-0</a>
						<p>Полную информацию Вы можете <br>получить по телефону</p>
					</div>
				</div>
				<div class="divider"></div>
			</div>
		</section>
		<section class="training-approach-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 margin-bottom-large lg-margin-bottom-no">
						<div class="numbered-caption">
							<div class="number">04</div>
							<div class="text">
								<h3 class="tpg-h2">Подход к тренировкам</h3>
							</div>
						</div>
						<div class="cards-list columns-2 xs-columns-1">
							<div class="item">
								<div class="white-card">
									<div class="card-number">1</div>
									<div class="card-icon">
										<i class="icon-aim"></i>
									</div>
									<div class="card-content">
										<p class="card-caption">Цель</p>
										<p>Собственные методики <br>и подходы к тренировкам, международный опыт</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="white-card">
									<div class="card-number">2</div>
									<div class="card-icon">
										<i class="icon-techniques"></i>
									</div>
									<div class="card-content">
										<p class="card-caption">Методики</p>
										<p>Собственные методики <br>и подходы к тренировкам, международный опыт</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="white-card">
									<div class="card-number">3</div>
									<div class="card-icon">
										<i class="icon-professional"></i>
									</div>
									<div class="card-content">
										<p class="card-caption">Профессионалы</p>
										<p>Мастера спорта, элитные спортсмены, высшее спортивное образование</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="white-card">
									<div class="card-number">4</div>
									<div class="card-icon">
										<i class="icon-equipment"></i>
									</div>
									<div class="card-content">
										<p class="card-caption">Оборудование</p>
										<p>Уникальное расположение. парк Олимпийской деревни – огромная зеленая зона</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="image-with-label">
							<div class="label text-right">Достижение амбициозных <br>целей и максимальных <br>результатов</div>
							<div class="image">
								<img src="img/section-images/training-approach.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="add-lines margin-bottom-large">
					<h3 class="tpg-h3">Дополнительные возможности</h3>
				</div>
				<div class="row">
					<div class="col-md-4 margin-bottom-big md-margin-bottom-no">
						<a href="#" class="tile" style="background-image: url(img/tiles/child-camp.jpg);">
							<span class="tile-caption">Детский лагерь <br>дневной</span>
						</a>
					</div>
					<div class="col-md-4 margin-bottom-big md-margin-bottom-no">
						<a href="#" class="tile" style="background-image: url(img/tiles/preparation-for-competitions.jpg);">
							<span class="tile-caption">Подготовка <br>к соревнованиям</span>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="tile" style="background-image: url(img/tiles/outdoor-training.jpg);">
							<span class="tile-caption">Выездные <br>тренировки</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="first-lesson-promo-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-caption">
						<h3 class="sc-title text-uppercase">Пробное занятие <span>бесплатно</span></h3>
					</div>
					<p class="tpg-body-1 color-light margin-bottom-large">Хотите бесплатное занятие с Дмитрием Ворониным? <br>Запишитесь на первую пробную тренировку.</p>
					<a href="#" class="btn btn-superwide">Записаться</a>
				</div>
			</div>
		</section>
		<section class="last-news-section section-default-top-padding">
			<div class="container">
				<div class="numbered-caption">
					<div class="number">05</div>
					<div class="text">
						<h3 class="tpg-h2">Ближайшие клубные мероприятия</h3>
					</div>
				</div>
				<div class="cards-list columns-3 sm-columns-1">
					<div class="item">
						<a href="#" class="white-card">
							<div class="card-dates">
								<div class="days">24.01 - 28.01</div>
								<div class="year">2019</div>
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Тренто, Италия</p>
								<p>Участие в культовой лыжной гонке классическим стилем Marcialonga 2019</p>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#" class="white-card">
							<div class="card-dates">
								<div class="days">24.01 - 28.01</div>
								<div class="year">2019</div>
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Тренто, Италия</p>
								<p>Участие в культовой лыжной гонке классическим стилем Marcialonga 2019</p>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="#" class="white-card">
							<div class="card-dates">
								<div class="days">24.01 - 28.01</div>
								<div class="year">2019</div>
							</div>
							<div class="card-content text-left">
								<p class="card-caption">Тренто, Италия</p>
								<p>Участие в культовой лыжной гонке классическим стилем Marcialonga 2019</p>
							</div>
						</a>
					</div>
				</div>
				<div class="add-lines margin-top-huge">
					<a href="#" class="btn">Календарь мероприятий</a>
				</div>
			</div>
		</section>
		<section class="instagram-section section-default-paddings">
			<div class="container">
				<div class="add-lines margin-bottom-large">
					<h3 class="tpg-h3">Наш Instagram</h3>
				</div>
				<div class="instagram-slider slider-dark-arrows">
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=1" alt="">
					</div>
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=2" alt="">
					</div>
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=3" alt="">
					</div>
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=4" alt="">
					</div>
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=5" alt="">
					</div>
					<div class="slide">
						<img src="//placeimg.com/300/300/any?v=6" alt="">
					</div>
				</div>
				<div class="add-lines">
					<a href="https://www.instagram.com/voroninsport/" class="btn xs-fullwidth" target="_blank">Перейти в Instagram</a>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>