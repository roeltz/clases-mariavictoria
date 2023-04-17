<?php

namespace ToDo;

use DateTime;
use Pipa\ORM\Entity;

/**
 * @Collection("tasks")
 */
class Task extends Entity {

	/**
	 * @Id
	 * @Generated
	 */
	public $id;

	/**
	 * @NotNull
	 */
	public $description;

	/**
	 * @NotNull
	 */
	public $created;

	public $deadline;

	public $completed;

	/**
	 * @NotNull
	 */
	public $priority = 0;

	/**
	 * @NotNull
	 * @One(class = "User")
	 */
	public $user;

	public static function create(User $user, $description, $priority, DateTime $deadline = null) {
		$task = new self;
		$task->user = $user;
		$task->description = $description;
		$task->priority = $priority;
		$task->deadline = $deadline;
		$task->created = new DateTime();
		$task->save();
		return $task;
	}
}