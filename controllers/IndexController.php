<?php
/**
 * Main page Controller
 *
 */
function testAction() {
    echo 'IndexController.php > testAction';
}

/**
 * Главная страница
 * @param $smarty
 */
function indexAction($smarty) {
    $smarty->assign('pageTitle', 'Главная страница');

    loadTemplate($smarty, 'index');
}