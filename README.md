# TimbrePdf417
Generar Timbre Pdf417

<h3>Paso 1: Enviar el Archivo Txt al servidor de Facturación:</h3>
<br>Para enviar desde Linux:
<br>curl --form "archivito=@FormatoBoletaElectronica.php" http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/factronica_webservice_servidor_timbreelectronico/index.php

<br>Para Enviar desde windows:
<br>c:\curl\curl.exe --form "archivito=@c:\curl\FormatoBoletaElectronica.php" http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/factronica_webservice_servidor_timbreelectronico/index.php

<h3>Paso 2: Recuperar el Png con Pdf417 desde Servidor de Facturación:</h3>
<br>curl -o PDF4189428000-K_TIPO33_FOLIO38.png http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/factronica_webservice_servidor_timbreelectronico/almacen_remoto/PDF4189428000-K_TIPO33_FOLIO38.png
