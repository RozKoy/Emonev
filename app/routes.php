<?php

use Slim\App;
use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

	function view (Response $response, $template, $with = []) {
		$cache = __DIR__ . '/../cache';
		$views = __DIR__ . '/../resources/views';

		$blade = (new Blade($views, $cache)) -> make($template, $with);

		$response -> getBody() -> write($blade -> render());

		return $response;
	}

	$app->get('/', function (Request $request, Response $response, $args) {
	    return view($response, 'home');
	});
	$app->get('/dpa', function (Request $request, Response $response, $args) {
	    return view($response, 'dpa.home');
	});
};
