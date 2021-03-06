<?php
/*******************************************************************************
* instalar/include/actualizar_200-201.inc.php
*
* Ejectula la acci�n de actualizaci�n desde la versi�n entre 2.0.0 y 2.0.1
*

PHPfileNavigator versi�n 2.3.0

Copyright (C) 2004-2006 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior.

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles.

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU.
*******************************************************************************/

defined('OK') or die();

if (count($erros) == 0) {
	$arq_mysql = $PFN_paths['instalar'].'mysql/actualizar_200-201.sql';
	$consultas = file_get_contents($arq_mysql);
	$consultas = str_replace('EXISTS ', 'EXISTS '.$basicas['db']['prefixo'], $consultas);
	$consultas = str_replace('ALTER IGNORE TABLE ', 'ALTER IGNORE TABLE '.$basicas['db']['prefixo'], $consultas);
	$consultas = explode(';', $consultas);

	foreach ((array)$consultas as $q) {
		$q = trim($q);

		if (empty($q)) {
			continue;
		}

		if (!@mysqli_query($con, $q)) {
			$erros['mysql_200-201'] = 17;
			$erros_q['mysql_200-201'][] = array(
				'consulta' => $q,
				'erro' => mysqli_error($con)
			);
		}
	}

	$paso_feito[] = '200-201';
	$feito[] = 'mysql_200-201';
}
?>
