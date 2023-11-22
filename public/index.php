<?php
require_once __DIR__ . "/../service/template-service.php";
require_once __DIR__ . "/../data-movie/movies.php";
require_once __DIR__ . "/../service/processing-films-by-genre.php";

/**
 * @var array $movies
 * @var array $genres
*/

$resultGenre = (string) $_GET["genre"];


echo view("layout", [
	"content" => view("pages/index", ["movies" => getArrayFilmsByGenre($resultGenre, $movies, $genres)]),
	"sideBarMenu" => require_once __DIR__ . "/sidebar.php",
]);