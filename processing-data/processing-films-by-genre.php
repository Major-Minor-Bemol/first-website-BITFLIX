<?php
$FilmsBySelectedGenre = [];
function returningArrayFilmsBySelectedGenre(array $movies, array $genres)
{
	$resultGenre = htmlspecialchars($_GET["genre"]);

	foreach ($movies as $movie)
	{
		if (isset($genres[$resultGenre]) && in_array($genres[$resultGenre], $movie['genres'], true))
		{
			$FilmsBySelectedGenre[] = $movie;
		}
		elseif($resultGenre === '')
		{
			$FilmsBySelectedGenre[] = $movie;
		}
	}
	return $FilmsBySelectedGenre;
}
