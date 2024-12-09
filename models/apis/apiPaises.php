<?php
// URL de la API
$url = "https://www.universal-tutorial.com/api/getaccesstoken";

// Inicializar cURL
$ch = curl_init();

// Configurar las opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "api-token: mrDlQBOxqOeVPtXOctRjWr7Mlp41ngCpTwETW3P-mV4OWOTxuptmDLbc3gqsrgtzvbc",
    "user-email: delltv262002@gmail.com"
]);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);

// Verificar si ocurrió algún error
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decodificar la respuesta JSON
    $responseData = json_decode($response, true);
    // Imprimir la respuesta
    // print_r($responseData);
}

// Cerrar la conexión cURL
curl_close($ch);

$url = "https://www.universal-tutorial.com/api/countries";

// Inicializar cURL
$ch = curl_init();

// Configurar las opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "Authorization: Bearer ".$responseData["auth_token"]
]);



// Ejecutar la solicitud y obtener la respuesta
$response2 = curl_exec($ch);

// Verificar si ocurrió algún error
if ($response2 === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decodificar la respuesta JSON
    $responseData2 = json_decode($response2, true);
    // Imprimir la respuesta
    // print_r($responseData2);
}

// Cerrar la conexión cURL
curl_close($ch);


?>
