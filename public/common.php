<?php

session_start();

$start = microtime();

$db_queries = 0;

define('MAIN_SITE_URL', trim(SITE_URL, '/') . '/');

define('MAIN_SCRIPT_PATH', (SCRIPT_PATH ? trim(SCRIPT_PATH, '/') . '/' : ''));

define('VIEW_PATH', (FRIENDLY_URLS ? '' : 'view.php?id='));

define('VIEW_URL', 'http://' . MAIN_SITE_URL . MAIN_SCRIPT_PATH . VIEW_PATH);

define('IMAGES_URL', 'http://' . (FRIENDLY_URLS ? 'i.' : '') . MAIN_SITE_URL . (FRIENDLY_URLS ? '' : MAIN_SCRIPT_PATH . 'images/'));

define('SMALL_IMAGES_URL', 'http://' . (FRIENDLY_URLS ? 'i.' : '') . MAIN_SITE_URL . (FRIENDLY_URLS ? '' : MAIN_SCRIPT_PATH . 'small/'));

define('IN_SCRIPT', true);

function exit_message($message)
{
	require('inc/header.php');
	require('inc/message.php');
	require('inc/footer.php');
	exit;
}

