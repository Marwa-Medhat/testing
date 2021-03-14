<?php
	// purpose of this file is to tell our project (and phpunit):
	// 1. which files to include.
	// 2. config variables.
	// 3. autoloading functions.
session_start();
include(__DIR__ . '/functions.php');
define("counterfile" , "counterfile.txt");
spl_autoload_register(function($class) {
	@include(__DIR__ . '/lib/' . $class . '.php');
});


