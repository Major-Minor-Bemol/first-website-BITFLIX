<?php
function getArrayFilmsByGenre(string $resultGenre, array $movies, array $genres)
{
	$FilmsBySelectedGenre = [];

	foreach ($movies as $movie)
	{
		if (isset($genres[$resultGenre]) && in_array($genres[$resultGenre], $movie["genres"], true))
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
