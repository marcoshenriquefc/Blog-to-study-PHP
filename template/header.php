<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/style.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/post.css">
</head>
<body>
    <header class='test'>
        <div id='logotipo'>
            <a href="<?= $BASE_URL?>">
                <img src="img/logoW.png" alt="Logotipo" alt = 'Logotipo'>
            </a>
        </div>
        <nav id='navHeader'>
            <ul>
                <li><a href="<?= $BASE_URL ?>"> Início </a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="<?=$BASE_URL?>/contato.php">Contato</a></li>
            </ul>
        </nav>

    </header>
