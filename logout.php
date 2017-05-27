<?php

include_once './config.inc.php';
include_once './uc_client/client.php';

$str = uc_user_synlogout();
echo $str;die;
header('Location:index.php');