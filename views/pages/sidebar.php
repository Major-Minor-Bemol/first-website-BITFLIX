<?php
/**
 * @var array $menuItems
 */
?>

<nav>
	<?php foreach ($menuItems as $menuItem): ?>
		<li class="menu-item"><a href="<?= $menuItem['url']; ?>" class="menu-link"><?= $menuItem['ruNameGenre']; ?></a></li>
	<?php endforeach; ?>
</nav>
