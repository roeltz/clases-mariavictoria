<?php

class DB {

	private $conn;

	function __construct($host, $user, $pw, $db) {
		$this->conn = new mysqli($host, $user, $pw, $db);
	}

	function escape($valor) {
		return "'".$this->conn->escape_string($valor)."'";
	}

	function query($sql) {
		echo "SQL: $sql";
		try {
			$result = $this->conn->query($sql);
			return $result->fetch_all(MYSQLI_ASSOC);
		} catch (Exception $ex) {
			echo "Error al ejecutar $sql: {$ex->getMessage()}";
		}
	}

	function querySingle($sql) {
		$result = $this->query($sql);
		return $result[0];
	}

	function select($table, $fields, $where = null, $order = null, $limit = null) {
		$fields = join(", ", $fields);

		$sql = "select $fields from $table";

		if ($where) {
			$where = join(" AND ", $where);
			$sql = "$sql where $where";
		}

		if ($order) {
			$orderExpr = [];

			foreach ($order as $campo=>$ascdesc) {
				$orderExpr[] = "$campo $ascdesc";
			}

			$orderExpr = join(", ", $orderExpr);

			$sql = "$sql order by $orderExpr";
		}

		if ($limit) {
			$sql = "$sql limit $limit";
		}

		return $this->query($sql);
	}
}
