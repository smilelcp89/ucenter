<?php

include_once './config.inc.php';
include_once './uc_client/client.php';
//$result = uc_user_login('liang', '123456');
//var_dump($result);die;
list($uid, $username, $password) = uc_user_login('liang', '123456'); //进入ucenter验证
if ($uid) {
    session_start();
    $_SESSION['uid']      = $uid;
    $_SESSION['username'] = $username;
    $ucsynlogin           = uc_user_synlogin($uid); //同步登录
    echo $ucsynlogin; //因为是ajax 要echo
} else {
    echo '登录失败';
}
