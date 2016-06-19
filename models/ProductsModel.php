<?php

/**
 * Модельь для таблицы продукции (products)
 */

/**
 * Получаем последние добавленые товары 
 * 
 * @param type $limit
 * @return type
 */
function getLastProducts($limit = null){
    $sql = "SELECT * 
             FROM products
             ORDER BY id DESC";
    if ($limit){
        $sql .= " LIMIT $limit";
    }
    $rs = mysql_query($sql);
      
    return createSmartyRsArray($rs);
}

/**
 * 
 * @param type $itemId
 * @return type
 */
function getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT *
                FROM products
                WHERE category_id = $itemId";
    
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по ID
 * 
 * @param type $itemId
 * @return type
 */
function getProductsById($itemId){
    
    $itemId = intval($itemId);
    $sql = "SELECT * 
             FROM products 
             WHERE 
             id = $itemId";
    
    $rs = mysql_query($sql);
   
    return mysql_fetch_assoc($rs);    
}
