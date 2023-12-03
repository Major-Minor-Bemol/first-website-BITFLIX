<?php

require_once __DIR__ . "/database-connection.php";

function getListMovies (): array
{
	$connection = getDbConnection();

	$selectionMovie = mysqli_query($connection,
	"SELECT 
           m.ID,
           m.TITLE,
           m.ORIGINAL_TITLE,
           m.DESCRIPTION,
           m.DURATION,
           m.AGE_RESTRICTION,
           m.RELEASE_DATE,
           m.RATING,
           d.NAME AS Director,
           GROUP_CONCAT(DISTINCT a.NAME) AS Actors,
           GROUP_CONCAT(DISTINCT g.NAME) AS Genres
	       FROM 
           movie m
		   LEFT JOIN 
           director d ON m.DIRECTOR_ID = d.ID
		   LEFT JOIN 
           movie_actor ma ON m.ID = ma.MOVIE_ID
		   LEFT JOIN 
           actor a ON ma.ACTOR_ID = a.ID
		   LEFT JOIN 
           movie_genre mg ON m.ID = mg.MOVIE_ID
		   LEFT JOIN 
           genre g ON mg.GENRE_ID = g.ID
		   GROUP BY 
           m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION, m.DURATION, 
           m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING, d.NAME;");
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

			"genres" => explode(",", $row["Genres"]), // преобразовываем в массив, т.к. ф-я getArrayFilmsByGenre ждёт 2-м параметром именно его.
			"cast" => $row["Actors"],
			"director" => $row["Director"],

			"age-restriction" => $row["AGE_RESTRICTION"],
			"release-date" => $row["RELEASE_DATE"] != null ? $row["RELEASE_DATE"] : "Нет информации.",
			"rating" => $row["RATING"] != null ? $row["RATING"] : "Нет."
		];
	}

	return $movies;
}