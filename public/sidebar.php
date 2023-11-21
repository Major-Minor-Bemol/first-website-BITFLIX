<?php
require_once __DIR__ . '/../data-movie/movies.php';

/**
 * @var array $genres
 */

foreach ($genres as $engNameGenre => $ruNameGenre)
{
	$sideBarMenu[] = ['url' => "/?genre=$engNameGenre", 'ruNameGenre' => $ruNameGenre];
}

return $sideBarMenu;