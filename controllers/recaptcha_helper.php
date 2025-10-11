<?php
/**
 * Obtiene la clave del sitio de reCAPTCHA
 */
function getRecaptchaSiteKey() {
    $recaptchaConfig = include(__DIR__ . '/../config/recaptcha.php');
    return $recaptchaConfig['site_key'];
}