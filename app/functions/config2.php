<?php

$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
$fo = str_replace("index2.php", "", $_SERVER['SCRIPT_NAME']);
$base_url = $http . $_SERVER['SERVER_NAME'] . "" . $fo;
