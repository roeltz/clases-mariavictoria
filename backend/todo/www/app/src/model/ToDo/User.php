<?php

namespace ToDo;

use DateTime;
use Pipa\ORM\Entity;

/**
 * @Collection("users")
 */
class User extends Entity {

	/**
	 * @Id
	 * @Generated
	 */
	public $id;

	/**
	 * @NotNull
	 */
	public $email;

	/**
	 * @NotNull
	 */
	public $password;

	/**
	 * @NotNull
	 */
	public $name;

	/**
	 * @NotNull
	 */
	public $created;

	public static function create($email, $password, $name) {
		$user = new self;
		$user->email = $email;
		$user->password = $password;
		$user->name = $name;
		$user->created = new DateTime();
		$user->save();
		return $user;
	}
}