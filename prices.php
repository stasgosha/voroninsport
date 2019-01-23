<?php $page_title = 'Стоимость тренировок'; ?>
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
						<table class="table pricing-table">
							<tr>
								<th>Тип тренировки</th>
								<th>Взрослые</th>
								<th>Дети</th>
							</tr>
							<tr>
								<td class="orange">Персональная тренировка</td>
								<td class="price">4 000 руб</td>
								<td class="price">2 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 4 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 8 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 12 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
							<tr>
								<td class="orange">Тренировка team ( 2 человека )</td>
								<td class="price">4 000 руб</td>
								<td class="price">2 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 4 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 8 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
							<tr>
								<td class="gray">Блок из 12 тренировок</td>
								<td class="price">15 200 руб</td>
								<td class="price">9 500 руб</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>