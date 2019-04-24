<?php
    use Bitrix\Main\Page\Asset;
?>

</div>

</body>

<?php
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/jquery-3.4.0.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/popper.min.js');
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/bootstrap.min.js');
?>
</html>
