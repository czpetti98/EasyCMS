<?php
	header('content-type:text/html;charset=utf-8');
	//Confirm the app name
	define('APP_NAME','App');
	//2 Determine the application path
//You must add / after App, otherwise the directory path will be confused
	define('APP_PATH','./App/');
	//Define the cache file path
	define('HTML_PATH','./Html/');
	//3.enable debug mode
	define('APP_DEBUG',true);
	//3Application core files (case sensirive, windows do not need to distinguish, but linux does)
	require './ThinkPHP/ThinkPHP.php';

