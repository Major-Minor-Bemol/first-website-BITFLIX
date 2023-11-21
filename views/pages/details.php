<?php
/**
 * @var array $movies
*/

// $_GET - получает id фильма из поисковой строки
// Затем уменьшаем его на единицу, т.к. используем его в качестве индекса массива movies.
// var_dump($movies[$_GET['id'] - 1]['title']);
?>


<div class="container-for-details-desc">
	<header class="header-title-movie">
		<div class="title-movie-in-header">
			<?= $movies[$_GET['id'] - 1]['title']; ?>
			<div class="favorit">
				<img src="img/favorit.svg" alt="favorit" class="white-favorit">
				<img src="img/back-favorit.svg" alt="black-favorit" class="black-favorit">
			</div>
		</div>
		<div class="title-movie-in-header-engl">
			<?= $movies[$_GET['id'] - 1]['original-title'] ?>
			<div class="age-limit">
				<?= $movies[$_GET['id'] - 1]['age-restriction'] ?>+
			</div>
		</div>
		<div class="line-bottom-header-details">

		</div>
	</header>
	<section class="content-in-details">
		<div class="image-previe">
			<img class="container-image-previe" src="img/<?= $_GET['id']; ?>.jpg" alt="inside_out">
		</div>
		<div class="full-des-movie-details">
			<div class="ratting-movie">
				<?php foreach ((range(1,10)) as $currentValue): ?>
					<div class="quad">
						<img src="img/<?= $currentValue <= round($movies[$_GET['id'] - 1]['rating']) ? 'quad-img.svg' : 'white-quad.svg'; ?>" alt="quad">
					</div>
				<?php endforeach; ?>
				<div class="number-ratting">
					<img class="orange-ellips" src="img/Ellipse 2.svg" alt="orange-ellips">
					<div class="var-ratting"><?= $movies[$_GET['id'] - 1]['rating'] ?></div>
				</div>
			</div>
			<div class="text1">
				О фильме
			</div>
			<div class="movie-data">
				<div class="container-year-dir-act">
					<div class="year">Год производства:</div>
					<div class="director">Режиссёр:</div>
					<div class="actor">В главных ролях:</div>
				</div>
				<div class="container-var-year-dir-act">
					<div class="year"><?= $movies[$_GET['id'] - 1]['release-date'] ?></div>
					<div class="director"><?= $movies[$_GET['id'] - 1]['director'] ?></div>
					<div class="actor"><?= implode(', ', $movies[$_GET['id'] - 1]['cast']) ?></div>
				</div>
			</div>
			<div class="text1">
				Описание
			</div>
			<div class="disc-movie">
				<?= $movies[$_GET['id'] - 1]['description'] ?>
			</div>
		</div>
	</section>
</div>