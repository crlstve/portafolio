<?php
header('Allow: POST');
header('Content-Type: application/json');

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/recaptcha_helper.php');

use ReCaptcha\ReCaptcha;
use Resend;

$allowed_origin = 'https://carlesteve.dev';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
    exit;
}

$origin  = isset($_SERVER['HTTP_ORIGIN'])  ? $_SERVER['HTTP_ORIGIN']  : null;
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

if ($origin !== $allowed_origin && strpos($referer, $allowed_origin) === false) {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud no autorizada.']);
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (!$data) {
    echo json_encode(['status' => 'error', 'message' => 'Datos inválidos.']);
    exit;
}

$nombre          = $data['nombre']               ?? '';
$email           = $data['email']                ?? '';
$phone           = $data['phone']                ?? '';
$subject         = $data['subject']              ?? '';
$message         = $data['message']              ?? '';
$recaptchaToken  = $data['g-recaptcha-response'] ?? '';

// reCAPTCHA desactivado temporalmente
// if (empty($recaptchaToken)) {
//     echo json_encode(['status' => 'error', 'message' => 'Por favor, completa la verificación reCAPTCHA.']);
//     exit;
// }
// $recaptcha = new ReCaptcha(getRecaptchaSecretKey());
// $recaptchaVerify = $recaptcha->verify($recaptchaToken, $_SERVER['REMOTE_ADDR']);
// if (!$recaptchaVerify->isSuccess()) {
//     error_log('reCAPTCHA verification failed: ' . implode(', ', $recaptchaVerify->getErrorCodes()));
//     echo json_encode(['status' => 'error', 'message' => 'La verificación reCAPTCHA falló. Por favor, inténtalo de nuevo.']);
//     exit;
// }

echo json_encode(['status' => 'success', 'message' => 'Formulario enviado correctamente.']);

$resend = Resend::client('re_6reeALyt_FwKZWkQr2KueGXPasgELBW6s');
$resend->emails->send([
    'from'    => 'info@carlesteve.dev',
    'to'      => ['ecarles10@gmail.com'],
    'subject' => $subject,
    'html'    => "<p>de: <strong>{$nombre}</strong><br>
                  email: <strong>{$email}</strong><br>
                  tlf: <strong>{$phone}</strong></p>
                  <p>{$message}</p>",
]);
