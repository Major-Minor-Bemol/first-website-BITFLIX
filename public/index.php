<?php
require_once __DIR__ . "/../service/template-service.php";
require_once __DIR__ . "/../service/processing-films-by-genre.php";
require_once __DIR__ . "/../working-with-database/function-get-genres.php";
require_once __DIR__ . "/../working-with-database/function-get-movies.php";

$resultGenre = (string) $_GET["genre"];

$genres = getAllGenres(); //Получит все жанры и вернёт их в $genres.

$movies = getListMovies(); //Получит все фильмы и вернёт их в $movies.
// var_dump($movies) /n;
// foreach ($movies as $movie)
// {
// 	var_dump($movie["genres"]);
// }
// die;



echo view("layout", [
	"content" => view("pages/index", ["movies" => getArrayFilmsByGenre($resultGenre, $movies, $genres)]),
	"sideBarMenu" => require_once __DIR__ . "/sidebar.php",
]);