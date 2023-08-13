<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
<header>
<a href="<?= $BASE_URL ?>" id="logo"><img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar"></a>
    <nav>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>"class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>
        </ul>
    </nav>
</header>