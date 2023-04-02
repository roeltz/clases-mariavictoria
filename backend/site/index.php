<?php

require_once __DIR__."/init.php";

$pagina = $_GET["pag"] ?? "home";
$controlador = __DIR__."/controllers/$pagina.php";

$resultado = require $controlador;

$vista = __DIR__."/views/$pagina.php";

require $vista;