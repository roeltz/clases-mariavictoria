<?php

use Pipa\Dispatch\Session;
use Pipa\HTTP\Response;
use ToDo\User;

/** @Template("layout") */
class Users {

	/** @View("users-signup-form") */
	function signupForm() {

	}

	/** @View("users-signup-form") */
	function processSignup(Response $res, Session $session, $name, $email, $password, $password2) {
		if ($password !== $password2) {
			return [
				"name"=>$name,
				"email"=>$email,
				"error"=>"Las contraseñas no coinciden"
			];
		}

		$user = User::create($email, $password, $name);
		$session->setPrincipal($user);
		$res->redirectLocal("tasks");
	}
}