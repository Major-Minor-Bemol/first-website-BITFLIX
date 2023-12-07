<?php
require_once __DIR__ . "/../service/template-service.php";
require_once __DIR__ . "/../working-with-database/function-get-genres.php";
require_once __DIR__ . "/../working-with-database/function-get-movie-id-for-details.php";

$resultingIdFromSearchBar = $_GET["id"] ?? null;

if (!is_numeric($resultingIdFromSearchBar) || $resultingIdFromSearchBar <= 0)
{
	echo "Ошибка: ID фильма должен быть больше 0 и в числовом формате.";
	exit;
}
else
{
	$resultingIdFromSearchBar = (int) ($_GET["id"] ?? null);
}

$movies = getMovieId($resultingIdFromSearchBar);

$genres = getAllGenres(); //Получит все жанры и вернёт их в $genres.


echo view("layout", [
	"content" => view("pages/details", ["movies" => $movies, "resultingIdFromSearchBar" => $resultingIdFromSearchBar]),
	"sideBarMenu" => require_once __DIR__ . "/sidebar.php", ["genres" => $genres]
]);
