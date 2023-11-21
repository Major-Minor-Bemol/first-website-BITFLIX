<?php
/**
 * @var array $menuItems
 */
?>

<nav>
	<li class="menu-item"><a href="/" class="menu-link" title="Главная"><span class="span-menu">Главная</span></a></li>
	<li class="menu-item"><a href="favorite.php" class="menu-link" title="Избранное"><span class="span-menu">Избранное</span></a></li>
	<?php foreach ($menuItems as $menuItem): ?>
		<li class="menu-item"><a href="<?= $menuItem['url']; ?>" class="menu-link"><?= $menuItem['ruNameGenre']; ?></a></li>
	<?php endforeach; ?>
</nav>
