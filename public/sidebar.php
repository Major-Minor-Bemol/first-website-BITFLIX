<?php
require_once __DIR__ . "/../working-with-database/function-get-genres.php";

$genres = getAllGenres();

foreach ($genres as $engNameGenre => $ruNameGenre)
{
	$sideBarMenu[] = ["url" => "/?genre=$engNameGenre", "ruNameGenre" => $ruNameGenre];
}

return $sideBarMenu;