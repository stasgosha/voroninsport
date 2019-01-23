<?php $page_title = 'Расписание групповых тренировок'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="page-header">
			<div class="container">
				<div class="page-header-inner">
					<div class="page-header-block">
						<h1 class="tpg-h1"><?= $page_title ?></h1>
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
						<a itemprop="item" href="functional-training.php.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ol>
			</div>
		</div>
		<section class="page-content-section">
			<div class="container">
				<div class="scrollable-container">
					<div class="scrollable-container-inner">
						<table class="table schedule-table">
							<tr>
								<th class="orange">Для детей</th>
								<th>Пн</th>
								<th>Вт</th>
								<th>Ср</th>
								<th>Чт</th>
								<th>Пт</th>
								<th>Сб</th>
								<th>Вс</th>
							</tr>
							<tr>
								<td class="caption">4-5 лет (офп)</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">5-6 лет</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">7-8 лет</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
							</tr>
							<tr>
								<td class="caption">8-10 лет</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
							</tr>
							<tr>
								<td class="caption">10-12 лет</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">12-14 лет</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">14-16 лет</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="margin-bottom-giant"></div>
				<div class="scrollable-container">
					<div class="scrollable-container-inner">
						<table class="table schedule-table">
							<tr>
								<th class="orange">Для взрослых</th>
								<th>Пн</th>
								<th>Вт</th>
								<th>Ср</th>
								<th>Чт</th>
								<th>Пт</th>
								<th>Сб</th>
								<th>Вс</th>
							</tr>
							<tr>
								<td class="caption">Функциональная тренировка</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">скандинавская ходьба</td>
								<td class="gray time">15:30</td>
								<td class="gray time">15:30</td>
								<td class="gray time">15:30</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="caption">Роллеры</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
							</tr>
							<tr>
								<td class="caption">Лыжная имитация</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="gray time">15:30</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>