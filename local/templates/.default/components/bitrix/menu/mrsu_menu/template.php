<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (empty($arResult['ALL_ITEMS'])) die(); ?>

<ul class="navbar-nav d-flex justify-content-between w-100 mrsu-uppertext">
    <?php foreach ($arResult['ALL_ITEMS'] as $arItem) : ?>
        <li class="nav-item active">
            <a class="nav-link" href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>
