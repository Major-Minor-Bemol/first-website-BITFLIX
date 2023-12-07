<?php

require_once __DIR__ . "/database-connection.php";
require_once __DIR__ . "/function-get-genres-on-id.php";

function getListMovies(string $resultGenre, array $genres): array
{
	$connection = getDbConnection();

	if ($resultGenre === '')
	{
		$resultGenre = $textQuery = "SELECT 
						   m.ID,
						   m.TITLE,
						   m.ORIGINAL_TITLE,
						   m.DESCRIPTION,
						   m.DURATION
						   FROM 
						   movie m";
	}

	else
	{
	$textQuery = "SELECT 
       m.ID,
       m.TITLE,
       m.ORIGINAL_TITLE,
       m.DESCRIPTION,
       m.DURATION
       FROM 
       movie m
       LEFT JOIN movie_genre mg ON mg.MOVIE_ID = m.ID
       LEFT JOIN genre g ON g.ID = mg.GENRE_ID
       WHERE g.CODE = '$resultGenre'";
    }

	$selectionMovie = mysqli_query($connection, $textQuery);

	if (!$selectionMovie)
	{
		throw new Exception(mysqli_error($connection));
	}

	$movies = [];

	while ($row = mysqli_fetch_assoc($selectionMovie))
	{
		$movies[] = [
			"id" => $row["ID"],
			"title" => $row["TITLE"],
			"original-title" => $row["ORIGINAL_TITLE"],
			"description" => $row["DESCRIPTION"],
			"duration" => $row["DURATION"],
			"genres" => getGenresMovie($row["ID"]),
		];
	}

	return $movies;
}