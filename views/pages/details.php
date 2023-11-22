<?php
/**
 * @var array $movies
 * @var int $resultingIdFromSearchBar
*/

// $resultingIdFromSearchBar - получает id фильма из поисковой строки в public/details
// Затем уменьшаем его на единицу, т.к. используем его в качестве индекса массива movies.
?>


<div class="container-for-details-desc">
	<header class="header-title-movie">
		<div class="title-movie-in-header">
			<?= $movies[$resultingIdFromSearchBar - 1]["title"]; ?>
			<div class="favorit">
				<img src="img/favorit.svg" alt="favorit" class="white-favorit">
				<img src="img/back-favorit.svg" alt="black-favorit" class="black-favorit">
			</div>
		</div>
		<div class="title-movie-in-header-engl">
			<?= $movies[$resultingIdFromSearchBar - 1]["original-title"] ?>
			<div class="age-limit">
				<?= $movies[$resultingIdFromSearchBar - 1]["age-restriction"] ?>+
			</div>
		</div>
		<div class="line-bottom-header-details">

		</div>
	</header>
	<section class="content-in-details">
		<div class="image-previe">
			<img class="container-image-previe" src="img/<?= $resultingIdFromSearchBar ?>.jpg" alt="image-movie">
		</div>
		<div class="full-des-movie-details">
			<div class="ratting-movie">
				<?php foreach ((range(1,10)) as $currentValue): ?>
					<div class="quad">
						<img src="img/<?= $currentValue <= round($movies[$resultingIdFromSearchBar - 1]["rating"]) ? "quad-img.svg" : "white-quad.svg" ?>" alt="quad">
					</div>
				<?php endforeach; ?>
				<div class="number-ratting">
					<img class="orange-ellips" src="img/Ellipse 2.svg" alt="orange-ellips">
					<div class="var-ratting"><?= $movies[$resultingIdFromSearchBar - 1]["rating"] ?></div>
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
					<div class="year"><?= $movies[$resultingIdFromSearchBar - 1]["release-date"] ?></div>
					<div class="director"><?= $movies[$resultingIdFromSearchBar - 1]["director"] ?></div>
					<div class="actor"><?= implode(', ', $movies[$resultingIdFromSearchBar - 1]["cast"]) ?></div>
				</div>
			</div>
			<div class="text1">
				Описание
			</div>
			<div class="disc-movie">
				<?= $movies[$resultingIdFromSearchBar - 1]["description"] ?>
			</div>
		</div>
	</section>
</div>