<?php
header('Allow: POST');
header('Content-Type: application/json');

// Configuración de reCAPTCHA
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/recaptcha_helper.php');

use ReCaptcha\ReCaptcha;

// Permitir solo el dominio autorizado
$allowed_origin = 'https://carlesteve.dev'; // Cambia esto por tu dominio

// Comprobar si es una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
    exit;
}

// Obtener el valor de la cabecera 'Origin' o 'Referer'
$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : null;
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

// Verificar si la solicitud proviene del dominio permitido
if ($origin !== $allowed_origin && strpos($referer, $allowed_origin) === false) {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud no autorizada.']);
    exit;
}

// Recoger los datos JSON enviados desde index.js
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Verificar que los datos hayan sido decodificados correctamente
if ($data) {
    $nombre = $data['nombre'];
    $email = $data['email'];
    $phone = $data['phone'];
    $subject = $data['subject'];
    $message = $data['message'];
    $recaptchaResponse = isset($data['g-recaptcha-response']) ? $data['g-recaptcha-response'] : '';

    // Validar reCAPTCHA
    if (empty($recaptchaResponse)) {
        echo json_encode(['status' => 'error', 'message' => 'Por favor, completa la verificación reCAPTCHA.']);
        exit;
    }

    // Verificar reCAPTCHA con Google usando la librería oficial
    $recaptcha = new ReCaptcha(getRecaptchaSecretKey());
    $recaptchaVerify = $recaptcha->verify($recaptchaResponse, $_SERVER['REMOTE_ADDR']);

    if (!$recaptchaVerify->isSuccess()) {
        $errorCodes = $recaptchaVerify->getErrorCodes();
        error_log('reCAPTCHA verification failed: ' . implode(', ', $errorCodes));
        echo json_encode(['status' => 'error', 'message' => 'La verificación reCAPTCHA falló. Por favor, inténtalo de nuevo.']);
        exit;
    }

    // Enviar una respuesta al cliente
    echo json_encode(['status' => 'success', 'message' => 'Formulario enviado correctamente.']);
    
    // Configurar el cliente de Resend
    $resend = Resend::client('re_6reeALyt_FwKZWkQr2KueGXPasgELBW6s');
    $resend->emails->send([
      'from' => 'info@carlesteve.dev',
      'to' => ['ecarles10@gmail.com'],
      'subject' => $subject,
      'html' => "<p>de: <strong>$nombre</strong><br>
                  email: <strong>$email</strong><br>
                  tlf: <strong>$phone</strong></p>
                  <p>$message</p>"
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Datos inválidos.']);
}
?>
