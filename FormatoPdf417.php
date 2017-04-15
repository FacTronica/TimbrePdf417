<?php 
############################################################## 
#######	CARATULA
##############################################################
# RUT DEL CONTRIBUYENTE EMISOR
$Caratula["RutEmisor"]="7777777-7"; 
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA
$Caratula["RutEnvia"]="33333333-3";
# EN MODO CERTIFICACION RUT=60803000-K
$Caratula["RutReceptor"]="60803000-K";  
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA
$Caratula["FchResol"]="2014-08-22"; 
# CERTIFICACION NUM=CERO
$Caratula["NroResol"]="80"; 
# NOMBRE SUCURSAL SII
$Caratula["SucSii"]="PUNTA ARENAS"; 
##############################################################   
#######	ENCABEZADO
############################################################## 
# FECHA DE EMISIÓN
$IdDoc["FchEmis"]="2016-08-05"; 
# TIPO DE DOCUMENTO 39=BOLETA ELECTRONICA
$IdDoc["TipoDTE"]="39"; 
# FOLIO DEL DOCUMENTO
$IdDoc["Folio"]="245"; 
############################################################## 
#######	EMISOR
##############################################################
# RUT EMISOR
$Emisor["RUTEmisor"]="77777777-7";  
# RAZON SOCIAL EMISOR
$Emisor["RznSoc"]="EMPRESA LTDA"; 
# GIRO EMISOR
$Emisor["GiroEmis"]="MARKETING";
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["Acteco"]="202900"; 
# CODIGO DE LA SUCURSAL DEL SII
$Emisor["CdgSIISucur"]="12205"; 
# DIRECCION EMISOR
$Emisor["DirOrigen"]="ALAMEDA 340";
# COMUNA EMISOR
$Emisor["CmnaOrigen"]="PUNTA ARENAS";
# CIUDAD EMISOR
$Emisor["CiudadOrigen"]="PUNTA ARENAS";
# CODIGO DEl VENDEDOR    
$Emisor["CdgVendedor"]="PERICO LOS PALOTES";
# EMAIL EMISOR
$Emisor["CorreoEmisor"]="ventas1@MARKETING.cl";
# WEB EMISOR
$Emisor["Web"]="www.MARKETIING.cl";
# FONO EMISOR
$Emisor["Telefono"]="22334455";
# FAX EMISOR
$Emisor["Fax"]="";
############################################################## 
#######	RECEPTOR
##############################################################
# RUT RECEPTOR
$Receptor["RUTRecep"]="33333333-3"; 
# RUT RECEPTOR
$Receptor["CdgIntRecep"]=""; 
# RAZON SOCIAL RECEPTOR
$Receptor["RznSocRecep"]="RECEPTOR PRUEBAS LTDA.";
# GIRO RECEPTOR
$Receptor["GiroRecep"]="SERVICIOS VARIOS";
# DIRECCION RECEPTOR
$Receptor["DirRecep"]="PROVIDENA 8877";
# COMUNA RECEPTOR
$Receptor["CmnaRecep"]="SANTIAGO";
# CIUDAD RECEPTOR
$Receptor["CiudadRecep"]="SANTIAGO";
# CONTACTO RECEPTOR
$Receptor["Contacto"]="juan perez";
# CORREO RECEPTOR
$Receptor["CorreoRecep"]="contacto@factronica.cl";
##############################################################
#######	TOTALES
##############################################################
# TASA DE IMPUESTO
$Totales["TasaIVA"]="19";
# NETO AFECTO
$Totales["MntNeto"]="20000";
# NETO EXENTO
$Totales["MntExe"]="0";
# MONTO IVA
$Totales["IVA"]="23800"; 
# MONTO TOTAL BRUTO
$Totales["MntTotal"]="23800";  
# % DESCUENTO GLOBAL AFECTO
$Totales["porcdescuento_afecto"]="";
# % DESCUENTO GLOBAL EXENTO
$Totales["porcdescuento_exento"]="";
##############################################################
#######	 DETALLE
##############################################################
# LINEA 1 DEL DOCUMENTO
$Detalle["1"]["NroLinDet"]="1"; # NUMERO DE LINEA
$Detalle["1"]["NmbItem"]="Whisky JB Gold"; # NOMBRE DEL ITEM
$Detalle["1"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO P=PRODUCTO C=CUENTA M=MATERIAPRIMA I=INSUMO
$Detalle["1"]["UnmdItem"]="UNI"; # UNIDAD DE MEDIDA DEL ITEM KG=KILOGRAMO
$Detalle["1"]["QtyItem"]="2"; # CANTIDAD DE UNDS.
$Detalle["1"]["VlrCodigo"]="110223"; # CODIGO ITEM
$Detalle["1"]["PrcItem"]="5000"; # PRECIO UNITARIO
$Detalle["1"]["DscItem"]="Whisky JB Gold Edicion Premier"; 
$Detalle["1"]["MontoItem"]="10000"; # MONTO TOTAL DEL ITEM
$Detalle["1"]["DscItemPesos"]="0"; # DESCUENTO PESOS ITEM
$Detalle["1"]["IndExe"]="0"; # ITEMS EXENTOS 1=SI 0=NO
$Detalle["1"]["DescuentoPct"]="0"; # DESCUENTO PORC. ITEM 
############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="nnnnnnnnnnn"; 
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="nnnn"; 
# CERTIFICADO X509
$certificado["X509Certificate"]="nnnnnnnn";
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="nnnnnnn"; 
##############################################################
#######	CARGAR DATOS DE TIMBRAJE DE FOLIOS
##############################################################
# RUT EMISOR FORMATO 77777777-7
$CAF["RE"]="nnn";
# RAZON SOCIAL EMISOR
$CAF["RS"]="nnn";
# TIPO DE DOCUMENTO POR EJ. 39
$CAF["TD"]="nn";
# FOLIO DESDE POR EJ. 1
$CAF["RNG_D"]="nnn";
# FOLIO HASTA POR EJ. 100
$CAF["RNG_H"]="nnn";
# FECHA AUTORIZACION TIMBRAJE FORMATO 2017-03-17
$CAF["FA"]="nnn";
# MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_M"]="nnn";
# MODULO EXPONENTE TIMBRAJE POR EJ Aw==
$CAF["RSAPK_E"]="nnn";
# INDICE DEL TIMBRAJE POR EJ. 100
$CAF["RSAPK_IDK"]="nnn";
# FIRMA DEL TIMBRAJE
$CAF["FRMA"]="nnn";
# LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSASK"]="nnn";
# LLAVE PUBLICA DEL TIMBRAJE
$CAF["RSAPUBK"]="nnn";
# FECHA Y HORA DEL TIMBRAJE DE EMISION FORMATO 2017-04-13T12:02:43
$CAF["TSTED"]="nnn";
##############################################################
#######	NOMBRES DE ARCHIVOS Y VARIABLES FACTRONICA
##############################################################
$FACTRONICA["ALMACENLOCAL"]="almacen_local";
$FACTRONICA["FILEPDF"]="PDF_RUT89428000-K_TIPO33_FOLIO38.pdf"; 
$FACTRONICA["FILEPDFCLIENTE"]="PDFC_RUT89428000-K_TIPO33_FOLIO38.pdf";  
$FACTRONICA["ALMACENREMOTO"]="almacen_remoto";
$FACTRONICA["FILETXT"]="envio_dte.txt";  
$FACTRONICA["DTEPORFIRMAR"]="DTEPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["DTEFIRMADO"]="DTEFIRMADO_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["SETDTEPORFIRMAR"]="SETPORFIRMAR_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["SETDTEFIRMADO_CLIENTE"]="SETFIRMADOCLIENTE_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["SETDTEFIRMADO_SII"]="SETFIRMADOSII_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["FILEPNG"]="PDF4189428000-K_TIPO33_FOLIO38.png";  
$FACTRONICA["TRACKID"]="TRACKID_RUT89428000-K_TIPO33_FOLIO38.xml";  
$FACTRONICA["PDFDECIMALESCANTIDAD"]="0";  
$FACTRONICA["PDFDECIMALESUNITARIO"]=""; 
?>
