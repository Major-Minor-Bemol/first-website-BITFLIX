<?php
/**
* @var array $movies
 */
?>

<?php foreach ($movies as $movie): ?>
	<div class="movie-item">
		<div class="images-item-">
			<img class="movie-img" src="<?= "img/{$movie['id']}.jpg" ;?>" alt="Number movie <?= $movie['id']; ?>">
		</div>
		<div class="movie-item-hover">
			<button class="details-button"><a href="details.php?id=<?= $movie['id']; ?>" class="details-button-link">Подробнее</a></button>
		</div>
		<div class="container-for-discription-movie">
			<div class="title-movie">
				<?= $movie['title']?>
			</div>
			<div class="engl-title-movie">
				<?= $movie['original-title']?>
			</div>
			<div class="line-bottom-engl">

			</div>
			<div class="discription-movie">
				<?= $movie['description']?>
			</div>
			<div class="length-movie">
				<img class="image-clock" src="img/clock.svg" alt="clock">
				<div class="length-min">
					<?= $movie['duration'] ?> мин. / <?= gmdate('i:s', $movie['duration']) ?>
				</div>
				<div class="genre-movie">
					<?= implode(', ', $movie['genres'])?>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>