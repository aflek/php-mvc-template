<?php
/**
 * Main functions
 */

/**
 * Формирование запрашиваемой страницы
 *
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */
    function loadPage($controllerName, $actionName = 'index'){
        require_once PathPrefix . $controllerName . PathPostfix;

        $function = $actionName . 'Action';
        $function();
    }