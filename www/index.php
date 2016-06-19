<?php

session_start();
// если в сессии нет массива корзины то создаем его
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';    // Инициализация настроек
include_once '../config/db.php';       // Инициализация подключения к БД
include_once '../library/mainFunctions.php';    //Основые функции

//определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какой функцией будем работать
$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);