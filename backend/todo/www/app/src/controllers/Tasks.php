<?php

use Pipa\Dispatch\Session;
use ToDo\Task;

class Tasks {

	/** @Template("layout") @View("todos-index") */
	function indexView() {}

	/** @Secured @ViewEngine("json") */
	function create(Session $session, $description, $priority, DateTime $deadline = null) {
		$user = $session->getPrincipal();
		$task = Task::create($user, $description, $priority, $deadline);
		return $task;
	}

	/** @Secured @ViewEngine("json") */
	function get(Session $session) {
		$user = $session->getPrincipal();
		$criteria = Task::getCriteria();

		$criteria->eq("user", $user);

		return $criteria->queryAll();
	}
}