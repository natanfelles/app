<?php
if (is_file(__DIR__ . '/vendor/autoload.php')) {
	require __DIR__ . '/vendor/autoload.php';
}
require __DIR__ . '/App.php';
App::setConfig('configs', [
	__DIR__ . '/configs.php',
]);
App::run();
