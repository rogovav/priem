<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use Bitrix\Main\Page\Asset;

?>

<!doctype html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead() ?>
    <title>
        <?php $APPLICATION->ShowTitle() ?>
    </title>
    <?php
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/bootstrap.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
    ?>
</head>
<body>

<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<div class="container">
    <div class="row header p-3">
        <div class="col-6">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/logo_mrsu.png" class="mrsu-logo-img" alt="">
        </div>
        <div class="col-6 justify-content-end d-flex align-items-center p-0">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/icon_eng.gif" class="mr-3" width="20" height="13" alt="">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/eye.png" class="mr-2" width="22" height="13" alt="">
            <button class="navbar-toggler d-lg-none d-md-block" type="button" data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-light main-nav pt-0 pb-0">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-between w-100 mrsu-uppertext">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Университет <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Бакалавриат и специалитет</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">МАГИСТРАТУРА</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">АСПИРАНУТРА</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">СРЕДНЕЕ ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАНИЕ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">ОРДИНАТУРА</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">ИНОСТРАННЫМ ГРАЖДАНАМ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
