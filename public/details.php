<?php
require_once __DIR__ . "/../service/template-service.php";
require_once __DIR__ . "/../data-movie/movies.php";

/**
 * @var array $movies
 * @var array $genres
*/

$resultingIdFromSearchBar = $_GET["id"];

if (!is_numeric($resultingIdFromSearchBar) || $resultingIdFromSearchBar <= 0)
{
	echo "Ошибка: ID фильма должен быть больше 0 и в числовом формате.";
	exit;
}
else
{
	$resultingIdFromSearchBar = (int) $_GET["id"];
}

echo view("layout", [
	"content" => view("pages/details", ["movies" => $movies, "resultingIdFromSearchBar" => $resultingIdFromSearchBar]),
	"sideBarMenu" => require_once __DIR__ . "/sidebar.php", ["genres" => $genres]
]);
