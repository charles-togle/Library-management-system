<?php
session_start();

define('__ROOT__', dirname(__DIR__));

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','MawmawLibrary');

require_once __ROOT__ .'/includes/setup_database.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Remove after completing project
error_reporting(E_ALL);
ini_set('display_errors', 1);