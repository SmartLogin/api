<?php

//Datos
$endpoint = 'https://clientes.smartlogin.com.ar/api';
$key = 'Mi_API_key';		//Del panel de clientes
$token = 'MI_API_Token';	//Del panel de clientes

//////////////////////////////////////////////////////
// Nuevos contactos capturados
//Inicialización de CURL
$ch = curl_init($endpoint.'/contacts/new');
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('X-KEY:'. $key, 'X-TOKEN: '. $token),
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => 1
));

//Ejecución. $out contiene el resultado.
$out = curl_exec($ch);
curl_close($ch);



///////////////////////////////////////////////////////
// Datos del contacto cuyo ID es 12345
$ch = curl_init($endpoint.'/contacts/12345');
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('X-KEY:'. $key, 'X-TOKEN: '. $token),
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => 1
));

//Ejecución. $out contiene el resultado.
$out = curl_exec($ch);
curl_close($ch);
