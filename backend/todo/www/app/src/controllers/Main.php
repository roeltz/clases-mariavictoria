<?php

use Pipa\Dispatch\Session;
use Pipa\HTTP\Response;

class Main {

	/** @View("home") @Template("layout") */
	function index(Session $session, Response $res) {
		if ($session->getPrincipal()) {
			return $res->redirectLocal("tasks");
		}
	}
}
