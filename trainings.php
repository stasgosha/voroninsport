<?php $page_title = 'Наши тренировки'; ?>
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
		<section class="training-directions-section">
			<div class="container">
				<div class="row align-items-center margin-bottom-large">
					<div class="col">
						<div class="numbered-caption">
							<div class="number">01</div>
							<div class="text">
								<h3 class="tpg-h2">Направления тренировок</h3>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-3 margin-top-normal md-margin-top-no">
						<a href="#" class="btn btn-gray fullwidth">Все программы</a>
					</div>
				</div>
				<div class="categories-tiles margin-bottom-giant">
					<div class="tiles-column wide">
						<div class="item wide">
							<a href="#" class="tile" style="background-image: url(img/tiles/ski-rollers.jpg);">
								<span class="tile-caption">Лыжероллеры</span>
							</a>
						</div>
						<div class="item">
							<a href="#" class="tile" style="background-image: url(img/tiles/scandinavian-walking.jpg);">
								<span class="tile-caption">Скандинавская ходьба</span>
							</a>
						</div>
						<div class="item">
							<a href="#" class="tile" style="background-image: url(img/tiles/roller-skates.jpg);">
								<span class="tile-caption">Ролики</span>
							</a>
						</div>
						<div class="item wide">
							<a href="skiing.php" class="tile" style="background-image: url(img/tiles/cross-country-skiing.jpg);">
								<span class="tile-caption">Беговые лыжи</span>
							</a>
						</div>
					</div>
					<div class="tiles-column">
						<div class="item tall">
							<a href="functional-training.php" class="tile" style="background-image: url(img/tiles/functional-training.jpg);">
								<span class="tile-caption">Функциональный тренинг</span>
							</a>
						</div>
					</div>
				</div>
				<div class="add-lines margin-bottom-large">
					<h3 class="tpg-h3">Дополнительные возможности</h3>
				</div>
				<div class="row">
					<div class="col-md-4 margin-bottom-big md-margin-bottom-no">
						<a href="child-training.php" class="tile" style="background-image: url(img/tiles/child-camp.jpg);">
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
		<section class="childrens-school-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-caption">
						<h3 class="sc-title">Первая тренировка бесплатно <span>Детская спорт школа</span></h3>
					</div>
					<p class="tpg-body-1 color-light margin-bottom-large" style="max-width: 440px;">состояние Вселенной в определённый момент времени в прошлом, когда плотность энергии (материи) и кривизна пространства-времени были очень велики ...</p>
					<div class="flex-container margin-bottom-huge">
						<div class="flex-item">
							<div class="price-block">
								<a href="tel:74993913910" class="block-phone">+ 7(499) 391-391-0</a>
								<div class="block-label">Звоните по всем вопросам</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn btn-superwide">Читать больше</a>
				</div>
			</div>
		</section>
		<section class="about-section section-default-paddings">
			<div class="container">
				<div class="cards-list columns-4 md-columns-2 xs-columns-1">
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
		<section class="who-we-are-section padding-top-no">
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
								<h3 class="tpg-h2">Дмитрий Воронин</h3>
							</div>
						</div>
						<div class="tpg-typography">
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
		<section class="photo-gallery-section section-default-paddings">
			<div class="container">
				<div class="numbered-caption">
					<div class="number">04</div>
					<div class="text">
						<h3 class="tpg-h2">фотографии тренировок</h3>
					</div>
				</div>
				<div class="photos-slider" data-slick='{"dots": true}'>
					<div class="slide">
						<img src="img/temp/slide-training.jpg" alt="">
					</div>
					<div class="slide">
						<img src="img/temp/slide-training.jpg" alt="">
					</div>
					<div class="slide">
						<img src="img/temp/slide-training.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="last-news-section">
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