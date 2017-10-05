<?php
/**
 * Main functions
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 * @param $smarty - экземпляр класса шаблонизатора (из config.php)
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    require_once PATH_PREFIX . $controllerName . PATH_POSTFIX;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * @param object $smarty объект шаблонизатора
 * @param string $tamplateName название файла шаблона
 */
function loadTemplate($smarty, $tamplateName){
    $smarty->display($tamplateName . TEMPLATE_POSTFIX);
}
