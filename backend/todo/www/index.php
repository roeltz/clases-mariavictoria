<?php

require_once __DIR__."/app/vendor/autoload.php";

use Pipa\Dispatch\ExpressionRouter;
use Pipa\Dispatch\ViewSelector;
use Pipa\HTTP\HTTPContext;
use Pipa\HTTP\View\JSONView;
use Pipa\HTTP\View\PHPView;
use Pipa\HTTP\View\PartialsFilter;

HTTPContext::hook("http-error", "security", "json");

HTTPContext::get()->dispatch(
	new ExpressionRouter([
		"GET	/"=>"Main::index",
		"GET	signup"=>"Users::signupForm",
		"POST	signup"=>"Users::processSignup",
		"GET	tasks"=>"Tasks::indexView",

		// API
		"GET	api/tasks"=>"Tasks::get",
		"POST	api/tasks"=>"Tasks::create"
	]),
	new ViewSelector([
		"accept json"=>JSONView::class,
		"option view-engine json"=>JSONView::class,
		"default"=>new PHPView(new PartialsFilter())
	])
);
