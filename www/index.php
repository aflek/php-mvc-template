<?php

require_once '../config/config.php'; //Настройки
require_once '../library/mainFunctions.php';//Основные функции

//Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какоой функцией в контроллере будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';







loadPage($controllerName,$actionName);