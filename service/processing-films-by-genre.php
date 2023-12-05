<?php
function getArrayFilmsByGenre(string $resultGenre, array $movies, array $genres): array
{
	$filmsBySelectedGenre = [];

	$movies = array_map(function($movie)
	{
		$movie["genres"] = explode(',', $movie["genres"]);
		return $movie;
	}, $movies);

	foreach ($movies as $movie)
	{
		if (isset($genres[$resultGenre]) && in_array($genres[$resultGenre], $movie["genres"], true))
		{
			$filmsBySelectedGenre[] = $movie;
		}
		elseif ($resultGenre === '')
		{
			$filmsBySelectedGenre[] = $movie;
		}
	}
	return $filmsBySelectedGenre;
}
