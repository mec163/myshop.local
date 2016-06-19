<?php

/**
 * Регистрация нового пользователя
 * 
 * @param type $email
 * @param type $pwd
 * @param type $name
 * @param type $phone
 * @param type $adress
 */
function registerNewUser($email, $pwd, $name, $phone, $adress){
    
    $email = htmlspecialchars(mysql_real_escape_string($email));
    $name = htmlspecialchars(mysql_real_escape_string($name));
    $phone = htmlspecialchars(mysql_real_escape_string($phone));
    $adress = htmlspecialchars(mysql_real_escape_string($adress));
    
    $sql = "INSERT INTO"
            . "users ('email', 'pwd', 'name', 'phone', 'adress')"
            . "VALUES ('($email)', '($pwdMD5)', '($name)', '($phone)', '($adress)')";
    $rs = mysql_query($sql);
    
    if($rs){
        $sql = "SELECT * FROM users"
                . "WHERE ('email' = '($email)' and 'pwd' = '($pwdMD5)')"
                . "LIMIT 1";
        
        $rs = mysql_query($sql);
        $rs = createSmartyRsArray($rs);
        
    if(isset($rs[0])){
        $rs['success'] = 1;
    }else {
        $rs['success'] = 0;
    }
    }else {
        $rs['success'] = 0;
    }
    
    return $rs;
}


/**
 * 
 * @param type $email
 * @param type $pwd1
 * @param type $pwd2
 * @return string
 */
function checkRegisterParams($email, $pwd1, $pwd2){
    $res = null;
    
    if(!$email){
        $res['success'] = false;
        $res['success'] = 'Введите email';
    }
    if(!$pwd1){
        $res['success'] = false;
        $res['success'] = 'Введите пароль';
    }
    if(!$pwd2){
        $res['success'] = false;
        $res['success'] = 'Введите повтор пароля';
    }
    if($pwd1 != $pwd2){
        $res['success'] = false;
        $res['success'] = 'Пароли не совпадают';
    }
    return $res;
}


function checkUserEmail(){
    $email = mysql_real_escape_string($email);
    $sql = "SELECT id  ROM users WHERE email = '($email)'";
    
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
    
    return $rs;
}



