# TimbrePdf417
Generar Timbre Pdf417

FactronicaTimbrePdf417 es parte Fundamental del SDK Factronica.
<br>La Aplicación está diseñada para generar el timbre electrónico PDF417 de acuerdo a las normas exigidas por el SII Chile.
<br>En tan solo 3 pasos puede generar el timbre electrónico.

<h3>Paso 1: Crear el Archivo Txt con Datos del Documento:</h3>
<br>En este proceso se debe generar un archivo de texto plano con la información del documento a emitir.
<br>El formato del archivo de texto plano se puede obtener desde la siguiente url https://github.com/FacTronica/TimbrePdf417/blob/master/FormatoPdf417.php

<h3>Paso 2: Enviar el Archivo Txt al servidor de Facturación:</h3>
<br><b>Usuarios Linux:</b>
<br>curl --form "archivito=@FormatoBoletaElectronica.php" http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/index.php

<br><b>Usuarios windows:</b>
<br>c:\curl\curl.exe --form "archivito=@c:\curl\FormatoBoletaElectronica.php" http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/index.php

<h3>Paso 3: Recuperar el Png con Pdf417 desde Servidor de Facturación:</h3>
<br><b>Usuarios Linux:</b>
<br>curl -o PDF4189428000-K_TIPO33_FOLIO38.png http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/almacen_remoto/PDF4189428000-K_TIPO33_FOLIO38.png

<br><b>Usuarios Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\PDF4189428000-K_TIPO33_FOLIO38.png http://www.factronica.cl/servidores/factronica_webservice_servidor_timbreelectronico/almacen_remoto/PDF4189428000-K_TIPO33_FOLIO38.png

<br>Finalmente al obtener este archivo png, se utiliza para insertarlo en su ticket de impresión térmica de 80mm o simplemente insertarlo en el formato de su archivo pdf en tamaño carta u oficio.
