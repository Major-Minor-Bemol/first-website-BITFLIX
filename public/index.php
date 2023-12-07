<?php
require_once __DIR__ . "/../service/template-service.php";
require_once __DIR__ . "/../working-with-database/function-get-genres.php";
require_once __DIR__ . "/../working-with-database/function-get-movies.php";

$resultGenre = (string) ($_GET["genre"]  ?? null);

$genres = getAllGenres(); //Получит все жанры и вернёт их в $genres.

$movies = getListMovies($resultGenre, $genres); //Получит фильмы заданного жанра либо все фильмы и вернёт их в $movies.

echo view("layout", [
	"content" => view("pages/index", ["movies" => $movies]),
	"sideBarMenu" => require_once __DIR__ . "/sidebar.php",
]);