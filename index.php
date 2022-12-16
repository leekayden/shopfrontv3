<?php
$env = "dev";
// Version
define('VERSION', '4.0.1.1');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit();
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Framework
require_once(DIR_SYSTEM . 'framework.php');

// // Hot Reload
// require "./HotReloader.php";
// $reloader = new HotReloader();
// $reloader->init();