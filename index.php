<?php

header("Content-type: text/html; charset=utf-8");
session_start();
if(empty($_SESSION['uid'])){
	echo '请先登录：<a href="login.php">登录</a>';
}else{
	echo $_SESSION['username'].'，您好！';
}