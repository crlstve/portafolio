<?php
/**
 * Script de debug para verificar la configuración de reCAPTCHA
 * ELIMINAR EN PRODUCCIÓN
 */

$recaptchaConfig = include(__DIR__ . '/../config/recaptcha.php');

echo "<h2>Debug reCAPTCHA Configuration</h2>";
echo "<p><strong>Site Key:</strong> " . htmlspecialchars($recaptchaConfig['site_key']) . "</p>";
echo "<p><strong>Secret Key (primeros 10 caracteres):</strong> " . htmlspecialchars(substr($recaptchaConfig['secret_key'], 0, 10)) . "...</p>";

// Verificar longitud de las claves
echo "<p><strong>Longitud Site Key:</strong> " . strlen($recaptchaConfig['site_key']) . " caracteres</p>";
echo "<p><strong>Longitud Secret Key:</strong> " . strlen($recaptchaConfig['secret_key']) . " caracteres</p>";

// Las claves de reCAPTCHA v2 deben tener 40 caracteres
if (strlen($recaptchaConfig['site_key']) !== 40) {
    echo "<p style='color: red;'><strong>ERROR:</strong> Site Key debe tener 40 caracteres</p>";
}

if (strlen($recaptchaConfig['secret_key']) !== 40) {
    echo "<p style='color: red;'><strong>ERROR:</strong> Secret Key debe tener 40 caracteres</p>";
}

echo "<hr>";
echo "<p><em>ELIMINAR ESTE ARCHIVO EN PRODUCCIÓN</em></p>";
?>