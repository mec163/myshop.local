<?php

include_once '../models/CategoriesModel.php';
include_once '../models/UserModel.php';

function registerAction(){
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);
    
    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;
    
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);
   
    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

    if(! $resData && checkUserEmail($email)){
        $resData['success'] = false;
        $resData['message'] ="Пользователь с таким email ('$email') уже зарегистрирован";
    }

if(!$resData){
$pwdMD5 = md5($pwd);
   
    $userData = registerNewUser ($email, $pwdMD5, $name, $phone, $adress);
    
if ($userData['success']){
    $resData['message'] = 'Пользователь успешно зарегисрирован';
    $resData['success'] = 1;;
    
    $userData = $userData[0];
    $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
    $resData['userEmail'] = $email;
    
    $_SESSION['user'] = $userData;
    $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка регистрации';
    }
    
}
echo json_encode($resData);
}