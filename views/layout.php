<?php
/**
* @var array $content
 * @var array $sideBar
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitflix</title>
    <link rel="stylesheet" href="css.css"
	</head>
<body class="body">
    <div class="wrapper">
        <header class="sidebar">
            <a href="/" class="logo-link">
                <img src="img/logo.svg" alt="logo">
            </a>
            <nav class="menu">
                <ul>
                    <li class="menu-item"><a href="/" class="menu-link" title="Главная"><span class="span-menu">Главная</span></a></li>
                    <li class="menu-item"><a href="#" class="menu-link" title="Избранное"><span class="span-menu">Избранное</span></a></li>
					<?= $sideBar ?>
                </ul>
            </nav>
        </header>
        <section class="toolbar">
            <div class="left-container-in-toolbar">
                <img src="img/search.svg" alt="search" class="img-search">
                <input class="input-search" type="text" placeholder="Поиск по каталогу...">
                <div class="search-button-container">
                    <button class="search-button">Искать</button>
                </div>
                <div class="add-movie-button-container">
					<button class="add-movie-button"><a href="#" class="add-movie-button-link">Добавить Фильм</a></button>
                </div>
            </div>

        </section>
        <section class="content">
			<div class="container-for-movie">
				<?= $content ?>
			</div>
		</section>
	</div>
</body>
</html>