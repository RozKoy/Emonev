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

	// <--- Route --->
	$app->get('/', function (Request $request, Response $response, $args) {
	    return view($response, 'home');
	});

	$app->get('/dpa', function (Request $request, Response $response, $args) {
	    return view($response, 'dpa.home');
	});
		$app->get('/dpa-tambah', function (Request $request, Response $response, $args) {
		    return view($response, 'dpa.addDpa');
		});
		$app->get('/dpa-tambah-sub-dpa', function (Request $request, Response $response, $args) {
		    return view($response, 'dpa.addSubDpa');
		});
		$app->get('/dpa-tambah-rencana-penarikan', function (Request $request, Response $response, $args) {
		    return view($response, 'dpa.addRencanaPenarikan');
		});
		$app->get('/dpa-tambah-tim', function (Request $request, Response $response, $args) {
		    return view($response, 'dpa.addTim');
		});

	$app->get('/realisasi', function (Request $request, Response $response, $args) {
	    return view($response, 'perencanaan.home');
	});
		$app->get('/realisasi-anggaran', function (Request $request, Response $response, $args) {
		    return view($response, 'perencanaan.anggaran');
		});
		$app->get('/realisasi-anggaran-tambah', function (Request $request, Response $response, $args) {
		    return view($response, 'perencanaan.add');
		});

	$app->get('/laporan', function (Request $request, Response $response, $args) {
	    return view($response, 'laporan.home');
	});
		$app->get('/laporan-detail', function (Request $request, Response $response, $args) {
		    return view($response, 'laporan.detail');
		});

	$app->get('/perencanaan-pembangunan', function (Request $request, Response $response, $args) {
	    return view($response, 'pembangunan.home');
	});

	$app->get('/role', function (Request $request, Response $response, $args) {
	    return view($response, 'role.home');
	});
		$app->get('/role-tambah', function (Request $request, Response $response, $args) {
		    return view($response, 'role.add');
		});

	$app->get('/user', function (Request $request, Response $response, $args) {
	    return view($response, 'user.home');
	});
		$app->get('/user-tambah', function (Request $request, Response $response, $args) {
	    return view($response, 'user.add');
	});
};
