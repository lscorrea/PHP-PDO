<?php 
/**
 * @author Leandro S. Correa
 * @version 1.2
 * @example instanciar a class magica ao carregar o arquivo.
 * /

function __autoload($Class) {
	if (file_exists(PATHCLASS . "/{$Class}.class.php")):
		require_once PATHCLASS . "/{$Class}.class.php";
	else:
		die("Erro ao Carregar a Classe {$Class}.");
	endif;
}

 ?>