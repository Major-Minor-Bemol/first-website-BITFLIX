<?php
/**
 * @var array $movies
 * @var int $currentValue
 */
?>
<? function quadRendering(array $movies, int $currentValue)
{?>
	<div class="quad">
		<img src="img/<?= $currentValue <= round($movies[$_GET['id'] - 1]['rating']) ? 'quad-img.svg' : 'white-quad.svg';?>" alt="quad">
	</div>
<?}?>
