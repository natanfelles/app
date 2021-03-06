<?php namespace App\Controllers;

use Framework\MVC\Controller;

abstract class BaseController extends Controller
{
	protected function beforeAction(string $action, array $params = [])
	{
		$this->theme->setStyles([
			'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
		]);
		$this->theme->setScripts([
			'https://code.jquery.com/jquery-3.3.1.slim.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
		]);
	}
}
