<?php
/**
 * Модель для таблицы котегорий (categories)
 */

/**
 * Получить главные категории с привязками дочерних
 * @return type
 */
function getAllMainCatsWithChildren(){
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0';
    
    $rs = mysql_query($sql);
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $rsChildren = getChildrenForCat($row['id']);
        
        if($rsChildren){
            $row['children'] = $rsChildren;   
        }
        $smartyRs[] = $row;
    }
    return $smartyRs;
}


/**
 * Получить дочернии категории для категории $catId
 * @param type $catId
 */
function getChildrenForCat($catId){
    $sql = " SELECT * 
                FROM categories
                WHERE
                parent_id = $catId";
    
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}

/**
 * Подключить данные категории по id
 * 
 * @param type $catId
 * @return type
 */
function getCatBuId($catId){
    
    $catId = intval($catId);
    
    $sql = "SELECT *
                FROM categories
                WHERE
                id = $catId";
    
    $rs = mysql_query($sql);
    
    return mysql_fetch_assoc($rs);
}