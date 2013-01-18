<?php

# site specific values

$site_name = 'Itaco';
$site_root = 'http://www.itaco-ru.com';
$site_keywords = array($site_name, $site_root, 'itaco-ru');
$site_author = 'sbierti';

$scrpt = $_SERVER['SCRIPT_NAME'];

$page = substr($scrpt, 1);
$part = explode('.', $page);
$pageName = $part[0];

# it18n variables
$lang = 'ru'; #default value

$qstr = explode('=', $_SERVER['QUERY_STRING']);

if($qstr[1]=='ru' || $qstr[1]=='it'){
	$lang = $qstr[1];
}

include 'languages/'.$lang.'/lang.php';

?>