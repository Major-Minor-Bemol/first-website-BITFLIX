<?php

require_once __DIR__ . "/database-connection.php";

function getGenresMovie(int $currentIdMovie): array
{
	$connection = getDbConnection();

	$textQuery = "SELECT g.NAME
        FROM genre g
        LEFT JOIN movie_genre mg ON mg.GENRE_ID = g.ID
        WHERE mg.MOVIE_ID = $currentIdMovie";

	$selectionGenresOnId = mysqli_query($connection, $textQuery);

	if (!$selectionGenresOnId)
	{
		throw new Exception(mysqli_error($connection));
	}

	$genres = [];

	while ($row = mysqli_fetch_assoc($selectionGenresOnId))
	{
		$genres[] = $row["NAME"];
	}

	return $genres;
}