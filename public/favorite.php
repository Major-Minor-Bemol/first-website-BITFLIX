<?php
require_once __DIR__ . '/../service/template-service.php';

echo view('layout', [
	'content' => view('pages/favorite', []),
	'sideBarMenu' => require_once __DIR__ . '/sidebar.php',
]);