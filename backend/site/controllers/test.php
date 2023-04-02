<?php

$test = $db->select(
	"users",
	["name", "status"],
	[
		"role = 'admin'"
	],
	["name"=>"asc", "id"=>"desc"],
	1
);