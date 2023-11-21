<?php
require_once __DIR__ . '/../service/template-service.php';
require_once __DIR__ . '/../data-movie/movies.php';

/**
 * @var array $movies
 * @var array $genres
*/


echo view('layout', [
	'content' => view('pages/details', ['movies' => $movies,]),
	'sideBarMenu' => require_once __DIR__ . '/sidebar.php', ['genres' => $genres]
]);
