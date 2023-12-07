<?php

require_once __DIR__ . "/database-connection.php";

function getActorsInMovie(int $currentIdMovie): string
{
	$connection = getDbConnection();

	$textQuery = "SELECT a.NAME
        FROM movie_actor ma
        LEFT JOIN actor a ON ma.ACTOR_ID = a.ID
        WHERE ma.MOVIE_ID = $currentIdMovie";

	$selectionActorsOnId = mysqli_query($connection, $textQuery);

	if (!$selectionActorsOnId)
	{
		throw new Exception(mysqli_error($connection));
	}

	$cast = [];

	while ($row = mysqli_fetch_assoc($selectionActorsOnId))
	{
		$cast[] = $row["NAME"];
	}

	return implode(", ", $cast);
}