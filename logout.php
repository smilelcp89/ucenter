<?php

include_once './config.inc.php';
include_once './uc_client/client.php';

$str = uc_user_synlogout();
echo $str;
session_destroy();

?>

<script>
	setTimeout(function () {
		window.location.href = 'index.php';
	},1000);
</script>

//header('Location:index.php');