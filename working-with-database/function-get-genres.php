<?php

require_once __DIR__ . "/database-connection.php";

function getAllGenres(): array
{
	$connection = getDbConnection();

	$selectionGenres = mysqli_query($connection, "SELECT CODE, NAME FROM genre");
	if (!$selectionGenres)
	{
		throw new Exception(mysqli_error($connection));
	}

	$genres = [];
	while ($row = mysqli_fetch_assoc($selectionGenres))
	{
		// array_merge($genres[] = [
		// 	$row["CODE"] => $row["NAME"]
		// ]);
		$key = $row["CODE"];
		$value = $row["NAME"];
		$genres[$key] = $value;
	}


	return $genres;
}