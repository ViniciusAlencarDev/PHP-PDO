<?php

include_once("config/config.php");
$pastaPaginas = "paginas/";

$paginaInclude = "";

if(isset($_GET['url'])) {
	$url = $_GET['url'];
	if(file_exists($pastaPaginas.$url.".php"))
		$paginaInclude = $url;
	else
		$paginaInclude = "pagina-nao-encontrada";
} else
	$paginaInclude = "home";

include_once($paginaInclude.$pastaPaginas.".php");
	