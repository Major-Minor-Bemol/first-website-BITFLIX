<?php

require_once __DIR__ . "/database-connection.php";
require_once __DIR__ . "/function-get-actor-on-id.php";

function getMovieId(int $resultingIdFromSearchBar): array
{
	$connection = getDbConnection();

	$textQuery = "SELECT
        m.ID,
        m.TITLE,
        m.ORIGINAL_TITLE,
        m.DESCRIPTION,
        d.NAME AS DIRECTOR,
        m.AGE_RESTRICTION,
        m.RELEASE_DATE,
        m.RATING
        FROM
        movie m
        LEFT JOIN
        director d ON m.DIRECTOR_ID = d.ID
        WHERE
        m.ID = $resultingIdFromSearchBar
        GROUP BY
        m.ID";

	$selectionMovieOnId = mysqli_query($connection, $textQuery);

	if (!$selectionMovieOnId)
	{
		throw new Exception(mysqli_error($connection));
	}

	$movies = [];

	while ($row = mysqli_fetch_assoc($selectionMovieOnId))
	{
		$movies = [
			"id" => $row["ID"],
			"title" => $row["TITLE"],
			"original-title" => $row["ORIGINAL_TITLE"],
			"description" => $row["DESCRIPTION"],
			"cast" => getActorsInMovie($row["ID"]),
			"director" => $row["DIRECTOR"],
			"age-restriction" => $row["AGE_RESTRICTION"],
			"release-date" => $row["RELEASE_DATE"] != null ? $row["RELEASE_DATE"] : "Нет информации.",
			"rating" => $row["RATING"] != null ? $row["RATING"] : "Нет."
		];
	}


	return $movies;
}