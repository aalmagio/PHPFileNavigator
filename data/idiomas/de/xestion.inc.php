<?php
/****************************************************************************
* data/idiomas/de/xestion.inc.php
*
* Textos para el idioma German
*

PHPfileNavigator versi�n 2.2.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

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

return array(
	'xestion' => 'Administration',
	'Xmenu_principal' => 'Hauptmen&uuml;',
	'Xcrear_usuario' => 'User erstellen',
	'Xcrear_raiz' => 'Stammverzeichnis erstellen',
	'Xraices' => 'Stammverzeichnisse',
	'Xusuarios' => 'User',
	'Xmodificar' => '&Auml;ndern',
	'Xnome' => 'Name',
	'Xestado' => 'Status',
	'Xcambiar' => '&Auml;ndern',
	'Xmodi_raiz' => 'Stammverzeichnis &auml;ndern',
	'Xusuarios_relacionados' => 'Verwandte User',
	'Xpath' => 'Pfad',
	'Xraiz_web' => 'Webstammverzeichnis',
	'Xhost' => 'Host',
	'Xconf' => 'Konfiguration',
	'Xdatos_principales' => 'Hauptdaten',
	'Xmodi_usuario' => 'User &auml;ndern',
	'Xusuario' => 'User',
	'Xcontrasinal' => 'Passwort',
	'Xrep_contrasinal' => 'Passwort wiederholen',
	'Xadministrador' => 'Administrator',
	'Xraices_relacionadas' => 'Verwandte Stammverzeichnisse',
	'Xeliminar_usuario' => 'Sind Sie sicher, dass Sie diesen User l&ouml;schen m&ouml;chten?',
	'Xeliminar_raiz' => 'Sind Sie sicher, dass Sie dieses Stammverzeichnis l&ouml;schen m&ouml;chten? Durch l&ouml;schen dieses Ordners wird dieser nur im PHPfileNavigator aus der Liste entfernt und nicht physisch gel&ouml;scht (von der Festplatte).',
	'Xreindexar' => 'Neuindizierung',
	'Xreindexar_info' => 'Dieser Prozess erm&ouml;glicht es alle Daten neu zu indizieren. Es wird empfohlen gelegentlich eine Neuindizierung durchzuf&uuml;hren um fehlerhafte Suchergebnisse zu vermeiden',
	'Xconfirmar_reindexar' => 'M&ouml;chten Sie wirklich alle Inhalte in diesem Stammverzeichnis neu indizieren?<br />(Dieser Prozess kann einige Minuten dauern, bitte warten)',
	'Xagarde_reindexar' => 'Dieser Prozess kann einige Zeit dauern, bitte warten',
	'Xok_reindexar' => 'Update erfolgreich abgeschlossen. Gesamtanzahl aller neu indizierten Dateien:',
	'Xpeso_max' => 'Maximale Gr&ouml;sse',
	'Xpeso_actual' => 'Aktuelle Gr&ouml;sse',
	'Xerros' => array(
		'1' => 'Felder mit <b>*</b> sind verpflichtend.',
		'2' => 'Fehler beim Speichern des Eintrags, bitte &uuml;berpr&uuml;fen Sie das MySQL Fehlerprotokoll.',
		'3' => 'Das Stammverzeichnis von dem aus auf PHPfileNavigator kann nicht deaktiviert werden.',
		'4' => 'Der Ordner data/info besitzt keine Schreibrechte. Das Speicherlimit wird nicht gespeichert.',
		'5' => 'Das Stammverzeichnis von dem aus auf PHPfileNavigator kann nicht deaktiviert werden.',
		'6' => 'Fehler beim L&ouml;schen eines Eintrages, bitte &uuml;berpr&uuml;fen Sie das MySQL Fehlerprotokoll.',
		'7' => 'Die verbindung mit dem aktuellen User konnte nicht gel&ouml;scht werden weil der Zugriff auf PHPfileNavigator &uuml;ber dieses Stammverzeichnis erfolgt wurde.',
		'8' => 'User existiert bereits',
		'9' => 'Die Verbindung mit dem Stammverzeichnis, von welchem aus auf PHPfileNavigator zugegriffen wurde, konnte nicht gel&ouml;scht werden.',
		'10' => 'Der User welcher auf PHPfileNavigator zugreift kann nicht deaktiviert werden.',
		'11' => 'Das Passwort stimmt nicht mit dem wiederholten Passwort &uuml;berein.',
		'12' => 'Die Administratoroption kann f&uuml;r diesen User, welcher zum einloggen in PHPfileNavigator verwendet wurde, kann nicht entfernt werden.',
		'13' => 'Der Username mit dem Sie angemeldet sind bei PHPfileNavigator kann nicht entfernt werden.',
		'14' => 'Die User-Gruppe welche f&uuml;r den Zugriff auf PHPfileNavigator verwendet wird kann nicht deaktiviert werden.',
		'15' => 'Eine Gruppe mit diesem Namen existiert bereits.',
		'16' => 'Der User-Gruppe mit dem Sie angemeldet sind bei PHPfileNavigator kann nicht entfernt werden.',
		'17' => 'Diese Gruppe kann nicht gel&ouml;scht werden da noch Verbindungen zu einem oder mehr Usern besteht.',
		'18' => 'Die gew&auml;hlte Konfiguration existiert nicht.',
		'19' => 'Die gew&auml;hlte Konfiguration besitzt keine Schreibrechte.',
		'20' => 'Sie m&uuml;ssen einen neuen Namen f&uuml;r die neue Konfigurationsdatei angeben.',
		'21' => 'Eine Konfigurationsdatei mit diesem Namen existiert bereits.',
		'22' => 'Eine Konfiguration mit diesem Namen existiert bereits.',
		'23' => 'Fehler beim Duplizieren der Konfiguration. Bitte pr&uuml;fen Sie das MySQL Fehlerprotokoll.',
		'24' => 'Fehler beim Duplizieren der Konfiguration. Bitte pr&uuml;fen Sie die Zugriffsrechte des Ordners /data/conf.',
		'25' => 'Die aktuelle Datei besitzt keine Zugriffsrechte um gel&ouml;scht zu werden.',
		'26' => 'Die Konfiguration kann nicht gel&ouml;scht werden, weil diese noch Verbindungen zu einem oder mehreren Stammverzeichnissen oder Gruppen aufweist. Bitte entfernen Sie diese Verbindung zuerst.',
		'27' => 'Die Konfiguration kann nicht gel&ouml;scht werden, weil diese die Standarteinstellung einer oder mehrerer Gruppen ist. Bitte entfernen Sie diese Verbindung zuerst.',
		'28' => 'Fehler beim &auml;ndern der Konfiguration.',
		'29' => 'MySQL Protokolldateien existieren nicht oder sind leer.',
		'30' => 'Die Aktionsprotokolldateien existieren nicht oder sind leer.',
		'31' => 'Der Ordner "PATH" existiert nicht.',
		'32' => 'Die gew&auml;hlte Quellsprache ist in dieser Installation nicht verf&uuml;gbar.',
		'33' => 'Der Ordner date/languages, der Ordner f&uuml;r die Zielsprache oder die gew&auml;hlte Datei welche &uuml;bersetzt werden soll, hat keine Schreibberechtigung. Bitte &uuml;berpr&uuml;fen Sie die Zugriffsrechte und erlauben Sie dem User Schreibrechte auf dem Server.',
		'34' => 'Die gew&auml;hlten Sprachdateien konnte nicht geschrieben werden. Bitte &uuml;berpr&uuml;fen Sie die Zugriffsrechte und erlauben Sie dem User Schreibrechte auf dem Server.',
		'35' => 'Keine g&uuml;ltige Zahl f&uuml;r das Gr&ouml;ssenlimit.',
		'36' => 'Das gew&auml;hlte Stammverzeichnis, welches neu indiziert werden soll, existiert nicht.',
	),
	'Xok' => array(
		'1' => 'Die Registrierung wurde erfolgreich gespeichert.',
		'2' => 'Die Registrierung wurde erfolgreich gel&ouml;scht.',
		'3' => 'Konfiguration erfolgreich dupliziert.',
		'4' => 'Konfiguration erfolgreich gel&ouml;scht.',
		'5' => 'Konfiguration erfolgreich ge&auml;ndert.',
		'6' => '&Uuml;bersetzung erfolgreich gespeichert.',
		'7' => 'Die Protokolldateien wurden erfolgreich gel&ouml;scht.',
	),
	'Xaxuda' => array(
		'raiz_nome' => 'Gew&auml;hlter Stammverzeichnisname f&uuml;r Listeneintrag. <strong>z.B.: Hauptordner</strong>',
		'raiz_path' => 'Absoluter Pfad vom Serverstammverzeichnis. <strong>z.B.: /var/www/html/web/docs/</strong>',
		'raiz_web' => 'Internetpfad vom Domainstammverzeichnis. <strong>f.e.: /docs/</strong>',
		'raiz_host' => 'Domainname: <strong>z.B.: www.domain.com</strong>',
		'raiz_peso_max' => 'Maximaler Speicherplatz. <strong>f.e.: 50 Megas</strong>',
		'raiz_peso_actual' => 'Aktueller Speicherbedarf. Nur bei aktiv bei gesetztem Maximalem Speicherbedarf des Stammverzeichnisses.',
		'raiz_estado' => 'Aktiviert oder Deaktiviert alle Zugriffm&ouml;glichkeiten f&uuml;r dieses Stammverzeichnis.',
		'usuario_nome' => 'Gew&auml;hlter Username. <strong>z.B.: Gastuser</strong>',
		'usuario_usuario' => 'Username f&uuml;r Anmeldung. <strong>z.B.: gast</strong>',
		'usuario_contrasinal' => 'PHPfileNavigator Zugriffspasswort. <strong>z.B.: n8DMe4whR6</strong>',
		'usuario_rep_contrasinal' => 'Passwort wiederholen. <strong>f.e.: n8DMe4whR6</strong>',
		'usuario_email' => 'E-Mailadresse an welche zuk&uuml;nftig Informationen oder Passwort&auml;nderungen gesendet werden sollen.',
		'usuario_max_descargas' => 'Maximaler erlaubter Datentransfer pro Monat in Megabyte. (Nur Downloads vom PHPfileNavigator). <strong>z.B.: 500</strong>',
		'usuario_actual_descargas' => 'Datentransfer dieses Monats.',
		'usuario_grupo' => 'Zu eine User zugeordnete Gruppe. <strong>z.B.: G&auml;ste</strong>',
		'usuario_administrador' => 'Zeigt an ob der User volle Zugriffsrechte auf PHPfileNavigator besitzt. Aktivieren Sie diese Option nicht f&uuml;r mehr als einen User. Diese Option erm&ouml;glicht vollst&auml;ndige Kontrolle &uuml;ber die Anwendung.',
		'usuario_estado' => 'Aktiviert oder Deaktiviert den Benutzerzugriff auf PHPfileNavigator.',
		'grupo_nome' => 'Gew&auml;hlter Gruppenname. <strong>z.B.: G&auml;ste</strong>',
		'grupo_conf' => 'Standardeinstellung f&uuml;r diese Gruppe. F&uuml;r jedes eingerichtete Stammverzeichnis k&ouml;nnen verschiedene Gruppeneinstellungen getroffen werden.',
		'grupo_estado' => 'Aktivieren oder Deaktivieren alle User dieser Gruppe welche Zugriff auf PHPfileNavigator haben.',
		'borrar_inc' => 'L&ouml;schen aller zus&auml;tzlichen Informationsdateien in diesem Stammverzeichnis. L&ouml;schen Sie keine Dateien, welche von Usern upgeloadet wurden.',
		'borrar_imx' => 'L&ouml;schen aller Vorschaubilder in diesem Stammverzeichnis. L&ouml;schen Sie keine Bilder, welche von Usern upgeloadet wurden.',
		'revisar_peso_actual' => 'Erlaubt die &Uuml;berpr&uuml;fung und Aktualisierung dieser Stammverzeichnisgr&ouml;sse.',
		'cambiar_datos' => 'Erlaubt Usern Passw&ouml;rter wieder herzustellen oder pers&ouml;nliche Daten zu &auml;ndern.',
	),
	'Xinformes' => 'Berichte',
	'Xtit_mysql' => 'MySQL',
	'Xdesc_mysql' => 'MySQL Abfragefehler',
	'Xtit_accions' => 'Aktionen',
	'Xdesc_accions' => 'Aktionsprotokoll f&uuml;r Dateien und Ordner',
	'Xtit_accesos' => 'Zugriff',
	'Xdesc_accesos' => 'Anwendungszugriff-, -ausstiegs- und -fehlzugriffsprotokolle.',
	'Xtit_uso_disco' => 'Verbrauchter Speicherplatz',
	'Xdesc_uso_disco' => 'Erlaubt das Erstellen von Berichten von Speicherverbrauch f&uuml;r alle User mit Speicherlimit.',
	'Xtit_ancho_banda' => 'Bandbreite',
	'Xdesc_ancho_banda' => 'Erlaubt User die Anzeige von verbrauchter Bandbreite.',
	'Xescolle_informe' => 'W&auml;hlen Sie einen Bericht',
	'Xamosar_lineas' => 'Anzahl der Zeilen',
	'Xbuscar_texto' => 'Suchtext',
	'Xamosar_entradas' => 'Korrekte Anmeldung',
	'Xamosar_saidas' => 'Ausstiege',
	'Xamosar_erros' => 'Fehlversuche',
	'Xamosar_sen_datos' => 'Sitzung abgelaufen (ohne Daten)',
	'Xbuscar_usuario' => 'Suche Benutzer',
	'Xamosar_copiar_dir' => 'Ordner kopieren',
	'Xamosar_copiar_arq' => 'Datei kopieren',
	'Xamosar_mover_dir' => 'Ordern verschieben',
	'Xamosar_mover_arq' => 'Datei verschieben',
	'Xamosar_eliminar_arq' => 'Datei l&ouml;schen',
	'Xamosar_eliminar_dir' => 'Ordner l&ouml;schen',
	'Xamosar_crear_dir' => 'Ordner erstellen',
	'Xamosar_subir_arq' => 'Datei hochladen',
	'Xamosar_renomear' => 'Umbenennen',
	'Xamosar_enlazar_arq' => 'Datei verlinken',
	'Xamosar_editar' => '&Auml;ndern',
	'Xamosar_subir_url' => 'URL hochladen',
	'Xamosar_extraer' => 'Komprimierte Datei entpacken',
	'Xcol_data' => 'Datum',
	'Xcol_arquivo' => 'Datei',
	'Xcol_linha' => 'Zeile',
	'Xcol_erro' => 'Fehler',
	'Xcol_raiz' => 'Stammverzeichnis',
	'Xcol_usuario' => 'User',
	'Xcol_accion' => 'Aktion',
	'Xcol_login' => 'User',
	'Xcol_ip' => 'IP',
	'Xcol_estado' => 'Status',
	'Xcol_donde' => 'Wo',
	'Xcol_sesion' => 'Sitzungs-ID',
	'Xcol_id' => 'ID',
	'Xcol_nome' => 'Name',
	'Xcol_peso_actual' => 'Aktueller Speicherbedarf',
	'Xcol_peso_limite' => 'Maximaler Speicherbedarf',
	'Xcol_porcent_libre' => 'Prozent freier Speicher',
	'Xcol_ancho_banda_actual' => 'Aktuelle Bandbreite',
	'Xcol_ancho_banda_limite' => 'Maximale Bandbreite',
	'Xarq_conf' => 'Konfigurationsdateien',
	'Xdetalle' => 'Detail',
	'Xconf_ver' => 'Konfigurationsdetail',
	'Xpeso_exacto' => 'Exakte Gr&ouml;sse',
	'Xmodificado' => '&Auml;ndern',
	'Xuid' => 'User-ID',
	'Xgid' => 'Gruppen-ID',
	'Xeliminar_conf' => 'Sind Sie sicher, dass Sie diese Konfigurationsdatei l&ouml;schen m&ouml;chten?',
	'Xconf_editar' => 'Einstellung &auml;ndern.',
	'Xconf_editar_erro' => 'Die &Auml;nderung beinhaltet einige Fehler',
	'Xcomprobar_sintaxis' => 'Syntax &uuml;berpr&uuml;fen',
	'Xintro_sintaxis' => 'Dies ist ein Konfigurationsprozess um die Datei-Syntax zu &uuml;berpr&uuml;fen.<br />Beim Auftreten eines Fehler muss in jedem Fall das Problem behoben werden.',
	'Xsintaxis_ok' => 'Die Konfigurationsdatei beinhaltet eine korrekte Syntax.',
	'Xeliminar_ok' => 'Die Konfigurationsdatei wurde erfolgreich gel&ouml;scht.',
	'Xconf_eliminar' => 'Einstellung l&ouml;schen',
	'Xintro_eliminar' => 'Die L&ouml;schung dieser Konfigurationsdatei ergab folgendes Resultat:',
	'Xduplicar' => 'Davon neu',
	'Xnovo_nome' => 'Neuer Konfigurationsdateiname',
	'Xgrupos_relacionados' => 'Verwandte Gruppen',
	'Xconfiguracions' => 'Einstellungen',
	'Xconfiguracion' => 'Einstellung',
	'Xgrupos' => 'Gruppen',
	'Xgrupo' => 'Gruppe',
	'Xmarca_desmarca' => 'Alles ausw&auml;hlen/abw&auml;hlen',
	'Xconf_defecto' => 'Standardeinstellung',
	'Xcrear_grupo' => 'Gruppe erstellen',
	'Xemail' => 'E-Mail',
	'Xmodi_grupo' => 'Gruppe &auml;ndern',
	'Xeliminar_grupo' => 'M&ouml;chten Sie diese Gruppe wirklich l&ouml;schen?',
	'Xescolle_raiz' => 'W&auml;hlen Sie ein Stammverzeichnis',
	'Xm_crear_raiz' => 'Stammverzeichnis erstellen',
	'Xm_crear_usuario' => 'User erstellen',
	'Xm_crear_grupo' => 'Gruppe erstellen',
	'Xm_indexador' => 'Datenindizierung',
	'Xm_informes' => 'Berichte',
	'Xm_traduccion' => '&Uuml;bersetzung',
	'Xen_megas' => 'in Megabyte',
	'Xmax_descargas_mes' => 'Max. montalicher Download',
	'Xpeso_actual_off' => 'Max Gr&ouml;sse ist deaktiviert.',
	'Xtraduccion' => '&Uuml;bersetzung',
	'Xtraduccion_intro' => 'Hier k&ouml;nnen &Uuml;bersetzungen angelegt oder ge&auml;ndert werden. W&auml;hlen Sie hierzu eine Quellsprache und eine Zielsprache und geben Sie die &Uuml;bersetzungen in die Textfelder ein.<br />Folgen Sie diesen Schritten:<br /><br /><strong>1) Zeichensatz w&auml;hlen.</strong><br /><strong>2) W&auml;hlen Sie die Anzeigenart: alle Texte oder nur ohne &Uuml;bersetzung.</strong><br /><strong>3) W&auml;hlen Sie eine Datei welche Sie &uuml;bersetzen m&ouml;chten.</strong><br /><strong>4) Quellsprache w&auml;hlen</strong><br /><strong>5) Zielsprache w&auml;hlen</strong><br /><br />Achten Sie darauf, dass im Text auch PHP-Quelltext vorkommen kann. Bitte behalten Sie diesen Quellcode (durch kopieren). Dieser f&auml;ngt an mit [ und * und endet mit * und ]<br /><br /><strong>WICHTIG: </strong> Speichern Sie, wegen des eingestellten Sitzungslimits, so oft wie m&ouml;glich, sodass Sie vom System nicht automatisch abgemeldet werden und keine Daten/&Uuml;bersetzungen verlieren.',
	'Xarquivo' => 'Datei',
	'Xclave' => 'Schl&uuml;ssel',
	'Xsub_clave' => 'Unterschl&uuml;ssel',
	'Xreiniciar_campos' => 'Zur&uuml;ck zur Originalversion',
	'Xgardar_idioma' => '&Uuml;bersetzung speichern',
	'Xlistar' => 'Liste',
	'Xtodas' => 'Alles',
	'Xsen_traducir' => 'Nicht &uuml;bersetzt',
	'Xcomprobar_traduccions' => '&Uuml;berstzungsstauts &uuml;berpr&uuml;fen',
	'Xescolle_idioma' => '- Sprache w&auml;hlen -',
	'Xtraduccion_estado' => 'Vergessen Sie nicht, dass der Prozess einige Zeit beansprucht da alle verf&uuml;gbaren Sprachordner und alle darin enthaltenen Dateien &uuml;berpr&uuml;ft werden.<br /><br />Farbkodierung der Liste:<br /><br /><table summary=""><tr><td style="background: #6c6; padding: 5px;"> Gr&uuml;n zeigt an, dass die Datei in der Zelle mit der gelisteten Sprache den gleichen Wert hat wie die gew&auml;hlte Quelle und damit ist die &Uuml;bersetzung abgeschlossen.</td></tr><tr><td style="background: #69E; padding: 5px;"> Blau zeigt an, dass die gelistete Sprache mehrere &uuml;bersetzte Schl&uuml;ssel hat als die als Quellsprache gew&auml;hlte Sprache.</td></tr><tr><td style="background: #E66; padding: 5px;"> Rot zeigt an, dass mehrere Schl&uuml;ssel&uuml;bersetzungen, in der gelisteten Sprachdatei fehlen</td></tr><tr><td style="background: #000; color: #FFF; padding: 5px;"> Schwarz zeigt an, dass die gelistete Sprachdatei nicht existiert.</td></tr></table><br /><br />W&auml;hlt die Sprache von der der Ursprung mit anderen Sprachen gew&auml;hlt wurde.',
	'Xvaciar_inc' => 'M&ouml;chten Sie alle zus&auml;tzlichen Informationsdateien und Vorschaubilder, welche von PHPfileNavigator erstellt wurden, l&ouml;schen? Diese Aktion l&ouml;scht keine pers&ouml;nlichen Dateien.',
	'Xm_varios' => 'Diverses',
	'Xvarios' => 'Diverse Einstellungen',
	'Xver_detalle' => 'Komplette Detailansicht',
	'Xarquivos_logs' => 'Protokolldatei',
	'Xlogs_info' => 'Hier k&ouml;nnen alle Protokolldateien mit MySQL-Fehlern oder Datei-/Ordneraktionen l&ouml;schen.',
	'Xlogs_arq_accions' => 'Aktionsprotokoll f&uuml;r Stammverzeichnis',
	'Xlogs_arq_mysql' => 'MySQL Fehlerprotokoll',
	'Xborrar_inc' => 'L&ouml;schen von zus&auml;tzlichen<br />Informationsdateien',
	'Xborrar_imx' => 'L&ouml;schen von <br />Vorschaubildern',
	'Xrevisar_peso_actual' => 'Aktuelle Gr&ouml;sse &uuml;berpr&uuml;fen',
	'Xcambiar_datos' => 'Daten &auml;ndern',
	'Xm_doazon' => 'Bitte spenden Sie - Danke!',
	'Xm_doazon_texto' => 'Bitte, spenden Sie um die Entwicklung fortf&uuml;hren zu k&ouml;nnen<br /><br />Danke.',
);
?>