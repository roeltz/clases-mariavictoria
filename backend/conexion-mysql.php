<?php

$conn = new mysqli("localhost", "root", "Over9000!!!", "kak20");

if ($conn->connect_errno) {
	echo "Error al conectarse: {$conn->connect_error}";
} else {
	echo "Conectado!";

	$result = $conn->query("select * from users");

	while ($row = $result->fetch_object()) {
		print_r($row);
	}
}