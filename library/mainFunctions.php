<?php

/**
 * Формирование запрашываемой страницы
 * 
 * @param type $controllerName
 * @param type $actionName
 */


/**
 * Debug function
 * 
 * @param type $value
 * @param type $die
 */
function d ($value = null, $die = 1){
    echo 'Debug: <br /> <pre>';
    print_r($value);
    echo '</pre>';
    
    if ($die) die;
}

/**
 * 
 * @param type $smarty
 * @param type $controllerName
 * @param type $actionName
 */
function loadPage ($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * 
 * @param type $smarty
 * @param type $templateName
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}


/**
 * Преобразование результата работы функции выборки в асоциативный массив
 * 
 * @param type $rs набор строк - результат работы SELECT
 * @return boolean
 */
function createSmartyRsArray($rs){
    if (! $rs) return false;   
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

