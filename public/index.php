<?php
require_once __DIR__ . '/../service/template-service.php';
require_once __DIR__ . '/../data-movie/movies.php';

/**
 * @var array $movies
 * @var array $genres
*/

echo view('layout', [
	'content' => view('pages/index', ['movies' => $movies]),
	'sideBar' => view('pages/sidebar', ['genres' => $genres]),
]);
?>



