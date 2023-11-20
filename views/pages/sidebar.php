<?php
/**
 * @var array $genres
 */
?>

<?php foreach ($genres as $key => $genre): ?>
	<li class="menu-item"><a href="sidebar.php?genre=<?= $key ;?>" class="menu-link" title="<?= $genre ?>"><span class="span-menu"><?= $genre ?></span></a></li>
<?php endforeach; ?>